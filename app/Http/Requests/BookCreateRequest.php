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
        return[
            'title' => 'required',
            'years' => 'nullable|integer',
            'page'  => 'nullable|integer',
    
    
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'il titolo deve essere obbligatorio',
            'years.integer' => 'inserisci una data coretta',
            'page.integer' => 'inserisci un valore corretto',
            'image' => 'nullable|mimes:jpg'

        ];
        
    }





}


