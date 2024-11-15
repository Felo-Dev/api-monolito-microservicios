<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return response()->json(Payment::with('order')->get(), 200);
    }

    public function show($id)
    {
        $payment = Payment::with('order')->find($id);

        if (!$payment) {
            return response()->json(['error' => 'Payment not found'], 404);
        }

        return response()->json($payment, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_method' => 'required|string|in:credit_card,paypal,bank_transfer',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,completed,failed',
            'transaction_id' => 'nullable|string|max:255',
        ]);

        $payment = Payment::create($validatedData);

        return response()->json($payment, 201);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return response()->json(['error' => 'Payment not found'], 404);
        }

        $validatedData = $request->validate([
            'payment_method' => 'nullable|string|in:credit_card,paypal,bank_transfer',
            'amount' => 'nullable|numeric|min:0',
            'status' => 'nullable|string|in:pending,completed,failed',
            'transaction_id' => 'nullable|string|max:255',
        ]);

        $payment->update($validatedData);

        return response()->json($payment, 200);
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return response()->json(['error' => 'Payment not found'], 404);
        }

        $payment->delete();

        return response()->json(['message' => 'Payment deleted successfully'], 200);
    }
}
