<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnqueteRequest extends FormRequest
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
           // 'Adm_id' => ['required', 'int', 'max:255'],
            'motif' => ['required', 'string', 'max:255'],
            'contexte' => ['required', 'string', 'max:255'],
            'debut' => ['required'],
            'fin' => ['required'],
            'cout' => ['required', 'numeric'],
        ];
    }
}
