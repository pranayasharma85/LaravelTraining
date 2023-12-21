<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorCreateRequest extends FormRequest
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
                'surname'=>'required'

            //
        ];
    }
    public function messages(): array
    {
        return [

            'name.required'=>'please enter name',
            'surname.required'=>'please enter surname if you want to live '
            //'name.text'=>'please enter the valid name

            //
        ];
    }
}
