<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => ['required', 'min:2'],
            'cost' => ['nullable', 'numeric', 'min:1000', 'max:9000'],
            'description' => ['nullable', 'min:10']
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge(['cost' => $this->cost ?? '1000']);
    }
}
