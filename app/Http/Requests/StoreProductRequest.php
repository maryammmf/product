<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'unique:App\Models\Product', 'min:2'],
            'cost' => ['nullable', 'numeric', 'min:1000', 'max:9000'],
            'description' => ['nullable', 'min:10']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge(['cost' => $this->cost ?? '1000']);
    }
}
