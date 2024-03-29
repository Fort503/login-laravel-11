<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function registrar(Request $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('perfil'));
    }

    public function ingresar(Request $request) {
        $credenciales = [
            "email" => $request->email,
            "password" => $request->password
        ];

        $remember = ($request->has('remeber') ? true : false);

        if(Auth::attempt($credenciales, $remember)) {
            $request->session()->regenerate();
            return redirect(route('perfil'));
        } else {
            //funcion para recordar ruta original, importante
            return redirect()->intended(route('login'));
        }
    }

    public function cerrarSesion(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect(route('login'));
    }
}
