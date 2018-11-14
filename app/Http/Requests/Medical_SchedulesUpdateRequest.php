<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Medical_SchedulesUpdateRequest extends FormRequest
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
                'doctor_id' => 'required',
                'day' => 'required',
                'hour_from_1' => 'required',
                'minutes_from_1' => 'required',
                'hour_until_1' => 'required',
                'minutes_until_1' => 'required',
                'hour_from_2' => 'required',
                'minutes_from_2' => 'required',
                'hour_until_2' => 'required',
                'minutes_until_2' => 'required',
                
        ];
    }
}
