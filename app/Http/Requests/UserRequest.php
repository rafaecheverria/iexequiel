<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'rut'            => 'required|max:255|unique:users,rut',
            'peso'           => 'required|numeric|max:255',
            'nombres'        => 'required|max:255',
            'apellidos'      => 'required|max:255',
            'telefono'       => 'required|min:6|numeric',
            'email'          => 'required|email|max:255|unique:users,email',
            'nacimiento'     => 'required|max:255',
            'nacionalidad'   => 'required|max:255'
        ];
    }
}
