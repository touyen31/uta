<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use Auth;
class RegisterController extends Controller
{

    public function store()
    {
        $data=Input::except(array('_token'));
        $rule=array(
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'cpassword'=>'required|same:password'
        );
        $message=array(
            'cpassword.required'=>'The confirm password is required',
            'cpassword.min'=>'The confirm password must be at least 6 characters',
            'cpassword.same'=>'The confirm password and password must be same',
        );
        $validator=Validator::make($data,$rule,$message);

        if($validator->fails())
        {
            return Redirect::to('register')->withErrors($validator);
        }else{
                Register::formstore(Input::except(array('_token','cpassword')));

                return Redirect::to('register')->with('success','Successfully registered');
        }
    }

    public function login()
    {
//        echo "test here";
        $data=Input::except(array('_token'));
//        var_dump($data);
        $rule=array(

            'email'=>'required|email',
            'password'=>'required',

        );
        $validator=Validator::make($data,$rule);

        if($validator->fails())
        {
            return Redirect::to('signin')->withErrors($validator);
        }else{

            $data=Input::except(array('_token'));
            if(Auth::attempt($data))
            {
                return Redirect::to('list')->with('success','Login successfully!');
            }else
            {
                return Redirect::to('signin')->with('error','Email or Password is wrong!');
            }
        }

    }

}
