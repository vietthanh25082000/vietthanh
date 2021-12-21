<<?php 
	include 'layouts/headadmin.php';
?>
        <section class="special_recipe_area">
          <div class="container">
            <div class="main_title">
              <h2>Đăng Ký Khách Hàng</h2>
            </div>
		<form style="color: white;">
            <div class="row mb-3">
              <label for="inputHoTen" class="col-sm-2 col-form-label">HọTên</label>
              <div class="col-sm-10">
                <input type="email"  id="inputHoTen" >
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email"  id="inputEmail3">
                </div>
            </div>
			<div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày Sinh</label>
                <div class="col-sm-10">
                  <input type="email"  id="inputEmail3">
                </div>
            </div>
			<div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                <div class="col-sm-10">
                  <input type="email"  id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Mật Khẩu</label>
              <div class="col-sm-10">
                <input type="password" id="inputPassword3">
              </div>
            </div>
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0">GiớiTính :
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Nam
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    Nữ
                  </label>
                </div>
              </legend>
              
            </fieldset>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </form>
          </div>
          </section>>
          <?php 
	include 'layouts/footeradmin.php';
?>