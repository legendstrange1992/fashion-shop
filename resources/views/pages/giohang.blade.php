@extends('layout.master')
@section('header')
<header class="header-v2">
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop p-l-45">
				
				<!-- Logo desktop -->		
				<a href="{{route('trangchu')}}" class="logo">
					<img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="active-menu">
							<a href="index.html">Home</a>
							<ul class="sub-menu">
								<li><a href="index.html">Homepage 1</a></li>
								<li><a href="home-02.html">Homepage 2</a></li>
								<li><a href="home-03.html">Homepage 3</a></li>
							</ul>
						</li>

						<li>
							<a href="product.html">Shop</a>
						</li>

						<li class="label1" data-label1="hot">
							<a href="shoping-cart.html">Features</a>
						</li>

						<li>
							<a href="blog.html">Blog</a>
						</li>

						<li>
							<a href="about.html">About</a>
						</li>

						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m h-full">
					<div class="flex-c-m h-full p-r-24">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
					</div>
						
					<div class="flex-c-m h-full p-lr-19">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
							<i class="zmdi zmdi-menu"></i>
						</div>
					</div>
				</div>
			</nav>
		</div>	
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->		
		<div class="logo-mobile">
			<a href="{{route('trangchu')}}"><img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
			<div class="flex-c-m h-full p-r-10">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
			</div>

			<div class="flex-c-m h-full p-lr-10 bor5">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart soluong_cart_mobile"
					data-notify="<?php 
					if(session()->has('giohang')){ 
						echo count(session()->get('giohang'));
					}
					else{
						echo 0;
					} ?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="main-menu-m">
			<li>
				<a href="index.html">Home</a>
				<ul class="sub-menu-m">
					<li><a href="index.html">Homepage 1</a></li>
					<li><a href="home-02.html">Homepage 2</a></li>
					<li><a href="home-03.html">Homepage 3</a></li>
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href="product.html">Shop</a>
			</li>

			<li>
				<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
			</li>

			<li>
				<a href="blog.html">Blog</a>
			</li>

			<li>
				<a href="about.html">About</a>
			</li>

			<li>
				<a href="contact.html">Contact</a>
			</li>
		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="Search...">
			</form>
		</div>
	</div>
</header>
@endsection
@section('product')
<div class="colorlib-shop">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1" style="">
				<div class="process-wrap">
					<div class="process text-center active">
						<p><span>01</span></p>
						<h3>Shopping Cart</h3>
					</div>
					<div class="process text-center">
						<p><span>02</span></p>
						<h3>Checkout</h3>
					</div>
					<div class="process text-center">
						<p><span>03</span></p>
						<h3>Order Complete</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1">
				<div class="product-name">
					<div class="one-forth text-center">
						<span>Product Details</span>
					</div>
					<div class="one-eight text-center">
						<span>Quantity</span>
					</div>
					<div class="one-eight text-center">
						<span>Price</span>
					</div>
					
					<div class="one-eight text-center">
						<span>Total</span>
					</div>
					<div class="one-eight text-center">
						<span>Remove</span>
					</div>
                </div>
                
                <?php
				$tongtien = 0;
                if(isset($cart)){
					
                    foreach($cart as $key => $value){
                        foreach($value as $k => $v){
							$tongtien += $v['dongia']*$v['soluong'];
                ?>
                <div class="product-cart">
					<div class="one-forth" style="padding-left:2%">
						<div class="product-img" style="background-image: url({{asset('images')}}/<?php echo $v['hinh']?>);">
						</div>
						<div class="display-tc">
							<h3><?php echo $v['tensanpham'].' ('.$k.')'?></h3>
						</div>
					</div>
					<div class="one-eight text-center">
						<div class="display-tc">
                            <input type="button" data-style='<?php echo $k?>' data-id='<?php echo $v['id']?>' value="+" class="form-control tang text-center" style="width:40px;">
							<input type="text" id="quantity" name="quantity" class="form-control input-number text-center quantity soluong_<?php echo $v['id']?>_<?php echo $k?>" value="<?php echo $v['soluong']?>" style="width:40px;">
                            <input type="button" data-style='<?php echo $k?>' data-id='<?php echo $v['id']?>' value="-" class="form-control giam text-center" style="width:40px;">
                        </div>
					</div>
					<div class="one-eight text-center">
						<div class="display-tc">
							<span class="price"><?php echo '$'.$v['dongia']?></span>
						</div>
					</div>
					
					<div class="one-eight text-center">
						<div class="display-tc">
							<span class="price thanhtien_<?php echo $v['id']?>_<?php echo $k?>">$<?php echo number_format($v['dongia']*$v['soluong'])?></span>
						</div>
					</div>
					<div class="one-eight text-center">
						<div class="display-tc">
							<a href="#" class="closed"></a>
						</div>
					</div>
				</div>
                <?php                                      
                        }
                    }
                } 
                ?>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="total-wrap">
					<div class="row">
						<div class="col-md-8">
							<form action="#">
								<div class="row form-group">
									<div class="col-md-9">
										<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
									</div>
									<div class="col-md-3">
										<input type="submit" value="Apply Coupon" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-3 col-md-push-1 text-center">
							<div class="total">
								<div class="sub">
									<p><span>Subtotal:</span> <span>$0.00</span></p>
									<p><span>Delivery:</span> <span>$0.00</span></p>
									<p><span>Discount:</span> <span>$0.00</span></p>
								</div>
								<div class="grand-total">
									<p><span><strong>Total:</strong></span><span class="tongtien_giohang">$ <?php echo number_format($tongtien);?></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection