<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        // Pesan khusus untuk validasi
        $messages = [
            'required' => ':attribute wajib diisi ya mae langstrump',
            'min' => ':attribute harus diisi minimal :min karakter ya mae langstrump',
            'max' => ':attribute harus diisi maksimal :max karakter ya mse langstrump',
        ];

        // Validasi dengan pesan khusus
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);

        return view('proses', ['data' => $request]);
    }
}
