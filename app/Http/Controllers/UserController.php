<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
  public function login()
  {
    return view('auth.login');
  }

  public function register()
  {
    return view('auth.register');
  }

  public function logout()
  {
    Auth::logout();
    return to_route('auth.login');
  }
  public function authentifier(LoginRequest $request)
  {
    $email = $request->email;
    $password = $request->password;
    $credentiels = $request->validated();
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
      $request->session()->regenerate();
      $user = Auth::user();
      Mail::to('ahmedboudan20@gmail.com')->send(new SignUp($user));
      return redirect()->intended();
    }
    return to_route('auth.login')->withErrors([
      'email' => 'Email ou mot de passe invalide'
    ])->onlyInput('email');
  }


  public function register_traitement(LoginRequest $request)
  {
    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ]);
    return redirect('login')->with('status', 'Utilisateur créé(e) avec succes ! ');
  }
}
