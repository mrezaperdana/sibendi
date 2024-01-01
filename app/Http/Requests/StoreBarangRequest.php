<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarangRequest extends FormRequest
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
            //
            'Kode_Barang' => 'required|string|max:255',
            'Nama_Barang' => 'required|string',
            'Unit' => 'required|string',
            'Kategori' => 'required|string',
            'Harga_Satuan' => 'required|numeric|min:0',
        ];
    }
}
