<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BorrowCreateRequest extends FormRequest
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
            'studentId'=>'required',
            'bookId'=>'required',
            'takenDate'=>'required|date',
            'broughtDate'=>'required|date'
            //
        ];
    }

    public function messages(): array
    {
        return [
            'studentId.required'=>'Please provide valid StudentId',
            'bookId.required'=>'Please provide valid bookId',
            'takenDate.required'=>'provide the date you have taken the book',
            'broughtDate.required'=>'provide the date you have brought the book'
            //
        ];
    }
}
