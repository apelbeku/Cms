<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AuthController extends Controller
{
    function __construct()
    {
        $this->middleware('guest')->only(['login', 'loginProcess', 'register', 'registerProcess']);
        $this->middleware('auth')->only(['logout']);
    }

    public function login()
    {
        return view('auth.index');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $isloginSucess = Auth::attempt($credentials);

        if ($isloginSucess) {
            return redirect()->intended('/admin');
        }else{
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('auth.registration');
    }

    public function registrationProcess(Request $request)
    {
        $encryptPassword = bcrypt($request->password);

        $request->merge([
            'password' => $encryptPassword,
        ]);

        User::create($request->all());

        return redirect('/admin');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
