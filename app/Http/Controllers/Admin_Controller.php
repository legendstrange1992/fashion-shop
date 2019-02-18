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
    public function chitiet_donhang($id_donhang){
    	$chitietdonhang = Chitietdonhang::where('id_donhang',$id_donhang)->get();
    	$html = "<h2 class='card-title text-primary text-center'><b>ĐƠN HÀNG : ".$id_donhang."</b></h2>".
		"<table class='table' style='background:white;text-align: center; '>".
          	"<thead class='text-primary'>".
            	"<th>ID Sản Phẩm</th>".
            	"<th>Ảnh</th>".
            	"<th>Tên Sản Phẩm</th>".
            	"<th>Color - Size</th>".
            	"<th>Số Lượng</th>".
            	"<th>Đơn Giá</th>".
            	"<th>Thành Tiền</th>".
      		"</thead>".
			"<tbody>";
			foreach ($chitietdonhang as $key => $value) {
			$html .= "<tr>".
				"<td>".$value['id_sanpham']."</td>".
				"<td><img src='../images/".$value['hinh']."' width='60px' height='70px' alt=''></td>".
				"<td>".$value['tensanpham']."</td>".
				"<td>".$value['style']."</td>".
				"<td>".$value['soluong']."</td>".
				"<td><b>$ ".number_format($value['dongia'])."</b></td>".
				"<td><b>$ ".number_format($value['thanhtien'])."</b></td>".
			"</tr>";
			}
			$tongthanhtien = 0;
			$id_donhang = '';
			foreach ($chitietdonhang as $key => $value) {
				$tongthanhtien += $value['thanhtien'];
			}
			$html .= "<tr>".
					"<td colspan='5'></td>".
					"<td><b><span style='color:red;font-weight: bold;'>Tổng tiền : $ ".number_format($tongthanhtien)."</span></b></td>".
					"<td><input type='button' data-id='".$id_donhang."' class='btn_dong' value='Đóng'></td>".
				"</tr>".
			"</tbody>".
		"</table>";
		return $html;
    }

}
