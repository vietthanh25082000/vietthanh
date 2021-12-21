<?php 
	include 'layouts/headadmin.php';
?>
<section class="special_recipe_area">
          <div class="container">
            <div class="main_title">
              <h2>Thông Tin Bill_ChiTiết</h2>
            </div>
		<form style="color: aliceblue;">
            <div class="row mb-3">
              <label for="inputTenSP" class="col-sm-2 col-form-label">Tên Sản Phẩm:</label>
              <div class="col-sm-10">
                <input type="email"  id="inputHoTen" >
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputContent" class="col-sm-2 col-form-label">Nội Dung :</label>
                <div class="col-sm-10">
                  <input type="email"  id="inputEmail3">
                </div>
            </div>
			<div class="row mb-3">
                <label for="inputContent" class="col-sm-2 col-form-label">Số Lượng:</label>
                <div class="col-sm-10">
                  <input type="email"  id="inputSoLuong">
                </div>
            </div>
			<div class="row mb-3">
				<label for="inputKill" class="col-sm-2 col-form-label">Loại:</label>
				<div class="col-sm-10">
				  <select  aria-label=".form-select-sm example">
					<option selected></option>
					<option value="1">Loại 1</option>
					<option value="2">Loại 2</option>
					<option value="3">Loại 3</option>
				  </select>
				</div>
			  </div>
            <div class="row mb-3">
              <label for="inputTotal" class="col-sm-2 col-form-label">Giá:</label>
              <div class="col-sm-10">
                <input type="password" id="inputPassword3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputTotal" class="col-sm-2 col-form-label">Hình Ảnh:</label>
              <div class="col-sm-10">
                <input type="file" id="inputPassword3">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </form>
          </div>
          </section>
<?php 
	include 'layouts/footeradmin.php';
?>
