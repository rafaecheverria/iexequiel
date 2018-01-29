<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncuestaRequest extends FormRequest
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
            'p1'   => 'required|max:255',
            'p2'   => 'required|max:255',
            'p3'   => 'required|max:255',
            'p4'   => 'required|max:255',
            'p5'   => 'required|min:6|numeric',
            'p6'   => 'required|email|max:255|unique:users,email',
            'p7'   => 'required|max:255',
            'p8'   => 'required|max:255',
            'p9'   => 'required|max:255',
        ];
    }

    public function messages()
{
    return [
        'p1.required' => 'Debe contestar la pregunta 1.',
        'p2.required' => 'Debe contestar la pregunta 2.',
        'p3.required' => 'Debe contestar la pregunta 3.',
        'p4.required' => 'Debe contestar la pregunta 4.',
        'p5.required' => 'Debe contestar la pregunta 5.',
        'p6.required' => 'Debe contestar la pregunta 6.',
        'p7.required' => 'Debe contestar la pregunta 7.',
        'p8.required' => 'Debe contestar la pregunta 8.',
        'p9.required' => 'Debe contestar la pregunta 9.'
    ];
}
}
