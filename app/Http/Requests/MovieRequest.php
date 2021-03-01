<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
				$rules = [
                    'title' => [
                        'required'
                       ],
                    'description' => [
                        'required'
                    ],
                ];
                return $rules;
            }
            case 'PUT':
            case 'PATCH':
            {
                $rules = [
                    'title' => [
                        'required'
                       ],
                    'description' => [
                        'required'
                    ],
                ];
                return $rules;
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'title.required' => 'Referencia es un campo requerido',
            'description.required' => 'El valor ingresado para descripción ya fue utilizado',
        ];
    }
}
