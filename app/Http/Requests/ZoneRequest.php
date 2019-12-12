<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZoneRequest extends FormRequest
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
            'id_U' => ['required', 'int'],
            'nom_zone' => ['required', 'string', 'max:50'],
            'departement' => ['required', 'string', 'max:50'],
            'region' => ['required', 'string', 'max:50'],
        ];
    }
}
