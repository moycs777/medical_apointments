<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
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
            'admin_id' => 'required', 
            'identification_card' => 'required|max:10', 
            'first_name' => 'required|max:30', 
            'lastt_name' => 'required|max:30', 
            'email' => 'string|email|max:255|unique:admins', 
        ];
    }
}
