<?php

namespace App\Http\Controllers;
// use Auth;
use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

       

        $this->validate($request,[
            'email'=> 'required|email',
            'password'=>'required|min:3'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status'=>'active'])){
        //Success Process
            $user = User::where('email',$request->email)->first();
            
            if($user->isAdmin()){
                return redirect()->route('admin');
            }
                return redirect()->route('home');
        }
        //Manage Unsuccess login
                if (User::where('email',$request->email)->where('status',!'active')->first()){
            return redirect()->back()
                            ->withErrors(['status'=>['Your account is not active.']]);
        }

        if (!User::where('email',$request->email)->first()){
            return redirect()->back()
                            ->withErrors(['email'=>['This email is not registred.']]);
        }
        if (!User::where('email',$request->email)->where('password', bcrypt($request->password))->first() ){
        return redirect()->back()
                         ->withErrors(['password' => ['Invalid password.']]);
        }


    }

}
