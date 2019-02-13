<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Requyest;
use App\SanPham;
use App\Loaisanpham;

class Mycontroller extends Controller
{
    public function index()
    {
        $sanpham = SanPham::all();
        $loaisanpham  = Loaisanpham::all();
        return view('index',compact('sanpham','loaisanpham'));
    }
    public function men(){
    	$sanpham = SanPham::where('id_theloai',1)->get();
        $loaisanpham  = Loaisanpham::all();
    	$category = 'MEN';
        $active_menu = 1;
    	return view('pages/search_product',compact('sanpham','category','loaisanpham','active_menu'));
    }
    public function women(){
    	$sanpham = SanPham::where('id_theloai',2)->get();
        $loaisanpham  = Loaisanpham::all();
    	$category = 'WOMEN';
        $active_menu = 2;
    	return view('pages/search_product',compact('sanpham','category','loaisanpham','active_menu'));
    }
    public function bag(){
    	$sanpham = SanPham::where('id_theloai',3)->get();
        $loaisanpham  = Loaisanpham::all();
    	$category = 'BAG';
        $active_menu = 3;
    	return view('pages/search_product',compact('sanpham','category','loaisanpham','active_menu'));
    }
    
}
