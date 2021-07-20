<?php

namespace App\Http\Requests;

use App\Rules\RightCpf;
use Illuminate\Foundation\Http\FormRequest;

class HospedeRequest extends FormRequest
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
            'nome' => ['string'],
            'cpf_hospede' => ['digits:11', 'numeric', new RightCpf],
            'telefone' => ['digits:11'],
            'sexo',
            'data_nascimento'
            //
        ];
    }
}
