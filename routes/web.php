<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//others
Route::get('/my-form','HomeController@myform');
Route::post('/my-form','HomeController@myformPost');
//ajax: insert new employee
Route::post('/add', 'EmployeeController@add');

Route::get('/', function () {
    return view('home');
});
Route::get('/employee_list', function () {
    return view('employee_list');
});

Route::get('/list', function () {
    return view('show_list');
});
Route::get('/signin', function () {
    return view('login');
});

//
Route::get('/register', function () {
    return view('register.register');
});
Route::post('/register_action','RegisterController@store');
//
Route::post('/login_check','RegisterController@login');

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('');
})->middleware("auth");

Route::get('/product_list','ProductController@show');

//Employee
Route::get('/employee_list','EmployeeController@show');
Route::post('/insert_employee','EmployeeController@Insert');
Route::get('/insert', function () {
    return view('insert_employee');
});
Route::post('/delete_employee','EmployeeController@Delete');
Route::get('edit/{id}', 'EmployeeController@getData');
Route::post('edit/{id}', 'EmployeeController@Action');
Route::post('/Delete/{id}', 'EmployeeController@Delete');



//API ROUTES
Route::group(['prefix' => 'api', 'middleware' => 'auth:web'], function () {
	//PRODUCT API
		Route::group(['prefix' => 'product'], function () {
        	Route::post('/get', 'ProductController@find');
            Route::post('/create', 'ProductController@store');
            Route::post('/edit', 'ProductController@update');
        	Route::post('/delete', 'ProductController@destroy');
    });



});









