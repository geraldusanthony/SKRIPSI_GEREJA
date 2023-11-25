<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Umat;
use App\Models\Role;
use Alert;

class login_controller extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('Admin')->check()) {
            return redirect()->route('dashboard_admin');
        } else if (Auth::guard('Umat')->check()) {
            return redirect()->route('userindex');
        } else {
            if(Cookie::get('email') !== null){
                $email=Cookie::get('email');
                $pass=Cookie::get('pass');
                //return $pass;
                return view('layouts.login',compact('email','pass'));
            }else{
                return view('layouts.login');
            }
        }
    }

    
    public function login(Request $request)
    {
        $minutes=1200;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $userr=User::where('email',$request->email)->first();
        if(isset($userr)){
            if($userr->role_id == '1'){
                $guard='admin';
            }elseif($userr->role_id == '2'){
                $guard='umat';
            }
            // ->guard($guard)
            if(auth()->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ]))

            {
                $userr = auth()->user();
                if($request->rememberme=='on'){
                    $cookie1 = Cookie::make('email', $request->email, $minutes);
                    $cookie2 = Cookie::make('pass', $request->password, $minutes);
                    if ($guard=='admin') {
                        return redirect('/homeadmin')->withCookie($cookie1)->withCookie($cookie2);
                    }elseif ($guard=='umat') {
                        return redirect('/indexumat')->withCookie($cookie1)->withCookie($cookie2);
                        // return redirect('/indexumat')->withInput();
                    }
                    
                }else{
                    $cookie1 = Cookie::forget('email');
                    $cookie2 = Cookie::forget('pass');
                    if ($guard=='admin') {
                        return redirect('/homeadmin')->withCookie($cookie1)->withCookie($cookie2);
                    }elseif ($guard=='umat') {
                        return redirect('/indexumat')->withCookie($cookie1)->withCookie($cookie2);
                    }
                    
                }
            } else {
                return redirect()->back()->withError('Credentials doesn\'t match.');
            }
            
        }    
    }

    // public function logout(Request $request)
    // {
    //     if(Auth::guard('admin')->check()){
    //         Auth::guard('admin')->logout();
    //     } elseif(Auth::guard('umat')->check()){
    //         Auth::guard('umat')->logout();
    //     }
    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect()->route('/loginpage');
    // }


    protected function Register(Request $request)
    {
        $emailExist = Umat::where('email', $request->email)->exists();

        if($emailExist){
        $name = Umat::where('email', $request->email)->first()->nama_umat;
         User::create([
            'name' => $name,
            'email' => $request['email'],
            'role_id' => '2',
            'password' => Hash::make($request['password']),
        ]);
    } else {
        Alert::error('Error!', 'Anda Tidak Terdaftar Sebagai Umat');
        return redirect()->back();
    }
        return redirect()->back();
    }

}
