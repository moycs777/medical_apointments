<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubpathologyUpdateRequest extends FormRequest
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
            'pathology_id' => 'required',
            'name' => 'required|string|max:60',
            'recipe' => 'required|string|max:1200',
            'prescription' => 'required|string|max:1200',
        ];

    }
}
