<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginController(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->input('username'))->get();
        if(count($user) > 0){
            if(Hash::check($request->input('password'), $user[0]->password)){
                Auth::login($user[0]);
                return redirect('/admin');
            }
        }

        session()->flash('error', 'اطلاعات وارد شده نادرست است');
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
