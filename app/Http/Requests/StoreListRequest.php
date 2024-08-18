<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListRequest extends FormRequest
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
            'name'=> 'required',
            'club'=>'required',
            'country'=>'required',
            'trophy'=> 'required',
            'status' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'You have to add name',
            'club.required' => 'You have to add club',
            'country.required' => 'You have to add country',
            'trophy.required' => 'You have to add trophy',
            'status.required' => 'You have to add status',
        ];
    }
}
