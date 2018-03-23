<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
use Auth;

class showMessangerForm extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        return view('administrator.message_builder');
    }

    public function showPost(Request $request){
        $data = $request->id;
        //Pulling Data firts
        $user_id = Auth::id();
        $post = Post::find($data);
        return $post;   
    }
    
    public function postlist(){
        $user = Auth::user();
        $id = $user->id;
        $user = User::find($id);
        $posts = $user->post;  

        return view('dashboard.post_list')->with('posts',$posts);
    }

    public function userUpdatePost(Request $request){
        
        $id = Auth::id();
        $user = User::find($id);
        $post_id=$request['id'];
        $date =new \DateTime();

        $user->post()->updateExistingPivot($post_id,['status'=>'1','updated_at'=>$date]);
        
        return $request; 
    }
    //This route works as as API call. Made to force to open the modal to read the laters message with a modal
    public function forceModalOpen(){
        $user = Auth::user();
        $userId = $user->id;
        $data= User::find($userId)->post()->wherePivot('status',0)->orderBy('id','desc')->first();
        
        return response()->json($data);
        }



    //SANDBOX ONLY TEST ROUTE//
      public function usertest($id){
        $post = Post::find($id);
        $post->users()->detach();
        $post->delete();
        



        
    }
    /////////////////////////////////////
}
