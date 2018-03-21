@extends('layouts.app')

@section('content')
<div class="container">

{!! Form::open(['action' => 'ClientController@update']) !!}
    <input class="form-control" value="{{$client->id}}" name="id" type="hidden" hidden>
    <label>Rut</label>
    <input class="form-control" value="{{$client->rut}} " name="rut" type="text">

    <label>Nombres</label>
    <input class="form-control" value="{{$client->first_name}}" name="first_name" type="text" >

    <label>Apellidos</label>
    <input class="form-control" value="{{$client->last_name}}" name="last_name" type="text" >

    <label>Telefono</label>
    <input class="form-control" value="{{$client->phone}}" name="phone" type="tel" >

    <label>Email</label>
    <input class="form-control" value="{{$client->email}}" name="email" type="email" >

    <label>Dirección</label>
    <input class="form-control" value="{{$client->address}}" name="address" type="text" >

    <label>Fecha de nacimiento</label>
    <input class="form-control" value="{{$client->birthdate}}" name="birthdate" type="date" >

    <label>Tipo de plan</label>
    <select class="form-control" name="plan_id">
        <option value="1">plan 1</option>
        <option value="2">plan 2</option>
    </select>

    <button class="btn btn-success" type="submit">Guardar cliente</button>

{!! Form::close() !!}


</div>
@endsection
