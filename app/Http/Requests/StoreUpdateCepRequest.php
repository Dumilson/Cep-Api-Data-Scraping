<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest as FormRequest;

class StoreUpdateCepRequest extends FormRequest
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
            'id' => 'required',
            'cep' => 'required',
            'logradouro' => 'required|string',
            'complemento' => 'string',
            'bairro' => 'required|string',
            'uf' => 'required|size:2', 
            'ddd' => 'required',
        ];
    }
}
