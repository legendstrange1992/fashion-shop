<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaisanpham;
use App\SanPham;
class API_controller extends Controller
{
    public function index(){
        $data = Sanpham::all()->toArray();
        echo '<pre>';
        print_r($data);
    }
    public function show($id){
        $data = Sanpham::find($id)->toArray();
        echo '<pre>';
        print_r($data);
    }
    public function destroy($id){
        $data = Sanpham::find($id);
        $data->delete();
        return response()->json(['result'=>'delete sucess']);
    }
}
