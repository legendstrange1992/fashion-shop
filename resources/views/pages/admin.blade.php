@extends('layout/layout_admin')
@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "><b>ĐƠN ĐẶT HÀNG</b></h4>
                  <p class="card-category">Tất cả đơn hàng</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Tên Khách hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Email</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Tổng Tiền</th>
                        <th></th>
                      </thead>
                      <tbody>
                        @foreach($donhang as $dh)
                        <tr>
                          <td>{{$dh->id_donhang}}</td>
                          <td>{{$dh->tenkhachhang}}</td>
                          <td>{{$dh->diachi}}</td>
                          <td>{{$dh->dienthoai}}</td>
                          <td>{{$dh->email}}</td>
                          <td>{{$dh->ngaydathang}}</td>
                          <td class="text-primary">$ {{number_format($dh->tongtien)}}</td>
                          <td><a class="text-primary show_chitiet" data-id="{{$dh->id_donhang}}"><b>Chi tiết</b></a> | <a class="text-primary"><b>Xoá</b></a></td>
                        </tr>
                        <tr >
                        	<td colspan="8">
                        		<div class="chitiet_donhang{{$dh->id_donhang}} chitiet_donhang" style="display: none;width: 100%;height: auto;border-radius: 5px;padding: 20px; background: white;box-shadow:0px 0px 5px blue;">
                        			<h2 class="card-title text-primary text-center"><b>ĐƠN HÀNG : {{$dh->id_donhang}}</b></h2>
                        			<table class="table" style="background:white;text-align: center; ">
    						              	<thead class=" text-primary">
    						                	<th>ID Sản Phẩm</th>
    						                	<th>Ảnh</th>
    						                	<th>Tên Sản Phẩm</th>
    						                	<th>Color - Size</th>
    						                	<th>Số Lượng</th>
    						                	<th>Đơn Giá</th>
    						                	<th>Thành Tiền</th>
    					              		</thead>
            										<tbody>
            											@foreach($chitietdonhang  as $ctdh)
            											<tr>
            												<td>{{$ctdh->id_sanpham}}</td>
            												<td><img src="{{asset('images')}}/{{$ctdh->hinh}}" width="60px" height="70px" alt=""></td>
            												<td>{{$ctdh->tensanpham}}</td>
            												<td>{{$ctdh->style}}</td>
            												<td>{{$ctdh->soluong}}</td>
            												<td><b>$ {{number_format($ctdh->dongia)}}</b></td>
            												<td><b>$ {{number_format($ctdh->thanhtien)}}</b></td>
            											</tr>
            											@endforeach
            											<tr>
            												<td colspan="5"></td>
            												<td><b><span style="color:red;font-weight: bold;">Tổng tiền : $ <?php 
            													$tongthanhtien = 0;
            													foreach ($chitietdonhang as $key => $value) {
            														$tongthanhtien += $value->thanhtien;
            													}
            													echo number_format($tongthanhtien);
            												?></span></b></td>
            												<td><input type="button" data-id="{{$dh->id_donhang}}" class="btn_dong" value="Đóng"></td>
            											</tr>
            										</tbody>
            									</table>
                        		</div>
                        	</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection