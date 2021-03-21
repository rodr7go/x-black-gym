<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::all();

        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $duration = Cost::where('id',$request->cost_id)->first()->duration_months;
        $expDate = Carbon::create($request->payment_date)->addMonths($duration);
        $request->merge([
           'expiration_date' => $expDate
        ]);

        Payment::create($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
