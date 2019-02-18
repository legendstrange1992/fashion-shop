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
                          <td>
                              <a class="text-primary show_chitiet" data-id="{{$dh->id_donhang}}"><b>Chi tiết</b></a> 
                              | 
                              <a href="{{route('xoa_donhang',$dh->id_donhang)}}" class="text-primary"><b>Xoá</b></a></td>
                        </tr>
                        <tr >
                        	<td colspan="8">
                        		<div class="chitiet_donhang{{$dh->id_donhang}} chitiet_donhang" style="display: none;width: 100%;height: auto;border-radius: 5px;padding: 20px; background: white;box-shadow:0px 0px 5px blue;">
                        			
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