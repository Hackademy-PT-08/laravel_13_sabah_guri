<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePictureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titolo'=>'required',
            'descrizione'=>'required',
            'prezzo'=>'required',
        ];
    }

    public function messages(){
        return[
            'titolo.required'=>'Devi inserire il titolo',
        'descrizione.required'=>'Devi inserire una decrizione',
        'prezzo.required'=>'Devi inserire il prezzo',
        ];
    }
}
