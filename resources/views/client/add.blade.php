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
            <div class="ibox-title">Agregar Cliente</div>
          </div>
          <div class="ibox-body">
            {!! Form::open(['action' => 'ClientController@create']) !!}
                <div id="rut-group" class="form-group @if($errors->has('rut')) has-warning  @endif">
                    <label class="col-form-label">Rut</label>
                    <input class="form-control " id="rut" name="rut" type="text" value="{{ old('rut') }}" >
                    <span class="col-form-label hidden"> el rut no es valido</span>
                </div>
                <div class="form-group @if($errors->has('first_name')) has-warning  @endif">
                    <label class="col-form-label">Nombres</label>
                    <input class="form-control" name="first_name" type="text" value="{{ old('first_name') }}" >
                </div>
                <div class="form-group @if($errors->has('last_name')) has-warning  @endif">
                    <label class="col-form-label">Apellidos</label>
                    <input class="form-control" name="last_name" type="text" value="{{ old('last_name') }}" >
                </div>
                <div class="form-group @if($errors->has('phone')) has-warning  @endif">
                    <label class="col-form-label">Telefono</label>
                    <input class="form-control" name="phone" type="tel" value="{{ old('phone') }}" >
                </div>
                <div class="form-group @if($errors->has('email')) has-warning  @endif">
                    <label class="col-form-label">Email</label>
                    <input class="form-control" name="email" type="email" value="{{ old('email') }}" >
                </div>
                <div class="form-group @if($errors->has('address')) has-warning  @endif">
                    <label class="col-form-label">Dirección</label>
                    <input class="form-control" name="address" type="text" value="{{ old('address') }}" >
                </div>
                <div class="form-group @if($errors->has('address')) has-warning  @endif">
                    <label class="col-form-label">Fecha de nacimiento</label>
                    <input class="form-control" name="birthdate" type="date" value="{{ old('birthdate') }}">
                </div>

                <label>Tipo de plan</label>
                <select class="form-control" name="plan_id">
                    @foreach($plans as $plan)
                    <option value="{{$plan->id}}">{{$plan->name}}</option>
                    @endforeach
                </select>
                <br>

                <button class="btn btn-success" type="submit">Guardar cliente</button>

            {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>


</div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $("input#rut").rut({
                formatOn: 'keyup',
                minimumLength: 8, // validar largo mínimo; default: 2
               // validateOn: 'change' // si no se quiere validar, pasar null
            });
            $("input#rut").rut().on('rutInvalido', function(e) {
                $('#rut-group').addClass('has-error');
                $('#rut-group span').show();

            });

            $("input#rut").rut().on('rutValido', function(e, rut, dv) {
                $('#rut-group').removeClass('has-error');
                $('#rut-group span').hide();
            });


        })

    </script>
@endsection