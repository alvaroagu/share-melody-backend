<?php

namespace App\Http\Requests\Melody;

use Illuminate\Foundation\Http\FormRequest;

class StoreSheetMusicRequest extends FormRequest
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
            'title' => 'required|string',
            'composer'=> 'required|string',
            'arranger'=> 'required|string',
            'instrument'=> 'required|string',
            'difficulty'=> 'required|string',
            'description'=> 'required|string',
            'file_path'=> 'nullable|string', // NO TOY SEGURO DE ESTO
        ];
    }
}
