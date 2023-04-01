<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'POST'){
            return [
                'name' => ['required'],
                'tanggal_lahir' => ['required'],
                'tahun_lulus' => ['required'],
                'email' => ['required'],
                'No_telepon' => ['required'],
                'image' => ['required','image','max:1024'],
            ];
        }
        return [
            'name' => ['required'],
            'tanggal_lahir' => ['required'],
            'tahun_lulus' => ['required'],
            'email' => ['required'],
            'No_telepon' => ['required'],
            'image' => ['image','max:1024'],
        ];
    }

    public function message (){
        return [
            'name.required' => 'nama tidak boleh kosong',
            'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
            'tahun_lulus.required' => 'tahun lulus tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            'No_telepon.required' => 'No telepon tidak boleh kosong',
            'image.image'  => 'Gambar yang dimasukan tidak valid.',
            'image.max'    => 'Maksimal Gambar tidak boleh leboh dari 1MB',
        ];
    }
}
