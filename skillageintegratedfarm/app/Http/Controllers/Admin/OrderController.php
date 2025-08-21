<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;
use App\Models\Product;
use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\PaymentMethod;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        $products = Product::get();
        $detail_orders = DetailOrder::get();
        $payment_methods = PaymentMethod::all();
        return view('pages.admin.order.index', compact('orders', 'products', 'detail_orders','payment_methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::all();
        $products = Product::all();
        $detail_orders = DetailOrder::all();
        $payment_methods = PaymentMethod::all();
        return view('pages.admin.order.create-modal', compact('orders', 'products', 'detail_orders', 'payment_methods'));
    }

     /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Initialize total cost for the order
        $total = 0;

        // Retrieve the first payment method or set to null if none exists
        $paymentMethodId = is_array($request->payment_method_id) ? (int)$request->payment_method_id[0] : null;
        $categoryOrder = is_array($request->category_order) ? (string)$request->category_order[0] : null;
        
        // Create the main order record
        $order = Order::create([
            'payment_method_id' => $paymentMethodId,
            'status' => 'pending',
            'category_order' => $categoryOrder,
            'total' => 0, // Placeholder, will be updated later
            'description' => $request->description,
        ]);

        // Retrieve products and quantities as arrays from the request
        $products = $request->input('products', []);
        $quantities = $request->input('amount_product', []);
        $discounts = $request->input('discount', []);
        $informations = $request->input('information', []);

        // Loop through each product entry
        foreach ($products as $index => $product_id) {
            // Check if the product exists in the database
            $product = Product::find((int)$product_id);
            
            // If product does not exist, skip this iteration to avoid foreign key errors
            if (!$product) {
                continue; // Skip this product if not found
            }
            
            // Get quantity and price, casting them to the appropriate types
            $quantity = (int)$quantities[$index];
            $discount = (int)$discounts[$index];
            $information = (string)$informations[$index];
            $price = (float)($product->price ?? 0); // Default to 0 if price is null
            
            // Calculate subtotal and add to total order amount
            $subtotal = ((($price - ($price * $discount/100)) * $quantity));
            $total += $subtotal;

            // Create the detail order entry
            DetailOrder::create([
                'order_id' => $order->id,
                'product_id' => $product->id, // Product ID is guaranteed to exist here
                'amount_product' => $quantity,
                'price' => $price,
                'discount' => $discount, // Adjust if needed
                'sum_price' => $subtotal,
                'information' => $information, // Adjust as necessary
                
            ]);
        }

        // Update the total in the order record
        $order->update(['total' => $total]);

        // Redirect with a success message
        return redirect()->route('order.index')->with('success', 'Order created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(DetailOrder $detail_orders, $id)
    {
        $detail_orders['detail_orders'] = DetailOrder::with('product')->where('order_id', $id)->get();
        //dd($detail_orders);
        return view('pages.admin.detail-order.index', $detail_orders);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $orders = Order::findOrFail($id);
    //     return view('pages.admin.order.partials.edit-modal', compact('orders'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 'paid',
        ]);
        return redirect()->route('order.index')->with('success', 'order deleted successfully.');
    }
}
