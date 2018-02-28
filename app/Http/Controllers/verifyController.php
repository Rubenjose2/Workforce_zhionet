<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class verifyController extends Controller
{
    public function verifyemail($token){
        
        User::where('token',$token)->firstOrfail()
            ->update([
                'token'=>null
            ]);
        
        return redirect()
                ->route('home')
                ->with('success','Your account have been verified');
    }
}
