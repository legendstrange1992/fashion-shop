<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				<!-- item cart-->
				<?php
					if(!empty($_SESSION['giohang']))
					{
						$total = 0;
						foreach($_SESSION['giohang'] as $key => $value)
						{
							$result = pg_query("select * from sanpham where id_sanpham = $key");
							$row = pg_fetch_array($result);
							$count_value = count($value);
							$tong_soluong_key = 0;
							foreach($value as $key_value)
							{
								$tong_soluong_key +=$key_value['soluong'];
							}
				 ?>
							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="images/<?php echo $row['hinh'];?>" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
									<?php echo $row['tensanpham'];?>
									</a>

									<span class="header-cart-item-info">
										$<?php echo $row['dongia'];?> x <?php echo $tong_soluong_key;?>
									</span>
								</div>
							</li>
				<?php 
						$total += $tong_soluong_key * $row['dongia'];
						}	
					}	
				?>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $<?php echo $total; ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>