<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

        $order = Order::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'items' => json_encode($request->cart),
            'total_price' => $request->total_price,
            'status' => 'in progress',
            'details' => $request->details ?? 'No additional details',
        ]);

        return response()->json(['message' => 'Order placed successfully!', 'order_id' => $order->id]);
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:in progress,done,canceled',
        ]);

        $order->update(['status' => $request->status]);

        return response()->json(['message' => 'Order status updated successfully!']);
    }
}
