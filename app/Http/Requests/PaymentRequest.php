<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
                    'payment_at' => 'required|date',
                    'bill_number' => 'required|integer|unique:payments|min:1',
                    'amount' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'payment_at.required' => 'La fecha es requerida.',
            'payment_at.date' => 'Debe ser una fecha valida.',
            'bill_number.required' => 'El numero de la boleta debe ser ingresado.',
            'bill_number.integer' => 'El campo "boleta" deben contener solo números.',
            'bill_number.unique' => 'El numero de la boleta ya ha sido asignado.',
            'amount.required' => 'Se requiere ingresar un monto.'
        ];
    }
}
