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
            Agregar Pago
          </div>
        </div>
        <div class="ibox-body">
          {!! Form::open(['action' => 'PaymentController@create']) !!}

              <label>Nombre del Cliente</label>
              <p><strong>{{$client->first_name}} {{$client->last_name}}</strong></p>
              <input class="form-control" name="client_id" value="{{$client->id}}" type="hidden" hidden>


              <div class="form-group @if($errors->has('payment_at')) has-warning  @endif">
                <label class="col-form-label">Fecha del Pago</label>
                <input class="form-control" name="payment_at" type="date" value="{{ old('payment_at') }}">
              </div>
              <div class="form-group @if($errors->has('bill_number')) has-warning  @endif">
                <label class="col-form-label">Numero de la Boleta</label>
                <input class="form-control" name="bill_number" type="number" value="{{ old('bill_number') }}">
              </div>
              <div class="form-group @if($errors->has('payment_type_id')) has-warning  @endif">
                <label class="col-form-label">Forma de Pago</label>
                <select class="form-control" name="payment_type_id">
                    @foreach($payment_types as $payment_type)
                    <option value="{{$payment_type->id}}" @if(old('payment_type_id')==$payment_type->id) selected @endif>{{$payment_type->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group @if($errors->has('amount')) has-warning  @endif">
                <label class="col-form-label">Monto</label>
                <input class="form-control" name="amount" type="number" value="{{ old('amount') }}">
              </div>

              <div class="form-group @if($errors->has('detail')) has-warning  @endif">
                <label class="col-form-label">Detalle</label>
                <textarea class="form-control" name="detail" type="text" value="{{ old('detail') }}" ></textarea>
              </div>


              <br>
              <button class="btn btn-success" type="submit">Guardar Pago</button>

          {!! Form::close() !!}
        </div>
      </div>

    </div>

  </div>

</div>
@endsection
