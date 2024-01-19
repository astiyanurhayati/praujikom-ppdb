<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {

        $request->validate(
            [
                'email' => 'required|exists:users,email',
                'password' => 'required',
            ],
            [
                'email.exists' => 'Email ini belum tersedia',
                'email.required' => 'Email harus diisi',
                'password.required' => 'password harus diisi'
            ],
        );

        $user = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', "gagal login, silahkan cek dan coba lagi!");
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
