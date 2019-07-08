<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTechnician extends FormRequest
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
            'f_name' => 'bail|required|min:3',
            'l_name' => 'required|min:3',
            'birth_date' => 'required',
            'sex' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:technicians'],
            'phone' => 'required',
            'work_place' => 'required',
            'work_place_lat' => 'required',
            'work_place_long' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'f_name.required' => 'First name is required',
            'f_name.min' => 'First name is short. Minimum of 3 characters',
            'l_name.required' => 'Last name is required',
            'l_name.min' => 'First name is short. Minimum of 3 characters',
            'work_place.required' => 'Work Place is required',
            'work_place_lat.required' => 'GPS latitude of Work Place is required',
            'work_place_long.required' => 'GPS longitude of Work Place is required',
        ];
    }
}
