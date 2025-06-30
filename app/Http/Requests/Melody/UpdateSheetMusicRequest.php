<?php

namespace App\Http\Requests\Melody;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSheetMusicRequest extends FormRequest
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
            'title' => 'sometimes|string',
            'composer'=> 'sometimes|string',
            'arranger'=> 'sometimes|string',
            'instrument'=> 'sometimes|string',
            'difficulty'=> 'sometimes|string',
            'description'=> 'sometimes|string',
            'file_path'=> 'nullable|string', // NO TOY SEGURO DE ESTO
        ];
    }
}
