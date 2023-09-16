<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'question'=>'required|min:3|max:1200',
            'image'=>'image|nullable|max:2048|mimes:jpg,jpeg,png',
            'A'=>'required|max:500',
            'B'=>'required|max:500',
            'C'=>'required|max:500',
            'D'=>'required|max:500',
            'correct_answer'=>'required'
        ];      
    } 
    
    public function attributes(): array
    {
        return [
            'A'=>'variant A',
            'B'=>'variant B',
            'C'=>'variant C',
            'D'=>'variant D'
            
        ];
    }
}
