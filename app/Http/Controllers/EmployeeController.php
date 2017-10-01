<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Employee;
use Auth;
class EmployeeController extends Controller
{
    public function show()
    {
        $users=Employee::all();
         return view('employee_list', compact('users'));
    }
//    function addNewNtTraining(Request $request)
//    {
////        echo 'acb';
////        exit();
//        $id = $request->id;
//        $name = $request->name;
//        $email = $request->email;
//        $phone = $request->phone;
//        $hometown = $request->hometown;
//        $start_day = $request->start_day;
//
//        $employee = new Employee();
//        $employee->id = $id;
//        $employee->name = $name;
//        $employee->email = $email;
//        $employee->phone = $phone;
//        $employee->hometown = $hometown;
//        $employee->start_day = $start_day;
//        $employee->save();
//        return response()->json($employee);
//
//    }


    public function insert()
    {
        $data=Input::except(array('_token'));
//        var_dump($data);
//        exit();
        $rule=array(
            'name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'address'=>'required',
            'start_day'=>'required',
        );

        $validator=Validator::make($data,$rule);

        if($validator->fails())
        {
            return Redirect::to('insert')->withErrors($validator);
        }else{
            Employee::formstore(Input::except('_token'));

            return Redirect::to('employee_list')->with('success','Successfully registered');
        }
    }
}
