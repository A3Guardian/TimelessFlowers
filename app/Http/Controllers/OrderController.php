<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'cart' => 'required|array',
            'total_price' => 'required|numeric',
        ]);

        $cartItems = $request->cart;
        $formattedItems = [];

        foreach ($cartItems as $item) {
            $formattedItems[] = [
                'product_id' => $item['id'],
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity']
            ];
        }

        $order = Order::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'items' => json_encode($formattedItems),
            'total_price' => $request->total_price,
            'status' => 'in progress',
            'details' => $request->details ?? 'No additional details',
        ]);

        return response()->json(['message' => 'Order placed successfully!', 'order_id' => $order->id]);
    }

    public function index()
    {
        $orders = Order::latest()->get();
        $products = Product::all();

        return view('admin.orders.index', compact('orders', 'products'));
    }

    public function show(Order $order)
    {
        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:in progress,done,canceled',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
