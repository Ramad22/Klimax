<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function sign_in()
    {
        return view("sign-in");
    }
    public function register()
    {
        return view("sign-up");
    }
    public function progresRegister(Request $request)
    {
        $user = User::create([
            "name"=> $request->name,
            "no_hp"=> $request->no_hp,
            "id_role"=> $request->id_role,
            "password"=> bcrypt($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);
        return redirect('/email/verify/');
    }

    public function progresLogin(Request $request)
    {
        $user = [
            'no_hp'=> $request->no_hp,
            // 'email_veripied_at'=>$request->email_verified_at,
            'password'=>$request->password,
        ];
        $remember = request()->filled('remember');
        if(Auth::attempt($user, $remember)){
            if(Auth::user()->id_role == 1){
                return redirect('Admin/dashboard');
            }elseif(Auth::user()->id_role == 2){
                return redirect('landing-page');
            }
        }
        return redirect()->back()->withInput()->withErrors(['no_hp' => 'Invalid no hp', 'password' => 'invalid password, please try again',]);
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('sign-in');
    }
}
