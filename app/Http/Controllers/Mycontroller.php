<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Requyest;
use App\SanPham;

class Mycontroller extends Controller
{
    public function index()
    {
        $sanpham = SanPham::all();
        return view('index',compact('sanpham'));
    }
    
    
}
