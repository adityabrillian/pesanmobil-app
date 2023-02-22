<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_mobil' => 'required',
            'harga_pesan' => 'required',
            'bbm' => 'required',
            'last_service' => 'required',
            'angkutan' => 'required',
            'hak_milik' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'p3k' => 'required',
            'charger' => 'required',
            'audio' => 'required',
            'ac' => 'required',
        ];
    }
}
