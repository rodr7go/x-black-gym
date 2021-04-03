<?php

namespace App\Http\Controllers;

use App\Mail\PaymentReminder;
use App\Models\Cost;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $payment = Payment::create($request->all());
        $user = User::find($request->user_id);

        return back()->with(compact('payment', 'user'));
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

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index');
    }

    public function sendPaymentReminder($id)
    {
        $payment = Payment::where('id', $id)->first();

        Mail::to($payment->user->email)->send(new PaymentReminder($payment));

        dd('done');
    }
}
