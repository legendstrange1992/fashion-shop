<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use DB;
use App\Donhang;
use App\Chitietdonhang;
class Admin_Controller extends Controller
{
    public function admin(){
    	$donhang = Donhang::all();
    	
    	return view('pages/admin',compact('donhang'));
    }
    public function logout(){
    	return redirect()->route('trangchu');
    }
    public function xoa_donhang($id_donhang){
    	DB::table('donhang')->where('id_donhang',$id_donhang)->delete();
    	return redirect()->route('admin');
    }
    public function upload_sanpham(){
    	return view('pages.upload_sanpham');
    }
}
