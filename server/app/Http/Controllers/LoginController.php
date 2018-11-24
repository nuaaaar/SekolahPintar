<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

   public function signIn(Request $request)
    {
    $checkedUsername = User::where('username', $request->username)->first(); // cek user
    if ($checkedUsername != null) { // jika user ditemukan
        $validUser = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        if ($validUser) { // jika username dan password cocok   
            return redirect('/');
        } else { // karena user sudah ditemukan berarti password salah
            return redirect()->back()->with('ERR', 'The password you entered is incorrect.');
        }
    } else { // jika user tidak ditemukan berarti username salah
        return redirect()->back()->with('ERR', 'Username is not registered.');
    }
  }

  public function signOut()
  {
    Auth::logout();
    return redirect()->back();
  }
}

