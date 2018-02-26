<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class showTestController extends Controller
{

    public function showForm(){
        $id = Auth::user();
        $user = User::find($id);
        return $user;
    }
}
