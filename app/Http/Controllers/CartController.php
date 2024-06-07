<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Cart;
//auth
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function updateQuantity(Request $request, $id)
    {
        $Cart = Cart::find($id);
        if (!$Cart) {
            return redirect()->route('cart.index')->with('error', 'Cart item not found.');
        }

        $Cart->prod_qty = $request->input('quantity');
        $Cart->save();

        return redirect('cart')->with('success', 'Quantity updated successfully.');
    }
    public function delete($id)
    {
        $Cart = Cart::find($id);

        if (!$Cart) {
            return redirect()->back()->with('error', 'Item not found.');
        }

        $Cart->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
    //show cart
    public function show()
    {
        $product = Product::all();
        $cart = Cart::all();
        return view('shop.cart', compact('cart', 'product'));
    }

    public function addToCart(Request $request, $id)
    {
        if (Auth::check()) {
            // Check if the product is already in the cart
            $existingCartItem = Cart::where('user_id', Auth::id())
                ->where('product_id', $id)
                ->first();

            if ($existingCartItem) {
                return redirect()->back()->with('fail', "Product is already in the cart");
            }

            // If the product is not in the cart, add it
            $product = Product::find($id);
            if (!$product) {
                return redirect()->back()->with('error', "Product not found");
            }

            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $id;
            $cart->quantity = $request->input('quantity', 1); // Ensure default quantity is 1 if not specified
            $cart->prod_name = $product->name; // Set product name from the 'products' table
            $cart->prod_image = $product->image; // Set product image
            $cart->prod_price = $product->selling_price ?? 0; // Set product price from 'products' table

            $cart->save();

            return redirect()->back()->with('success', "Product added to cart successfully");
        } else {
            return redirect()->route('login')->with('error', "You must be logged in to add products to cart");
        }
    }
    public function viewCart()
    {
        $Carts = Cart::where('user_id', Auth::id())->get();
        return view('cart.index', compact('Carts'));
    }


    public function cartcount()
    {
        $cartcount = Cart::where('user_id', Auth::id())->count();
        return response()->json(['count'=>$cartcount]);
    }



    public function showw()
    {
        $Carts = Cart::where('user_id', Auth::id())->get();
        return view('shop.cart', compact('Carts'));
       }




}
