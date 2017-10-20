<?php

namespace App\Http\Controllers;

use App\Product;
use Auth;
use Illuminate\Http\Request;
use Input;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('product/index',compact('data'));
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('product/edit',compact('data'));
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $data = Product::find($id);
        return view('product/view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('product/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->MaDienThoai=Input::get('MaDienThoai');
        $data->TenDienThoai=Input::get('TenDienThoai');
        $data->HangSX=Input::get('HangSX');
        $data->SoLuongConLai=Input::get('SoLuongConLai');
        $data->GiaBan=Input::get('GiaBan');
        $data->ManHinh=Input::get('ManHinh');;
        $data->HeDieuHanh=Input::get('HeDieuHanh');
        $data->CameraTruoc=Input::get('CameraTruoc');
        $data->CameraSau=Input::get('CameraSau');
        $data->RAM=Input::get('RAM');
        $data->ROM=Input::get('ROM');
        $data->CPU=Input::get('CPU');
        $data->Pin=Input::get('Pin');
        $data->Khac=Input::get('Khac');
        $data->MoTa=Input::get('MoTa');

        if($data->save()){
            return $data->id;
        }else{
            return "false";
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $from = Input::get('from');
        $to = Input::get('to');
        $data='';
        if($from == "all" or $to=="all"){
            $data =Product::get();
        }else{
            $data =Product::whereRaw('id >= ? and id <= ?', [$from,$to])->get();
        }
        return $data;
        // error_log($request);
    }
    



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Product::find(Input::get('id'));
        $data->MaDienThoai=Input::get('MaDienThoai');
        $data->TenDienThoai=Input::get('TenDienThoai');
        $data->HangSX=Input::get('HangSX');
        $data->SoLuongConLai=Input::get('SoLuongConLai');
        $data->GiaBan=Input::get('GiaBan');
        $data->ManHinh=Input::get('ManHinh');;
        $data->HeDieuHanh=Input::get('HeDieuHanh');
        $data->CameraTruoc=Input::get('CameraTruoc');
        $data->CameraSau=Input::get('CameraSau');
        $data->RAM=Input::get('RAM');
        $data->ROM=Input::get('ROM');
        $data->CPU=Input::get('CPU');
        $data->Pin=Input::get('Pin');
        $data->Khac=Input::get('Khac');
        $data->MoTa=Input::get('MoTa');
        // $data= $request->input("MaDienThoai");
        // $data = $request.body;
        // $id = Input::get
        if($data->save()){
            return "true";
        }else{
            return "false";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Product::find(Input::get('id'));
        if($data->delete()){
            return "true";
        }else{
            return "false";
        }
    }
}
