<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
use Redirect;
use App\Payment_type;
use App\Payment;
use Session;
use App\Client;

class PaymentController extends Controller
{
    public function index()
    {
    	//$payment_types= Payment_type::all();
    	//$clients= Client::all();
    	$payments = Payment::all();

        return view('payment.index')->with('payments',$payments);
    }
    public function add($client_id)
    {
    	$client = Client::find($client_id);
    	$payment_types = Payment_type::all();
        return view('payment.add')->with('client', $client)->with('payment_types', $payment_types);
    }

    public function edit($id){

        $payment = Payment::find($id);
        $payment_types = payment_type::all();
        return view('payment.edit')->with('payment', $payment)->with('payment_types', $payment_types);
    }

    public function show($id)
    {
        $Pagos = Payment::find($id);
        return view('payment.show')->with('payment',$Pagos);
    }

    public function delete($id)
    {
        $pago= Payment::find($id);

        if ($pago->delete()) {
            Session::flash('success','Pago eliminado existosamente');
            return redirect('/payment');
        }
        else
        {
            return 'problema al eliminar el pago en DB';
        }
    }


	public function create(PaymentRequest $request)
    	{
            //dd('hola');
    	//dd($request->plan_id);
    	$payment = new Payment;
    	$payment->payment_at = $request->payment_at;
    	$payment->detail = $request->detail;
    	$payment->bill_number = $request->bill_number;
    	$payment->client_id = $request->client_id;
    	$payment->payment_type_id = $request->payment_type_id;
    	$payment->amount = $request->amount;
    	if($payment->save())
    	{
    		Session::flash('success','El pago ha sido almacenado exitosamente');
    		return redirect('/payment');
    	}
    	else
    	{
    		return 'problema al guardar en DB';
    	}

    	//$client = new Client($request);
       // return view('add');
    }

    public function update(Request $request)
    {
 
        $payment = Payment::find($request->id);
        $payment->payment_at = $request->payment_at;
        $payment->detail = $request->detail;
        $payment->payment_type_id = $request->payment_type_id;
        //$payment->amount = $request->amount;
        if($payment->save())
        {
            Session::flash('success','El pago ha sido actualizado exitosamente');
            return redirect('/payment');
        }
        else
        {
            return 'problema al guardar en DB';
        }
    }
}