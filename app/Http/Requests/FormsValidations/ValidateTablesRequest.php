<?php

namespace App\Http\Requests\FormsValidations;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTablesRequest extends FormRequest
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
            "userfile"              => "required",
            "idProduto"             => "nullable|numeric",
            "idGrupo"               => "numeric",
            "idMarca"               => "numeric"
            
        ];
    }

    public function messages()
    {
        return [
            "userfile.required"         => "O campo de imagens precisa ser obrigatório",
            "idProduto.numeric"         => "O campo id do produto precisa ser numérico",
            "idGrupo.numeric"           => "id do grupo inválido, precisa ser numérico",
            "idMarca.numeric"           => "id de marca inválido, precisa ser numérico",
            
        ];

    }

}
