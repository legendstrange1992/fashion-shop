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
    	$chitietdonhang = Chitietdonhang::all();
    	//echo '<pre>';
    	//print_r($donhang);
    	return view('pages/admin',compact('donhang','chitietdonhang'));
    }
    public function logout(){
    	return redirect()->route('trangchu');
    }
}
