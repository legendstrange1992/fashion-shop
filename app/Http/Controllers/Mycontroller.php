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
    function tangsoluong($id,$sl,$color,$size)
    {
        $data = SanPham::where('id_sanpham',$id)->first();
        $style  = $color.'-'.$size;
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
            if(array_key_exists($id, $cart))
            {
                if(array_key_exists($style,$cart[$id])){
                    $cart[$id][$style]['soluong']+=$sl;
                    session()->put('giohang',$cart);
                }
                else{
                    $item = array(
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
                $cart[$id][$style] = $item;
                session()->put('giohang',$cart);
                }
            }
            else
            {
                $item = array(
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
                $cart[$id][$style] = $item;
                session()->put('giohang',$cart);
            }
        } 
        else{
            $item = array(
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
            $cart[$id][$style] = $item;
            session()->put('giohang',$cart);
        }
        $cart = session()->get('giohang');
        return $cart;
	}
    
}
