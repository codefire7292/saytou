<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnqueterRequest extends FormRequest
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
            'Per_id' => ['required', 'int'],
           // 'Per_id2' => ['required', 'int'],
           // 'date' => ['required'],
            'adresse' => ['required', 'string', 'max:150'],
        ];
    }
}
