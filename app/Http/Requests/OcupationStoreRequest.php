<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OcupationStoreRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|string|max:60',
        ];
    }
}
