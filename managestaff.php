<?php 
	include 'layouts/headadmin.php';
?>

		<section class="special_recipe_area">
				<div class="container">
					<div class="main_title">
						<h2>Danh Sách Nhân Viên</h2>
					</div>
					<div class="main_title">
						<a href="createstaff.php"><button type="button" class="btn btn-info">Thêm Nhân Viên</button></a>
					</div>
				<table class="table table-dark table-striped">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Họ Tên</th>
						<th scope="col">Ngày Sinh</th>
						<th scope="col">Giới Tính</th>
						<th scope="col">EMAIL</th>
						<th scope="col">Chức Vụ</th>
						<th scope="col">Ngày Vào Làm</th>
						<th scope="col">Khác</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Nguyễn Thị C</td>
						<td>1/2/1998</td>
						<td>Nữ</td>
						<td>nguyenthic@gmail.com</td>
						<td>Nhân Viên</td>
						<td>19/3/2016</td>
						<td>
							<a href="staff_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="staff_detail.php"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="staff_detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Nguyễn Thị D</td>
						<td>12/2/1996</td>
						<td>Nữ</td>
						<td>nguyenthid@gmail.com</td>
						<td>Quản Lý</td>
						<td>19/3/2014</td>
						<td>
							<a href="staff_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="staff_detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Trần Văn D</td>
						<td>12/5/1995</td>
						<td>Nam</td>
						<td>tranvand@gmail.com</td>
						<td>Chăm Sóc Khách Hàng</td>
						<td>19/3/2013</td>
						<td>
							<a href="staff_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="staff_detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					</tbody>
				</table>
				</div>
		</section>

		<?php 
	include 'layouts/footeradmin.php';
?>