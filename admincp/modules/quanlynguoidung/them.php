<div class="col l-4">
	<div class="add">

		<span class="add-user-heading">Nhập thông tin người dùng</span>
		<!-- <div class="row">
			<div class="col l-10 m-12 c-12"></div> -->
		<table class="add-user">
			<thead>
				<form method="POST" action="modules/quanlynguoidung/xuly.php">
					<!-- <tr>
						<td class="add-user-item">ID</td>
						<td><input type="text" class="add-user-input" name="id" /></td>
					</tr> -->
					<tr>
						<td class="add-user-item ">Họ và tên</td>
						<td><input type="text" class="add-user-input select-name" name="hovaten" /></td>
					</tr>
					<tr>
						<td class="add-user-item ">Tuổi</td>
						<td><input type="text" class="add-user-input select-age" name="tuoi" /></td>
					</tr>
					<tr>
						<td class="add-user-item">Giới tính</td>
						<td>
							<select class="select-gender" name="gioitinh">
								<option value="0">Giới tính</option>
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
							<!-- <input type="text" class="add-user-input" name="gioitinh" /> -->
						</td>
					</tr>

					<tr>
						<td class="add-user-item">Đăng ký gói</td>
						<td>
							<select class="select-package" name="goidangky">
								<option value="0">Gói</option>
								<option value="1 Tháng">1 Tháng</option>
								<option value="3 Tháng">3 Tháng</option>
								<option value="6 Tháng">6 Tháng</option>
								<option value="9 Tháng">9 Tháng</option>
								<option value="12 Tháng">12 Tháng</option>
							</select>
						</td>
					</tr>

					<tr class="day-sign-up">
						<td class="add-user-item ">Ngày đăng ký</td>
						<td><input type="date" value="" class="add-user-input" name="ngaydangky" /></td>
					</tr>

					<!-- <tr>
						<td class="add-user-item">Avatar</td>
						<td>
							<a class="add-user-item-avatar" href="./modules/quanlynguoidung/TestPy.php">chụp hình</a>
						</td>
					</tr> -->
					<tr>
						<td><input type="submit" class="add-user-submit" name="themnguoidung" value="Thêm người dùng">
						</td>
						<td></td>
					</tr>
				</form>
			</thead>
		</table>
	</div>
	<!-- </div>  -->

</div>