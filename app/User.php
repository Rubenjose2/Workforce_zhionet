<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'DOB',
        'email',
        'password',
        'tech_id',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // Database Relationships
    protected $touches = ['post'];

    public function posts(){
        return $this->hasMany('App\Post','created_by');
    }
    //*************************/
    //Relation with roles table
    //*************************/

    public function roles(){
        return $this->hasOne('App\Role','id','role');
    }

    public function post(){
        return $this->belongsToMany('App\Post')->withPivot('id','status');
    }

    //Relation with Score Numbers
    public function score(){
        return $this->hasOne('App\Score','tech_user_id','tech_id');
    }

    public function getFullNamefromUser(){
        return "{$this->fname} {$this->lname}";
    }


    //END RELATIONSHIPS//

    // Functions and Verifications//
    //Security Check if user is an Admin and Manager (old Version)
    public function isAdminManager(){
        if($this->security_level =='admin'&& $this->role==3){
            return true;
        }else{
            return false;
        }
    }
    //Security Check if user is Admin (old Version)
    public function isAdmin(){
        if($this->security_level =='admin'){
            return true;
        }else{
            return false;
        }
    }
    //Security check if user have a Role Admin (new)

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $role){
                if ($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if ($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }
    public function hasRole($role){
        if ($this->roles()->where('description',$role)->first()){
            return true;
        }
        else return false;
    }
    //Return true if the user verify his email account
    public function emailVerified(){
        return $this->token === null;
    }
}
