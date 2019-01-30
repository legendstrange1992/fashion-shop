<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Requyest;
use App\SanPham;
class Cartcontroller extends Controller
{
    public function cart(){
        $cart = [];
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
        }
        return view('pages.giohang',compact('cart'));
    }
    function addtocard($id,$sl,$color,$size)
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
                    'id'=>$id,
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
                    'id'=>$id,
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
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
            $cart[$id][$style] = $item;
            session()->put('giohang',$cart);
        }
        $cart = session()->get('giohang');
        $tongtien = 0;
        $s = "<ul class='header-cart-wrapitem w-full'>";
        foreach($cart as $key => $value){
            $tensanpham = '';
            $dongia = 0;
            $tongsoluong = 0;
            $hinh = '';
            foreach($value as $k => $v){
                $tensanpham = $v['tensanpham'];
                $dongia = (int)$v['dongia'];
                $hinh = $v['hinh'];

                $tongsoluong += (int)$v['soluong'];
            }
            $s .= "<li class='header-cart-item flex-w flex-t m-b-12'>".
                    "<div class='header-cart-item-img'>".
                        "<img src='images/".$hinh."' alt='IMG'>".
                    "</div>".
                    "<div class='header-cart-item-txt p-t-8'>".
                        "<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>".
                            $tensanpham .
                        "</a>".
                        "<span class='header-cart-item-info'>".
                        $tongsoluong ." x $" . $dongia .
                        "</span>".
                    "</div>".
                "</li>";
            $tongtien += (int)$tongsoluong * (int)$dongia;
        }
        $s.="</ul>";
        $s.="<div class='w-full'>".
        "<div class='header-cart-total w-full p-tb-40'>".
        "Total: $ ".$tongtien.
        "</div>".

        "<div class='header-cart-buttons flex-w w-full'>".
        "<a href='index.php/cart' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'>".
        " View Cart".
        "</a>".

        "<a href='shoping-cart.html' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10'>".
        "    Check Out".
        "</a>".
        "</div>".
        "</div>";
        $count = count($cart);
        $data = ['cart'=>$s,'count'=>$count];
        return $data;
    }
    public function tangsoluong($id,$style){
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
            $cart[$id][$style]["soluong"]++;
            if($cart[$id][$style]["soluong"] > 10){
                $cart[$id][$style]["soluong"] = 10;
            }
            session()->put('giohang',$cart);
            return $cart[$id][$style]["soluong"];
        }
    }
    public function giamsoluong($id,$style){
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
            $cart[$id][$style]["soluong"]--;
            if($cart[$id][$style]["soluong"] == 0){
                $cart[$id][$style]["soluong"] = 1;
            }
            session()->put('giohang',$cart);
            return $cart[$id][$style]["soluong"];
        }
    }
}
