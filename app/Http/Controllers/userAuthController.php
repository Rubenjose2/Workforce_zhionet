<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
use App\Notifications\VerifyByEmail;
class userAuthController extends Controller
{
    public function showRegisterform(){
        return view('custom.register');
    }
    public function register(Request $request){
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        $request['token'] = str_random(25); // This would add a random token to use in the Email Verification
        $user = User::create($request->all());
        //Pull user Id and add messages to the user;
        $this->massaddPost($user->id);
        // Here we are sending a verification email to the user
        $user->notify(new VerifyByEmail($user));
        //Redirect to the View
        return view('thanks')->with('warning','Please check your email to confirm you account');
    }
    public function validation($request){
        return $this->validate($request,[
            'fname'=> 'required|max:255',
            'lname'=> 'required|max:255',
            'address'=> 'required|max:255',
            'city'=>'required|max:255',
            'state'=> 'required|max:255',
            'zip'=>'required|max:255',
            'phone'=>'required|max:255',
            'DOB'=> 'required|max:255',
            'email'=> 'required|email|unique:users|max:255',
            'password'=> 'required|confirmed|max:255',
        ]);
    }

    public function massaddPost($user_id){    
        //Firts loop for all the post
            $posts = Post::all();
            foreach ($posts as $post){
                $post->users()->attach($user_id,['status'=>'0','combine_id'=>$user_id.$post->id]);
            }
        }

}
