<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {       

        $users = User::all();
        $credentials = $request->validate([
            'firstName' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            $request->session()->regenerate();
        
            return view('users', ['users' => $users]);
        } else {
            // Autenticação falhou
            return back()->withErrors(['danger' => 'Usuário ou senha incorretos.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
