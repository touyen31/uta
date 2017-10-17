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

//    function add(Request $request)
//    {
//
//            $id = $request->id;
//            $name = $request->name;
//            $email = $request->email;
//            $phone_number = $request->phone_number;
//            $address = $request->address;
//            $start_day = $request->start_day;
//
//            $empl = new Employee();
//            $empl->name = $name;
//            $empl->email = $email;
//            $empl->phone_number = $phone_number;
//            $empl->address = $address;
//            $empl->start_day = $start_day;
//            $empl->id = $id;
//            $empl->save();
//            return response()->json($empl);
//    }

    public function Insert()
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

            return Redirect::to('employee_list')->with('success','successfully inserted');
        }
    }


//    public function delete($id)
//    {
//        $users = Employee::find($id);
//                var_dump($users);
//        exit();
//        if ($users->delete()) {
//            return Redirect::to('show');
//        } else {
//            return Redirect::to('show');
//        }
//    }

    //Delete info of employee
    function Delete($id)
    {
        $ntTranining = Employee::find($id);
        if (isset($ntTranining)) {
            $idTrainer = $ntTranining->id;
            $ntTranining->delete();
        }
        //$ntTraninings = Employee::where('id', '=', $idTrainer)->get();
       // return response()->json($ntTraninings);
        return Redirect::to('employee_list');
    }

    //Edit info of employee
    public function getData($id)
    {
        //$actions = Action::where('karte_id', $id)->orderBy('schedule_date', 'asc')->get();
        $emp = Employee::where('id', $id)->first();

        if ($emp == null) {
            return view('404');
        }

        return view('edit_employee', compact('emp'));

    }
    public function Action(Request $request, $id)
    {
        if ($request->btnButton == "rescheduleAction2") {
            $action = Employee::where('id', $id)->first();
            $action->id = $request->id;

            $action->name = $request->name;
                    $action->email = $request->email;
                    $action->phone_number = $request->phone_number;
                    $action->address = $request->address;
                    $action->start_day = $request->start_day;
                    $action->save();
                //}
            return Redirect::to('employee_list');
            } else {
                return view('404');
            }
        }


}
