<?php 
	include 'layouts/headadmin.php';
?>

		<section class="special_recipe_area">
				<div class="container">
					<div class="main_title">
						<h2>Danh Sách Khách Hàng</h2>
					</div>
					<div class="main_title">
						<a href="createuser.php"><button type="button" class="btn btn-info">Thêm Khách Hàng</button></a>
					</div>
				<table class="table table-dark table-striped">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Họ Tên</th>
						<th scope="col">EMAIL</th>
						<th scope="col">Ngày Sinh</th>
						<th scope="col">Giới Tính</th>
						<th scope="col">Số Điện Thoại</th>
						<th scope="col">Ngày ĐK</th>
						<th scope="col">Khác</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Nguyễn Văn A</td>
						<td>nguyenvana@gmail.com</td>
						<td>20/10/1987</td>
						<td>Nam</td>
						<td>0123456987</td>
						<td>10/10/2016</td>
						<td>
							<a href="customer_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="customer_detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Nguyễn Văn B</td>
						<td>nguyenvanb@gmail.com</td>
						<td>20/6/1989</td>
						<td>Nam</td>
						<td>0123456987</td>
						<td>10/10/2018</td>
						<td>
							<a href="customer_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="customer_detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					</tbody>
				</table>
				</div>
		</section>

		<?php 
	include 'layouts/footeradmin.php';
?>