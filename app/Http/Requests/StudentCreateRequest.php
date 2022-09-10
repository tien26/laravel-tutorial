<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'nim' => 'required|unique:students|max:8',
            'gender' => 'required',
            'class_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Harus Diisi',
            'nim.required' => 'Nim Harus Diisi',
            'gender.required' => 'Gender Harus Diisi',
            'class_id.required' => 'Class Harus Diisi',
            'nim.max' => 'Nim Maksimal :max karakter'
        ];
    }

    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }
}
