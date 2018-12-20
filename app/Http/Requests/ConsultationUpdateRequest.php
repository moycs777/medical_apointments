<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationUpdateRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'reason_consultation' => 'required|max:200', 
            'disease' => 'required', 
            'diagnosis' => 'required', 
            'recipe' => 'required', 
            'prescription' => 'required', 
           
        ];
    }
}
