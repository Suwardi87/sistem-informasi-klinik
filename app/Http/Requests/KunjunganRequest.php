<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KunjunganRequest extends FormRequest
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
            'tanggal_kunjungan' => 'required|date',
            'jenis_kunjungan' => 'required|in:baru,lama',
            'status' => 'required|in:menunggu,periksa,selesai,dibatalkan',
        ];
    }
}
