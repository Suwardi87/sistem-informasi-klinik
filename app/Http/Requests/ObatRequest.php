<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatRequest extends FormRequest
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
            'nama' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:obats'],
            'harga_satuan' => ['required', 'numeric', 'max:99999999.99'],
            'stok' => ['required', 'integer', 'max:99999999'],
            'satuan' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
        ];
    }
}
