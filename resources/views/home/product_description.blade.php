{{-- @extends('home.layout')
         
@section('product')

    <section class="product_section layout_padding"> 
        <div style="max-width: 800px; margin: 0 auto; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px;">

            <h1 style="font-size: 24px; margin-bottom: 10px;">{{ $product->title }}</h1>
            <p style="font-size: 16px; margin-bottom: 8px;"><strong>Ship Name:</strong> {{ $product->ship_name }}</p>
            <p style="font-size: 16px; margin-bottom: 8px;"><strong>Company:</strong> {{ $product->company }}</p>
            <p style="font-size: 16px; margin-bottom: 8px;"><strong>Location:</strong> {{ $product->location }}</p>
            <p style="font-size: 16px; margin-bottom: 8px;"><strong>Email:</strong> {{ $product->email }}</p>
            <p style="font-size: 16px; margin-bottom: 8px;"><strong>Description:</strong> {{ $product->description }}</p>
            <p style="font-size: 16px; margin-bottom: 8px;"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>

            @if ($product->logo)
            <img src="{{ asset('path/to/logos/' . $product->logo) }}" alt="{{ $product->title }} Logo" style="max-width: 100%; height: auto; margin-top: 20px;">
            @else
            <p style="color: #888; font-style: italic; margin-top: 20px;">No logo available</p>
            @endif

            <div class="options">
                <a href="" class="btn btn-primary">
                Buy Now
                </a>
            </div>

        </div>
    </section>

@endsection --}}



<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ship Details</title>
            <!-- bootstrap core css -->
            <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
            <!-- font awesome style -->
            <link href="home/css/font-awesome.min.css" rel="stylesheet" />
            <!-- Custom styles for this template -->
            <link href="home/css/style.css" rel="stylesheet" />
            <!-- responsive style -->
            <link href="home/css/responsive.css" rel="stylesheet" />
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    padding: 20px;
                }
        
                .container {
                    max-width: 800px;
                    margin: 0 auto;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    padding: 30px;
                }
        
                h1 {
                    font-size: 28px;
                    margin-bottom: 20px;
                    color: #333;
                }
        
                p {
                    font-size: 18px;
                    margin-bottom: 12px;
                    color: #555;
                }
        
                strong {
                    font-weight: bold;
                }
        
                img {
                    max-width: 100%;
                    height: auto;
                    margin-top: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
        
                .no-logo {
                    color: #888;
                    font-style: italic;
                    margin-top: 20px;
                }
                .buy-btn {
                    display: inline-block;
                    padding: 10px 20px;
                    font-size: 16px;
                    font-weight: bold;
                    text-decoration: none;
                    color: #fff;
                    background-color: #007bff;
                    border: 2px solid #007bff;
                    border-radius: 5px;
                    transition: background-color 0.3s, border-color 0.3s, color 0.3s;
                }

                .buy-btn:hover {
                    background-color: #0056b3;
                    border-color: #0056b3;
                }
            </style>
        </head>
        <body>
        
            <div class="container">
                <h1>{{ $product->title }}</h1>
                <p><strong>Ship Name:</strong> {{ $product->ship_name }}</p>
                <p><strong>Company:</strong> {{ $product->company }}</p>
                <p><strong>Location:</strong> {{ $product->location }}</p>
                <p><strong>Email:</strong> {{ $product->email }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            
                @if ($product->image)
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }} Image">
                @else
                <p class="no-logo">No image available</p>
                @endif

                <a href="/checkout/{{ $product->id }}" class="buy-btn">Buy Now</a>
            </div>
               
        </body>
 </html>
 