<div class="col l-8">
	<div class="show">
		<span class="show-heading">Danh sách người dùng</span>
		<?php 
	$sql_lietke_danhsachnguoidung = "SELECT * FROM host_quanlynguoidung ORDER BY id ASC";
	$query_lietke_danhsachnguoidung = mysqli_query($mysqli,$sql_lietke_danhsachnguoidung);
?>

		<table class="show-user">
			<form method="POST" action="modules/quanlynguoidung/xuly.php">

				<thead>
					<tr>
						<th class="">ID</th>
						<th class="">Họ và tên</th>
						<th class="">Tuổi</th>
						<th class="">Giới tính</th>
						<th class="">Gói đăng ký</th>
						<!-- <th class="">Hình ảnh</th> -->
						<th class="">Ngày hết hạn</th>
						<th class="">Chỉnh sửa</th>
						<!-- <th class="">Quản lý</th> -->
						<th class=""></th>
						<th><input type="submit" class="take-photo" name="chuphinh" value="Chụp hình">
						</th>
						<th><input type="submit" class="take-photo check-user" name="check" value="Check">
						</th>

					</tr>
				</thead>

				<?php 
	$i = 0;
	while($row = mysqli_fetch_array($query_lietke_danhsachnguoidung)) {
		$i++;
?>

				<tr>
					<td>
						<?php echo $row['id'] ?>
					</td>
					<td>
						<?php echo $row['Ten'] ?>
					</td>
					<td>
						<?php echo $row['Tuoi'] ?>
					</td>
					<td>
						<?php echo $row['Gioitinh'] ?>
					</td>

					<td>
						<?php echo $row['Goidangky'] ?>
					</td>
					<td>
						<input type="text" class="day-expire" name="ngayhethan" value=<?php 
					if($row['Goidangky']==='1 Tháng') { 		
						$adddate = new DateTime($row['Ngaydangky']);
						$interval = new DateInterval('P1M');
						$adddate->add($interval);
						echo $ngayhethan = $adddate->format('Y-m-d') ;
					} elseif($row['Goidangky']==='3 Tháng') {
						$adddate = new DateTime($row['Ngaydangky']);
						$interval = new DateInterval('P3M');
						$adddate->add($interval);
						echo $ngayhethan = $adddate->format('Y-m-d') ;
					} elseif($row['Goidangky']==='6 Tháng') {
						$adddate = new DateTime($row['Ngaydangky']);
						$interval = new DateInterval('P6M');
						$adddate->add($interval);
						echo $ngayhethan = $adddate->format('Y-m-d') ;
					} elseif($row['Goidangky']==='9 Tháng') {
						$adddate = new DateTime($row['Ngaydangky']);
						$interval = new DateInterval('P9M');
						$adddate->add($interval);
						echo $ngayhethan = $adddate->format('Y-m-d') ;
					} elseif($row['Goidangky']==='12 Tháng') {
						$adddate = new DateTime($row['Ngaydangky']);
						$interval = new DateInterval('P12M');
						$adddate->add($interval);
						echo $ngayhethan = $adddate->format('Y-m-d') ;
					}
					
					// echo $row['ngayhethan'];
					// include('xulythoigian.php')
				
					if($row['Bientam']==='1') {
						$sql_update_date = "UPDATE host_quanlynguoidung SET Ngayhethan='".$ngayhethan."',Bientam='0' WHERE Bientam='1'";
						mysqli_query($mysqli,$sql_update_date);
					}else if($row['Bientam']==='3') {
						$sql_edit_date = "UPDATE host_quanlynguoidung SET Ngayhethan='".$ngayhethan."',Bientam='0' WHERE Bientam='3'";
						mysqli_query($mysqli,$sql_edit_date);
					}
			 ?> />
					<td>
						<a href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id']?>">Xóa</a> | <a
							href="?action=quanlynguoidung&query=sua&idnguoidung=<?php echo $row['id']?>">Sửa</a>
					</td>

					<?php 
	}
	?>



					<!-- <td>
						<a name="check" href="./modules/quanlynguoidung/TestPy_check.php">Check</a>
					</td> -->
			</form>
			</tr>




			<!-- <form method="POST" action="modules/quanlynguoidung/xuly.php">
				</td>
				<td><input type="submit" class="take-photo check-user" name="check" value="CHECK">
				</td>
			</form> -->


		</table>
	</div>