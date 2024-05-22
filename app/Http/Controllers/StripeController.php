<?php 
 
namespace App\Http\Controllers;
 
use Stripe\Stripe;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Stripe\BillingPortal\Session;
 
class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function checkout2(Product $product){
        return view('checkout', [
            'product' => $product
        ]);
    }
 
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $product = Product::find($request->product);
        $totalprice = $product->price;
        $two0 = "00";
        $total = "$totalprice$two0";

        $customer = auth()->guard('customer')->user();
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $product->ship_name,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        Cart::create([
            'customer_id' => $customer->id,
            'product_id' => $product->id,
            'product_name' => $product->title,
            'price' => $product->price,
            'company' => $product->company,
        ]);
 
        return redirect()->away($session->url);
    }
 
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }

    // public function success(Request $request)
    // {
    //     $productId = $request->product_id;
    //     $customerId = $request->customer_id;

    //     $product = Product::findOrFail($productId);
    //     $customer = Customer::findOrFail($customerId);

    //     // Save history record
    //     Cart::create([
    //         'customer_id' => $customer->id,
    //         'product_id' => $product->id,
    //         'product_name' => $product->title,
    //         'price' => $product->price,
    //         'company' => $product->company,
    //     ]);

    //     return view('success');
    // }

}