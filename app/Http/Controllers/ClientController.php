<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Redirect;
use App\Client;
use Session;
use App\Plan;

class ClientController extends Controller
{
    public function index()
    {
        //dd(Session::get('name_filter'));

        $name = '%'.Session::get('name_filter').'%';
 
        if(Session::has('name_filter'))
    	{
            $clients = Client::where('first_name','LIKE',$name)->orWhere('last_name','LIKE',$name)->get();
        }
        else
        {
            $clients = Client::all();
        }
        

        return view('client.index')->with('clients',$clients);
    }

    public function indexFilter(Request $request)
    {
        Session::put('name_filter',$request->name);
        return Redirect('/client');
    }


    public function show($id)
    {
    	$client = Client::find($id);
        return view('client.show')->with('client',$client);
    }

    public function add()
    {
    	$plans = Plan::all();
        return view('client.add')->with('plans',$plans);
    }

    public function edit($id)
    {
    	$client = Client::find($id);
        return view('client.edit')->with('client', $client);
    }


	public function delete($id)
    {
    	$client = Client::find($id);
 	    foreach ($client->payments as $payment) {
            $payment->delete();
        }
        if($client->delete())
    	{
    		Session::flash('success','El cliente ha sido borrado exitosamente');
    		return redirect('/client');
    	}
    	else
    	{
    		return 'problema al eliminar cliente en DB';
    	}
    }

    public function create(ClientRequest $request)
    {
    	//dd($request->plan_id);
    	$client = new Client;
    	$client->rut = $request->rut;
    	$client->first_name = $request->first_name; 
    	$client->last_name = $request->last_name;
    	$client->phone = $request->phone;
    	$client->email = $request->email;
    	$client->address = $request->address;
    	$client->birthdate = $request->birthdate;
    	$client->registered_at = now();
    	$client->plan_id = $request->plan_id;
    	if($client->save())
    	{
    		Session::flash('success','El cliente ha sido creado exitosamente');
    		return redirect('/client');
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
    	//dd($request->plan_id);
    	//$client = new Client;
    	$client = Client::find($request->id);
    	$client->rut = $request->rut;
    	$client->first_name = $request->first_name; 
    	$client->last_name = $request->last_name;
    	$client->phone = $request->phone;
    	$client->email = $request->email;
    	$client->address = $request->address;
    	$client->birthdate = $request->birthdate;
    	$client->registered_at = now();
    	$client->plan_id = $request->plan_id;
    	if($client->save())
    	{
    		return redirect('/client');
    	}
    	else
    	{
    		return 'problema al guardar en DB';
    	}
    }

}
