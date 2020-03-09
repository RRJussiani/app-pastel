<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoStoreRequest extends FormRequest
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

        $rules = [];
        $quantidade = 0;
        foreach ($this->request->get('pasteis') as $indice => $value) {
            $quantidade += $value['quantidade'];
        }

        if (!$quantidade) {
            $rules = [
                "campo" => "pasteis[$indice][quantidade]",
                "rules" => "required"
            ];
        }

        return [
            'cliente_id' => "required",
            'observacao' => "nullable|min:5|max:240",
            $rules['campo'] ?? '' => $rules['rules'] ?? '',
        ];
    }

    public function messages()
    {
        return [
            'cliente_id.required' => "O campo cliente é obrigatório.",
            'pasteis[*][quantidade].required' => "Ops! Acho que você esqueceu do pastel. ^^"
        ];
    }
}
