
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('cart/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="shopping-cart">
            <h1>Shopping History</h1>
            <div class="cart-items">
                @foreach ($cartItems as $item)
                <div class="cart-item">
                    <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product_name }} Image">
                    <div class="item-details">
                        <h2>{{ $item->product_name }}</h2>
                        <p>{{ $item->product->description }}</p>
                        {{-- <div class="item-quantity">
                            <button>-</button>
                            <input type="number" value="1">
                            <button>+</button>
                        </div> --}}
                    </div>
                    <div class="item-price">$ {{ $item->price }}</div>
                    <div class="item-remove">
                        {{-- <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                        </form> --}}
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{ url('/') }}" class="back-to-shop">← Back to shop</a>
        </div>
        <div class="summary">
            <h2>Summary</h2>
            <div class="summary-item">
                <span>ITEMS {{ $cartItems->count() }}</span>
                <span>$ {{ $cartItems->sum('price') }}</span>
            </div>
            <div class="summary-item">
                {{-- <label for="shipping">SHIPPING</label>
                <select id="shipping">
                    <option value="5">Standard-Delivery- €5.00</option>
                    <option value="10">Express-Delivery- €10.00</option>
                </select>
            </div>
            <div class="summary-item">
                <label for="give-code">GIVE CODE</label>
                <input type="text" id="give-code" placeholder="Enter your code">
                <button>→</button>
            </div> --}}
            <div class="summary-item total">
                <span>TOTAL PRICE</span>
                <span> $ {{ $cartItems->sum('price') + 5 }}</span> <!-- Assuming default shipping is 5 -->
            </div>
            {{-- <button class="checkout-btn">CHECKOUT</button> --}}
        </div>
    </div>
</body>
</html>

