<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
                'name' => 'required|unique:categories,name',
                'description' => 'required|unique:categories,description',
                'year' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You have to add name',
            'description.required' => 'You have to add description',
            'year.required' => 'You have to add year'
        ];
    }

}
