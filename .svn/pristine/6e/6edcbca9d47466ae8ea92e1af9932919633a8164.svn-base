{{-- $client - modelo del clientes --}}

@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-lg-4">
			<div class="ibox">
				<div class="ibox-head">
					Datos del Cliente
				</div>
				<div class="ibox-body">
					<h2>{{$client->first_name}} {{$client->last_name}}</h2><br>
					<p><strong>Rut:</strong> <br>{{$client->rut}}</p>
					<p><strong>Teléfono:</strong> <br>{{$client->phone}}</p>
					<p><strong>Email:</strong> <br>{{$client->email}}</p>
					<p><strong>Dirección:</strong> <br>{{$client->address}}</p>
					<p><strong>Fecha de Nacimiento:</strong> <br>{{$client->birthdate}}</p>
					<p><strong>Fecha de Registro:</strong> <br>{{$client->registered_at}}</p>
					<p><strong>Plan:</strong> <br>{{$client->plan->name}}</p>
					<br>
					<a href="{{url('/client/')}}" class="btn btn-info">Volver</a>
				</div>
				</div>
		</div>
		<div class="col-md-8 col-lg-8">
			<div class="ibox">
				<div class="ibox-head">
					<div class="ibox-title">
						Pagos Realizados
					</div>
				</div>
				<div class="ibox-body">
					<table class="table table-bordered" style="width:100%">
					<tr>
		    				<th>Fecha del Pago</th>
		   			 		<th>N° Boleta</th>
		   			 		<th>Detalle</th>
		    				<th>Forma de Pago</th>
		    				<th>Monto</th>
		  			</tr>
						@foreach ($client->payments as $payment)
					<tr>
						<td>{{$payment->payment_at}}</td>
						<td>{{$payment->bill_number}}</td>
						<td>{{$payment->detail}}</td>
						<td>{{$payment->payment_type->name}}</td>
						<td>{{$payment->amount}}</td>
					</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
