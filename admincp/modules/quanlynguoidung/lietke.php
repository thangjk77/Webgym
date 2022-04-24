<div class="col l-8">
	<div class="show">
		<span class="show-heading">Liệt kê danh sách người dùng</span>
		<?php 
	$sql_lietke_danhsachnguoidung = "SELECT * FROM host_quanlynguoidung ORDER BY id ASC";
	$query_lietke_danhsachnguoidung = mysqli_query($mysqli,$sql_lietke_danhsachnguoidung);
?>

		<table class="show-user">
			<thead>
				<tr>
					<th class="">ID</th>
					<th class="">Họ và tên</th>
					<th class="">Tuổi</th>
					<th class="">Giới tính</th>
					<th class="">Hình ảnh</th>
					<th class="">Quản lý</th>
				</tr>
			</thead>

			<?php 
	$i = 0;
	while($row = mysqli_fetch_array($query_lietke_danhsachnguoidung)) {
		$i++;
?>

			<tr>
				<td>
					<?php echo $i ?>
				</td>
				<td>
					<?php echo $row['name'] ?>
				</td>
				<td>
					<?php echo $row['age'] ?>
				</td>
				<td>
					<?php echo $row['gender'] ?>
				</td>
				<td>
					<?php echo $row['avatar'] ?>
				</td>
				<td>
					<a href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id']?>">Xóa</a> | <a
						href="?action=quanlynguoidung&query=sua&idnguoidung=<?php echo $row['id']?>">Sửa</a>
				</td>
			</tr>

			<?php 
	}
	?>

		</table>
	</div>