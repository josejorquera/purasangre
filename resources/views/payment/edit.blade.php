@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8">
      {{-- errores --}}
      @if(count($errors->all())!=0)
      <div class="alert alert-warning">
          <ul>
              @foreach($errors->all() as $error) 
                  <li >{!! $error !!}</li>
              @endforeach 
          </ul>
      </div>
      @endif
      {{-- fin errores --}}
      <div class="ibox">
        <div class="ibox-head">
          <div class="ibox-title">
            Editar Pago cliente: {{$payment->client->first_name}} {{$payment->client->last_name}}
          </div>
        </div>
        <div class="ibox-body">
          {!! Form::open(['action' => 'PaymentController@update']) !!}
              <input class="form-control" value="{{$payment->id}}" name="id" type="hidden" hidden>
              <div class="form-group">
                <label>Numero de boleta</label>
                <input class="form-control disabled" value="{{$payment->bill_number}}" disabled="" name="bill_number" type="text" >
                <label>Monto</label>
                <input class="form-control disabled" disabled="" value="{{$payment->amount}}" name="amount" type="text" >
              </div>
              <div class="form-group @if($errors->has('payment_at')) has-warning  @endif">
                <label class="col-form-label">Fecha del pago</label>
                <input class="form-control" value="{{$payment->payment_at}}" name="payment_at" type="text">
              </div>
              <div class="form-group @if($errors->has('detail')) has-warning  @endif">
                <label class="col-form-label">Detalle</label>
                <input class="form-control" value="{{$payment->detail}}" name="detail" type="text" >
              </div>
              <div class="form-group ">
                <label>Forma de pago</label>
                <select class="form-control" name="payment_type_id">
                    @foreach($payment_types as $payment_type)
                    <option value="{{$payment_type->id}}">{{$payment_type->name}}</option>
                    @endforeach
                </select>
              </div>

              <br>

              <button class="btn btn-success" type="submit">Guardar cliente</button>

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


</div>
@endsection
