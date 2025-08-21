<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = PaymentMethod::all();
        return view('pages.admin.metode-pembayaran.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments = PaymentMethod::all();
        return view('pages.admin.metode-pembayaran.partials.create-modal', compact('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string|max:2048',
        ]);

        

       

        // Create new program
        PaymentMethod::create([
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('metode-pembayaran.index')->with('success', 'Metode Pembayaran created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $payments = PaymentMethod::all();
        return view('pages.admin.metode-pembayaran.partials.edit-modal', compact('payments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'payment_method' => 'required|string',
        ]);

        $payments = PaymentMethod::findOrFail($id);

        $payments->payment_method = $request->payment_method;


        $payments->save();

        return redirect()->route('metode-pembayaran.index')->with('success', 'Payment updated successfully');
    }

    public function destroy($id)
    {
        $payment = PaymentMethod::findOrFail($id);

        

        $payment->delete();

        return redirect()->route('metode-pembayaran.index')->with('success', 'Payment deleted successfully');
    }
}
