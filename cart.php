<?php include 'layouts/header.php'; ?>

<body>
	<!--================End Main Header Area =================-->
	<!-- <section class="banner_area">
		<div class="container">
			<div class="banner_text">
				<h3>Cart</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="cart.html">Cart</a></li>
				</ul>
			</div>
		</div>
	</section> -->
	<!--================End Main Header Area =================-->

	<!--================Cart Table Area =================-->
	<section class="cart_table_area p_100">
		<div class="container">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Preview</th>
							<th scope="col">Product</th>
							<th scope="col">Price</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>
								<img src="img/product/cart-img.jpg" alt="">
							</td>
							<td>Wheel Axel</td>
							<td>$25.00</td>
							<td>
								<select class="product_select">
									<option data-display="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
							<td>$25.00</td>
							<td>X</td>
						</tr>
						<tr>
							<td>
								<form class="form-inline">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Coupon code">
									</div>
									<button type="submit" class="btn">Apply Coupon</button>
								</form>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<a class="pest_btn" href="#">Add To Cart</a>
							</td>
						</tr> -->
						<!-- <div class="container">
							<h2>Basic Dropdown in Bootstrap 4</h2>
							<div class="dropdown">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Dropdown button
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Option 1</a>
									<a class="dropdown-item" href="#">Option 2</a>
									<a class="dropdown-item" href="#">Option 3</a>
									<a class="dropdown-item" href="#">Option 4</a>
								</div>
							</div>
						</div> -->
					</tbody>
				</table>
			</div>
			<div class="row cart_total_inner">
				<div class="col-lg-7"></div>
				<div class="col-lg-5">
					<div class="cart_total_text">
						<div class="cart_head">
							Cart Total
						</div>
						<div class="sub_total">
							<h5>Sub Total <span>$00.00</span></h5>
						</div>
						<div class="total">
							<h4>Total <span>$00.00</span></h4>
						</div>
						<div class="cart_footer">
							<a class="pest_btn" href="#">Proceed to Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Table Area =================-->

	<!--================Newsletter Area =================-->
	<!-- <section class="newsletter_area">
		<div class="container">
			<div class="row newsletter_inner">
				<div class="col-lg-6">
					<div class="news_left_text">
						<h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="newsletter_form">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Enter your email address">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================End Newsletter Area =================-->

	<!--================Footer Area =================-->
	<?php include 'layouts/footer.php'; ?>
	<!--================End Footer Area =================-->


	<!--================Search Box Area =================-->
	<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
		<div class="search_box_inner">
			<h3>Search</h3>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
				</span>
			</div>
		</div>
	</div>
	<!--================End Search Box Area =================-->
</body>

</html>