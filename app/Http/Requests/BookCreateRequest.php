<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
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
            'pagecount'=>'required|number',
            'point'=>'required|number',
            'authorId'=>'required|number',
            'typeId'=>'required|number'
            //
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'please enter name',
            'pagecount.required'=>'please enter pages number',
            'point.required'=>'enter valid point',
            'authorId.required'=>'enter authorId',
            'typeId.required'=>'valid typeId'
            //
        ];
    }
}
