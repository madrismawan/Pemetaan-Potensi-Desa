<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'username' =>"required|regex:/^[a-z ,.'-]+$/i|min:2|max:50|unique:tb_user,username",
            'password' => "required|min:4|max:50|confirmed",
            'name' =>"required|regex:/^[a-z ,.'-]+$/i|min:2|max:50",
            'alamat' => "required|regex:/^[a-z .,0-9]+$/i|min:2|max:30",
            'notlpn' => "required|numeric|digits_between:11,15|unique:tb_user,notlpn",
        ],
        [
            'username.required' => "Username wajib diisi",
            'username.regex' => "Format penamaan Username tidak sesuai",
            'username.max' => "Masukan Username maksimal 30 huruf",
            'username.min' => "Masukan Username minimal 2 huruf",
            'username.unique' => "Username sudah pernah digunakan",
            'password.required' => "Password wajib diisi",
            'password.max' => "Masukan password maksimal 30 huruf",
            'password.min' => "Masukan password minimal 2 huruf",
            'password.confirmed' => "Konfirmasi kata sandi tidak sesuai",
            'name.required' => "Nama wajib diisi",
            'name.regex' => "Format penamaan Nama tidak sesuai",
            'name.max' => "Masukan Nama maksimal 30 huruf",
            'name.min' => "Masukan Nama minimal 2 huruf",
            'name.unique' => "Nama sudah pernah digunakan",
            'alamat.required' => "alamat wajib diisi",
            'alamat.regex' => "Format penamaan alamat tidak sesuai",
            'alamat.max' => "Masukan alamat maksimal 30 huruf",
            'alamat.min' => "Masukan alamat minimal 2 huruf",
            'alamat.unique' => "alamat sudah pernah digunakan",
            'notlpn.required' => "Nomor telepon wajib diisi",
            'notlpn.numeric' => "Nomor telepon harus berupa angka",
            'notlpn.digits_between' => "Nomor telepon harus berjumlah 12 sampai 15 karakter",
            'notlpn.unique' => "Nomor telepon sudah pernah digunakan",
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name' => $request->username,
            'alamat' => $request->alamat,
            'notlpn' => $request->notlpn
        ]);

        return redirect()->back()->with(['success' => 'Foto profile berhasil di ubah']);

    }


}
