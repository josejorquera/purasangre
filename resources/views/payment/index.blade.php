@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">

    <div class="col-md-12">
      @if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{Session::get('success','hola')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      @endif
      <div class="ibox">
        <div class="ibox-head">
          <div class="ibox-title">
            Registro de Pago
          </div>
        </div>
        <div class="ibox-body">
          <table class="table table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Fecha del Pago</th>
                {{-- <th>Detalle</th> --}}
                <th>N° boleta</th>
                <th>Nombre del Cliente</th>
                <th>Forma de Pago</th>
                <th>Monto</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach($payments as $payment)
              <tr>
                <td>{{$payment->payment_at}}</td>
                {{-- <td>{{$payment->detail}}</td> --}}
                <td>{{$payment->bill_number}}</td>
                <td><a href="{{url('/client/show/'.$payment->client->id)}}">{{$payment->client->first_name}} {{$payment->client->last_name}} </a></td>
                <td>{{$payment->payment_type->name}}</td>
                <td>{{$payment->amount}}</td>
                <td>
                  <a href="{{url('/payment/show/'.$payment->id)}}" class="btn btn-success">Mostrar</a>
                  <a href="{{url('/payment/edit/'.$payment->id)}}" class="btn btn-info">Editar</a>
                  <a href="{{url('/payment/delete/'.$payment->id)}}" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection
