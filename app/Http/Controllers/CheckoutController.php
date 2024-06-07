<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index(Request $request)
    {

        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('shop.checkout', compact('cartItem'));

        }
}
