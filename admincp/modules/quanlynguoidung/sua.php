<p>Sửa thông tin người dùng</p>

<?php 
	$sql_sua_danhsachnguoidung = "SELECT * FROM host_quanlynguoidung WHERE id= '$_GET[idnguoidung]' LIMIT 1";
	$query_sua_danhsachnguoidung = mysqli_query($mysqli,$sql_sua_danhsachnguoidung);
?>

<div class="add-user">
	<div class="add-user-table">
		<table>
			<form method="POST" action="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $_GET['idnguoidung']?>">

				<?php
					while($dong = mysqli_fetch_array($query_sua_danhsachnguoidung)) {
			?>
				<tr>
					<td colspan="4" class="add-user-heading">Thêm người dùng mới</td>
				</tr>
				<tr>
					<td>ID</td>
					<td><input type="text" value="<?php echo $dong['id'] ?>" class="add-user-input" name="id" /></td>
				</tr>
				<tr>
					<td>Họ và tên</td>
					<td><input type="text" value="<?php echo $dong['name'] ?>" class="add-user-input" name="hovaten" />
					</td>
				</tr>
				<tr>
					<td>Tuổi</td>
					<td><input type="text" value="<?php echo $dong['age'] ?>" class="add-user-input" name="tuoi" /></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td><input type="text" value="<?php echo $dong['gender'] ?>" class="add-user-input"
							name="gioitinh" /></td>
				</tr>
				<tr>
					<td><input type="submit" class="add-user-submit" name="suanguoidung" value="Sửa người dùng"></td>
				</tr>

				<?php
			 }  ?>
			</form>
		</table>
	</div>
</div>