<x-shop-layout>
    <div class="container">
        <h1>Your Cart</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @php
                $total = 0;
            @endphp
            @foreach($Carts as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rs. {{ $item->product->price }}</td>
                    <td>Rs. {{ $item->product->price * $item->quantity }}</td>
                </tr>
                @php
                    $total += $item->product->price * $item->quantity;
                @endphp
            @endforeach
            </tbody>
        </table>
        <div class="total">
            <h2>Total: Rs. {{ $total }}</h2>
        </div>
        <div class="checkout">
            <form action="{{ route('checkout') }}" method="GET">
                @csrf
                <input type="hidden" name="total" value="{{ $total }}">
                <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
            </form>
        </div>
    </div>
</x-shop-layout>
