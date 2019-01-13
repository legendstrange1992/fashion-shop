<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="wrap-pic-w pos-relative">
									<img class="img_modal2" alt="IMG-PRODUCT">
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14 tensanpham_modal">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2 gia_modal">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23 chitiet_sanpham_modal">
							Simple design but lines. 100% elastic cotton 4-dimensional cotton fabric. Soft, smooth, cool sweat absorbent,
							 Laundry washing machine are comfortable.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time" id="size">
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
											<select class="js-select2" name="time" id="color">
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
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m giam_soluong_modal">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product soluong_modal" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m tang_soluong_modal">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</div>
									<div class="size-204 flex-w flex-m respon6-next">
									<button data-id_addtocart="-1"  class="flex-c-m stext-101 cl0 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail addtocart" style="margin-top:10px;width:140px;height: 46px;">
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
	<script>
		$('.addtocart').on('click',function(){
			var id = $(this).attr('data-id_addtocart');
			var size = $('#size').val();
			var color = $('#color').val();
			var soluong = $('.soluong_modal').val();
			var style = color+"-"+size;
			$('.soluong_modal').val(1);
			socket.emit('add_to_card',{id:id,style:style,soluong:soluong});
			$.get("lib/xuly_addtocart.php",{size:size,color:color,soluong:soluong,id:id},function(data){
			
			});
		});
		$('.tang_soluong_modal').on('click',function(){
			var sl = Number($('.soluong_modal').val());
			sl++;
			if(sl<=10){
				$('.soluong_modal').val(sl);
			}
			
		})
		$('.giam_soluong_modal').on('click',function(){
			var sl = Number($('.soluong_modal').val());
			sl--;
			if(sl>0){
				$('.soluong_modal').val(sl);
			}
			
		})
	</script>