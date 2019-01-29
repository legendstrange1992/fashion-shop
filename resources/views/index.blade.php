@extends('layout.master')


@section('banner')
	@include('layout.banner')
@endsection

@section('slider')
	@include('layout.slider')
@endsection		

<!-- Product -->	
@section('product')

<div class="container">
	<div class="p-b-32">
		<h3 class="ltext-105 cl5 txt-center respon1">
			Store Overview
		</h3>
	</div>

	<!-- product items -->
	
	
	<div class="row isotope-grid">
	<!-- Block2 -->
		@foreach($sanpham as $sp)
		<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
			
			<div class="block2">
				<div class="block2-pic hov-img0">
					<img src="images/{{$sp->hinh}}">

					<a data-id_sanpham="{{$sp->id_sanpham}}"  class="quickview block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 ">
						Quick View
					</a>
				</div>

				<div class="block2-txt flex-w flex-t p-t-14">
					<div class="block2-txt-child1 flex-col-l ">
						<a style="margin:auto;" href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
							{{$sp->tensanpham}}
						</a>
						<span style="margin:auto;"  class="stext-105 cl3">
							${{$sp->dongia}}
						</span>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		
	</div>		
	<!-- Load more -->
	<div class="flex-c-m flex-w w-full p-t-45">
		<a class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
			Load More
		</a>
	</div>
</div>




<!-- Modal1 -->
@foreach($sanpham as $sp)
<div class="wrap-modal1 js_modal_{{$sp->id_sanpham}} js_modal_delete p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1" data-id="{{$sp->id_sanpham}}">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="wrap-pic-w pos-relative">
									<img class="img_modal2" src="images/{{$sp->hinh}}" alt="IMG-PRODUCT">
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14 tensanpham_modal">
								{{$sp->tensanpham}}
							</h4>

							<span class="mtext-106 cl2 gia_modal">
								${{$sp->dongia}}
							</h4>
							</span>

							<p class="stext-102 cl3 p-t-23 chitiet_sanpham_modal">
							{{$sp->chitiet_sanpham}}
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2 size_{{$sp->id_sanpham}}" name="time" id="size">
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2 color_{{$sp->id_sanpham}}" name="time" id="color">
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m giam_soluong_modal" data-id='{{$sp->id_sanpham}}'>
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product soluong_modal{{$sp->id_sanpham}}" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m tang_soluong_modal" data-id='{{$sp->id_sanpham}}'>
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</div>
									<div class="size-204 flex-w flex-m respon6-next">
									<button data-id="{{$sp->id_sanpham}}"  class="flex-c-m stext-101 cl0 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail addtocart" style="margin-top:10px;width:140px;height: 46px;">
										Add to cart
									</button>
									</div>
									
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endforeach
@endsection