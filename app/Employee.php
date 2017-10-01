<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Employee extends Model
{
    protected $table="Employee";

    public static function formstore($data)
    {
//        echo "register model";
//        var_dump($data);
        $name=Input::get('name');
        $email=Input::get('email');
        $phone_number=Input::get('phone_number');
        $address=Input::get('address');
        $start_day=Input::get('start_day');

        $empl=new Employee();
        $empl->name=$name;
        $empl->email=$email;
        $empl->phone_number=$phone_number;
        $empl->address=$address;
        $empl->start_day=$start_day;
        $empl->save();
    }
}
