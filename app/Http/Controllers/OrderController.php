<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getallorders()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function index()
    {
        $orders = Auth::user()->orders;
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $validation = $request->validate([
            'total_price' => 'required|numeric|max_digits:5',
            'status' => 'required|string'
        ]);
        $validation['user_id'] = $user_id;
        $order = Order::create($validation);

        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $order = Order::find($id);
        if ($order->user_id != $user_id)
            return response()->json(['message'=>'unauthurize'], 403);
        $validation= $request->validate([
            'total_price' => 'sometimes|numeric|max_digits:5',
            'status' => 'sometimes|string'
        ]);
        $order->update($validation);
        return response()->json($order);
    }
}
