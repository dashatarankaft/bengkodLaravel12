<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   

    public function storeAkun(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:pasien,dokter',
        ]);

        User::create([
            'nama' => $validateData['nama'],
            'alamat' => $validateData['alamat'],
            'no_hp' => $validateData['no_hp'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password']), // Enkripsi password
            'role' => $validateData['role'],
        ]);

        return redirect()->route('pasien.dashboard')->with('success', 'Akun berhasil dibuat!');
    }

    
}