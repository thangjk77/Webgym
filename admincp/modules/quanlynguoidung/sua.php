<?php 
	$sql_sua_danhsachnguoidung = "SELECT * FROM host_quanlynguoidung WHERE id= '$_GET[idnguoidung]' LIMIT 1";
	$query_sua_danhsachnguoidung = mysqli_query($mysqli,$sql_sua_danhsachnguoidung);
?>
<div class="add">
	<span class="add-user-heading">Sửa thông tin người dùng</span>
	<div class="add-user">
		<div class="add-user-table">
			<table>
				<form method="POST"
					action="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $_GET['idnguoidung']?>">

					<?php
					while($dong = mysqli_fetch_array($query_sua_danhsachnguoidung)) {
			?>

					<tr>
						<td class="add-user-item">ID</td>
						<td><input type="text" value="<?php echo $dong['id'] ?>" class="add-user-input" name="id" />
						</td>
					</tr>
					<tr>
						<td class="add-user-item">Họ và tên</td>
						<td><input type="text" value="<?php echo $dong['Ten'] ?>" class="add-user-input"
								name="hovaten" />
						</td>
					</tr>
					<tr>
						<td class="add-user-item">Tuổi</td>
						<td><input type="text" value="<?php echo $dong['Tuoi'] ?>" class="add-user-input" name="tuoi" />
						</td>
					</tr>
					<tr>
						<td class="add-user-item">Giới tính</td>
						<td>
							<select class="select-gender" name="gioitinh">
								<option value="<?php echo $dong['Gioitinh'] ?>"><?php echo $dong['Gioitinh'] ?></option>
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
					</tr>

					<tr>
						<td class="add-user-item">Đăng ký gói</td>
						<td>
							<select class="select-package" name="goidangky">
								<option value="<?php echo $dong['Goidangky'] ?>"><?php echo $dong['Goidangky'] ?>
								</option>
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
						<td><input type="date" value="<?php echo $dong['Ngaydangky']?>" class="add-user-input"
								name="ngaydangky" /></td>
					</tr>

					<tr>
						<td><input type="submit" class="add-user-submit" name="suanguoidung" value="Sửa người dùng">
						</td>
					</tr>



					<?php
			 }  ?>
				</form>
			</table>
		</div>
	</div>
</div>