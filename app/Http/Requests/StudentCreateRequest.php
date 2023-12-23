<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'surname'=>'required',
            'birthdate'=>'required|date',
            'gender'=>'required|text',
            'class'=>'required|number',
            'point'=>'required|number'
            //
        ];
    }

    public function messages(): array
    {
        return [
//            this is optional only. You can write as well or not
//            'name.required'=>'Please enter the name of the student',
//            'surname.required'=>'Please enter the surname of the student ',
//            'birthdate.required'=>'Enter your birthdate in date pattern',
//            'gender.required'=>'enter your gender',
//            'class.required'=>'Enter the class you are studying',
//            'point.required'=>'Enter  the point '
            //
        ];
    }
}
