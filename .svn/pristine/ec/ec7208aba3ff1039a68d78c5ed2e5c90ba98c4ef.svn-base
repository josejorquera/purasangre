@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-8">

      <div class="ibox">
        <div class="ibox-head">
          <div class="ibox-title">
              Detalle del Pago
          </div>
        </div>
        <div class="ibox-body">

          <p><strong>Fecha</strong><br> {{$payment->payment_at}}</p>
          <p><strong>Detalle</strong><br> {{$payment->detail}}</p>
          <p><strong>N° Boleta</strong><br> {{$payment->bill_number}}</p>
          <p><strong>Nombre Cliente</strong><br> {{$payment->client->first_name}} {{$payment->client->last_name}}</p>
          <p><strong>Tipo de Pago</strong><br> {{$payment->payment_type->name}}</p>

          <br>
          <a href="{{url('/payment/')}}" class="btn btn-info">Volver</a>
        </div>
      </div>

    </div>

  </div>

</div>
@endsection
