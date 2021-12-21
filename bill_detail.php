<?php 
include 'layouts/headadmin.php';
?>

		<section class="special_recipe_area">
				<div class="container">
					<div class="main_title">
						<a href="managebill.php"><button type="button" class="btn btn-danger">Back</button></a>
					</div>
					<div class="main_title">
						<h2>Thông Tin Đơn Hàng</h2>
					</div>
				<table class="table table-dark table-striped">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Mã Đơn Hàng</th>
						<th scope="col">TênSảnPhẩm</th>
						<th scope="col">Loại</th>
						<th scope="col">SốLượng</th>
						<th scope="col">Giá</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>ĐH01</td>
						<td>Bánh Doremon</td>
						<td>1</td>
						<td>1</td>
						<td>20.000đ</td>
						<td>
							<a href="createbill_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-info">Xóa</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>ĐH01</td>
						<td>Bánh Con Gấu</td>
						<td>1</td>
						<td>1</td>
						<td>20.000đ</td>
						<td>
							<a href="createbill_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-info">Xóa</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>ĐH02</td>
						<td>Bánh Mì Mặn</td>
						<td>2</td>
						<td>1</td>
						<td>20.000đ</td>
						<td>
							<a href="createbill_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-info">Xóa</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>ĐH02</td>
						<td>Bánh Trái Cây</td>
						<td>3</td>
						<td>1</td>
						<td>20.000đ</td>
						<td>
							<a href="createbill_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-info">Xóa</button></a>
						</td>
					</tr>
				
					</tbody>
				</table>
				</div>
		</section>

		<?php 
	include 'layouts/footeradmin.php';
?>