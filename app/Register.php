<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $table="register_users";


    public static function formstore($data)
    {
//        echo "register model";
//        var_dump($data);
        $username=Input::get('username');
        $email=Input::get('email');
        $pass=Hash::make(Input::get('password'));

        $users=new Register();
        $users->name=$username;
        $users->email=$email;
        $users->password=$pass;

        $users->save();
    }
}
