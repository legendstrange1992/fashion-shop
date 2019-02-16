<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
