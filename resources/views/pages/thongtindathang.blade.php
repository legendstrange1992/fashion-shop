@extends('layout.master')
@section('header')
<header class="header-v2">
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop p-l-45">
				.
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
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search search_product">
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
            <div class="col-md-10 col-md-offset-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="process text-center active">
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
        <div class="row">
            <div class="col7" >
                <form method="post" action="{{route('ordercomplete')}}" class="colorlib-form">
                    {!! csrf_field() !!}
                    <h1 style='text-align:center;'>CHECK OUT</h1>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" name="firstname" class="form-control" autocomplete='off' placeholder="Your first name">
                            </div>
                            <div class="col-md-6" style='padding-top:10px;'>
                                <label for="lname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" autocomplete='off' placeholder="Your last name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Address</label>
                            <input type="text" name="address" class="form-control" autocomplete='off' placeholder="Enter Your Address">
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" autocomplete='off' placeholder="example : abc@gmail.com">
                            </div>
                            <script>
                            function isNumberKey(evt)
                                {
                                var charCode = (evt.which) ? evt.which : event.keyCode;
                                if(charCode == 59 || charCode == 46)
                                    return true;
                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                    return false;
                                return true;
                                }
                            </script>
                            <div class="col-md-6" style='padding-top:10px;'>
                                <label for="Phone">Phone Number</label>
                                <input type="text"  onkeypress="return isNumberKey(event)" maxlength="11" name='phonenumber' class="form-control" autocomplete='off' placeholder="example : 123456789">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style='padding-left:30px;'>
                            <p><input class='btn btn-primary' type="submit" value='Place an order'></p>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection