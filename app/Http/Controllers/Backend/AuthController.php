<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('backend.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => request('email'),
            'password' => request('password'),
        ];
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard.index');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Anda tidak memiliki akses sebagai admin!');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email dan kata sandi tidak valid!');
        }
    }

    public function forgot()
    {
        return view('backend.auth.forgot');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $random_password = Str::random(8);
        $user = User::where('email', $request->email)->first();

        if (!empty($user)) {
            $user->password = Hash::make($random_password);
            $user->save();

            $user->sendPasswordResetNotification($random_password);
            Mail::to($user->email)->send(new \App\Mail\ForgotPassword($user, $random_password));
        }else{
            return redirect()->route('forgot')->with('error', 'Email tidak ditemukan!');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
