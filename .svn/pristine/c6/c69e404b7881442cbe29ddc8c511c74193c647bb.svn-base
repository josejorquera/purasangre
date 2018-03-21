<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
                    'rut' => 'required',
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'phone' => 'required|numeric',
                    'email' => 'email|required',
                    'address' => 'required',
                    'birthdate' => 'date|required|after:01-01-1900|before:01-01-2015',

                    
        ];
    }

    public function messages()
    {
        return [
            'rut.required' => 'Debe ingresar un Rut.',
            'first_name.required' => 'Por favor, ingrese un nombre.',
            'last_name.required' => 'El apellido es requerido.',
            'phone.required' => 'Debe ingresar un número de teléfono.',
            'phone.numeric' => 'El teléfono debe contener solo números.',
            'email.email' => 'El formato del e-mail es incorrecto.',
            'email.required' => 'Debe ingresar un e-mail.',
            'address.required' => 'Debe ingresar una Dirección.',
            'birthdate.required' => 'Debe ingresar la fecha de Nacimiento.',
            'birthdate.before' => 'La Fecha de Nacimiento debe ser menor al año 2015', 
            'birthdate.after' => 'La Fecha de Nacimiento debe ser mayor al año 1900',
        ];
    }
}
