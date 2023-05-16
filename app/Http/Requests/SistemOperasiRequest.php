<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SistemOperasiRequest extends FormRequest
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
            'nama_os' => 'required',
            'deskripsi' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nama_os.required' => 'Nama OS tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi OS tidak boleh kosong',
        ];
    }
}
