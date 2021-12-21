<?php 
	include 'layouts/headadmin.php';
?>
		<section class="special_recipe_area">
				<div class="container">
					<div class="main_title">
						<h2>Danh Sách Sản Phẩm</h2>
					</div>
					<div class="main_title">
						<a href="createproduct.html"><button type="button" class="btn btn-info">Thêm Sản Phẩm</button></a>
					</div>
				<table class="table table-dark table-striped">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Image</th>
						<th scope="col">Name</th>
						<th scope="col">Content</th>
						<th scope="col">Total</th>
						<th scope="col" style="width: 300px;">Other</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1</th>
						<td><img class="img-fluid" src="img/portfolio/portfolio-1.jpg" alt="" with="100px" height="61.61px"></td>
						<td>bánh socola</td>
						<td>
							Sô-cô-la được làm từ những hạt của cây cacao được sấy khô và nghiền nhỏ. Nguồn gốc của cây cacao là từ México, 
							những hạt cây cacao có mùi vị hơi đắng. Kết quả của quá trình đó được biết đến với tên gọi là "sô-cô-la".
						</td>
						<td>20.000đ</td>
						<td >
							<a href="product _detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="product _detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td><img class="img-fluid" src="img/cake-feature/c-feature-1.jpg" alt="" with="100px" height="61.61px"></td>
						<td>bánh vani</td>
						<td>
							Bánh quy vị vani YBC Sandwich Crackers 18 cái là dòng bánh quy ngọt cao cấp được nhập khẩu trực tiếp từ Nhật Bản. Là món ăn nhẹ giàu dinh dưỡng, được ưa chuộng tại Nhật và nhiều quốc gia trên thế giới.
							 Bánh quy kết cấu 3 lớp với nhân kem vanilla ngọt thơm, béo bùi, hấp dẫn vị giác tới tận miếng cuối cùng.
						</td>
						<td>20.000đ</td>
						<td>
							<a href="product _detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="product _detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td><img class="img-fluid" src="img/cake-feature/c-feature-2.jpg" alt="" with="100px" height="61.61px"></td>
						<td>Bánh matcha</td>
						<td>
							Bánh matcha là phần bột nghiền mịn của lá trà xanh được trồng và chế biến đặc biệt, được tiêu thụ theo truyền thống tại Đông Á. Điều đặc biệt từ khía cạnh canh tác và chế biến:
							 những cây trà xanh được sử dụng cho matcha được trồng trong bóng râm trong ba đến bốn tuần trước khi thu hoạch, và phần thân và gân lá được loại bỏ trong quá trình chế biến.
						</td>
						<td>20.000đ</td>
						<td>
							<a href="product _detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
							<a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
							<a href="product _detail.php"><button type="button" class="btn btn-info">XemChiTiết</button></a>
						</td>
					</tr>
					</tbody>
				</table>
				</div>
		</section>
		<?php 
	include 'layouts/footeradmin.php';
?>