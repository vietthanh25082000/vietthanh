<?php 
	include 'layouts/headadmin.php';
?>

		<section class="special_recipe_area">
				<div class="container">
					
					<div class="main_title">
						<h2>Danh Sách Đơn Hàng</h2>
					</div>
				<table class="table table-dark table-striped">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Mã Đơn Hàng</th>
						<th scope="col">TênKhách Hàng</th>
						<th scope="col">NgàyĐặt</th>
						<th scope="col">SốLượng</th>
						<th scope="col">TổngĐơnHàng</th>
						<th scope="col">Khác</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>ĐH01</td>
						<td>Nguyễn Văn A</td>
						<td>12/9/2021</td>
						<td>2</td>
						<td>40.000đ</td>
						<td>
							<a href="bill_detail.php"><button type="button" class="btn btn-info">Xem Chi Tiết Đơn Hàng</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>ĐH02</td>
						<td>Nguyễn Văn B</td>
						<td>12/8/2021</td>
						<td>2</td>
						<td>40.000đ</td>
						<td>
							<a href="bill_detail.php"><button type="button" class="btn btn-info">Xem Chi Tiết Đơn Hàng</button></a>
						</td>
					</tr>
					</tbody>
				</table>
				</div>
		</section>

		<?php 
		include 'layouts/footeradmin.php';
	?>