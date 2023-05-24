<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('/blue-springs-laundry/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if ($user && $credentials['password'] === $user->password) {
            if ($user->role === 'admin') {
                // Pengguna dengan role admin
                // Lakukan sesuatu, misalnya alihkan ke halaman admin
                return redirect('/blue-springs-laundry/dashboard');
                
            } else {
                // Pengguna dengan role user
                // Lakukan sesuatu, misalnya alihkan ke halaman user
                return redirect()->route('user.dashboard');
            }
        } else {
            // Kredensial tidak valid
            // Tampilkan pesan error
            return back()->withErrors('Invalid credentials');
            // return redirect()->route('user.dashboard');
        }
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

}
