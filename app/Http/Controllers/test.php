<?php

namespace App\Http\Controllers;

use App\laravel;
use Illuminate\Http\Request;
use App\Http\Requests;
use  Illuminate\Support\Facades\Input;

use Redirect;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\Dispatches\Jobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\Authorizes\Resources;
use Illuminate\Html\HtmlServiceProvider;

class test extends Controller
{
    public $timestamps = false;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new laravel;
       // $user->idlaravel=Input::get("idlaravel");
        $user->TenNV=Input::get("TenNV");
        $user->pass=Input::get("pass");
//        print_r($user->TenNV);
//        exit;
        $user->save();
        return("avb");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public

    function showLogin()
    {

        // Form View

        return view('login');
    }

    public

    function doLogout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('login'); // redirection to login screen
    }

    public

    function doLogin()
    {

        // Creating Rules for Email and Password

        $rules = array(
            'TenNV' => 'required', // make sure the email is an actual email
            'pass' => 'required');

        // password has to be greater than 3 characters and can only be alphanumeric and);
        // checking all field

        $validator = Validator::make(Input::all() , $rules);

        // if the validator fails, redirect back to the form

        if ($validator->fails())
        {
            return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('pass')); // send back the input (not the password) so that we can repopulate the form
        }
        else
        {

            // create our user data for the authentication

            $userdata = array(
                'TenNV' => Input::get('TenNV') ,
                'pass' => Input::get('pass')
            );

            // attempt to do the login

            if (Auth::attempt($userdata))
            {

                // validation successful
                // do whatever you want on success

            }
            else
            {

                // validation not successful, send back to form

                return Redirect::to('login');
            }
        }
    }
}
