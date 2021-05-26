<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function submitLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ],
        [
            'username.required' => "Email tidak boleh kosong",
            'username.email' => "Masukan email yang sesuai",
            'password.required' => "Password tidak boleh kosong",
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credential)){
            return redirect()->intended(route('home'));
        }

        return redirect()->back()->with('message','Email atau password Anda Salah');
    }

}
