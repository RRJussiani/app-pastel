<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClienteRequest extends FormRequest
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
        $id = $this->segment(2);

        return [
            'nome' => "required|min:3|max:240",
            'email' => "required|email|unique:clientes,email,{$id},id",
            'telefone' => "nullable|min:8|max:15",
            'dataNascimento' => "required|date_format:d/m/Y",
            'endereco' => "nullable|min:5|max:400",
            'bairro' => "nullable|min:5|max:240",
            'complamento' => "nullable|min:5|max:240",
            'cep' => "nullable|min:5|max:240",
        ];
    }

    public function messages()
    {
        return [
            'dataNascimento.date_format' => 'O campo data de nascimento não é uma data válida.'
        ];
    }
}
