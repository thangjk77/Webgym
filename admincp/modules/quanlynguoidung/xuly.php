<?php
include('../../config/config.php');
$id = $_POST['id'];
$hovaten = $_POST['hovaten'];
$tuoi = $_POST['tuoi'];
$gioitinh = $_POST['gioitinh'];
$goidangky = $_POST['goidangky'];
$ngaydangky = $_POST['ngaydangky'];
$ngayhethan2 = $_POST['ngayhethan'];
$count = $_POST['count'];
$sql_lietke_danhsachnguoidung = "SELECT * FROM host_quanlynguoidung ORDER BY id ASC";
$query_lietke_danhsachnguoidung = mysqli_query($mysqli,$sql_lietke_danhsachnguoidung);
$row = mysqli_fetch_array($query_lietke_danhsachnguoidung);
if(isset($_POST['themnguoidung'])) {
						// THÊM NGUUOI DÙNG
	$sql_them = "INSERT INTO host_quanlynguoidung(name,age,gender,goidangky,ngaydangky,ngayhethan,count) VALUE('".$hovaten."','".$tuoi."','".$gioitinh."','".$goidangky."','".$ngaydangky."','1','1')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlynguoidung&query=them');


} elseif(isset($_POST['chuphinh'])) {
	// if($row['goidangky']==='1 Tháng') { 		
	// 		$adddate = new DateTime($row['ngaydangky']);
	// 		$interval = new DateInterval('P1M');
	// 		$adddate->add($interval);
	// 		$ngayhethan = $adddate->format('Y-m-d') ;
	// 	} elseif($row['goidangky']==='3 Tháng') {
	// 		$adddate = new DateTime($row['ngaydangky']);
	// 		$interval = new DateInterval('P3M');
	// 		$adddate->add($interval);
	// 		$ngayhethan = $adddate->format('Y-m-d') ;
	// 	} elseif($row['goidangky']==='6 Tháng') {
	// 		$adddate = new DateTime($row['ngaydangky']);
	// 		$interval = new DateInterval('P6M');
	// 		$adddate->add($interval);
	// 		$ngayhethan = $adddate->format('Y-m-d') ;
	// 	} elseif($row['goidangky']==='9 Tháng') {
	// 		$adddate = new DateTime($row['ngaydangky']);
	// 		$interval = new DateInterval('P9M');
	// 		$adddate->add($interval);
	// 		$ngayhethan = $adddate->format('Y-m-d') ;
	// 	} elseif($row['goidangky']==='12 Tháng') {
	// 		$adddate = new DateTime($row['ngaydangky']);
	// 		$interval = new DateInterval('P12M');
	// 		$adddate->add($interval);
	// 		$ngayhethan = $adddate->format('Y-m-d') ;
	// 	}
	// $sql_ngayhethan = "UPDATE host_quanlynguoidung SET ngayhethan='".$ngayhethan."' WHERE id='0'";
	// mysqli_query($mysqli,$sql_ngayhethan);
	header('Location:../../index.php?action=quanlynguoidung&query=them');
	include('TestPy.php');
	
 } elseif(isset($_POST['check'])) {
	// $ngayhethan = $_POST['ngayhethan'];
	
	$sql_check = "UPDATE host_quanlynguoidung SET ngayhethan='".$ngayhethan."' WHERE ngayhethan=''";
	mysqli_query($mysqli,$sql_check);
	header('Location:../../index.php?action=quanlynguoidung&query=them');
	include('TestPy_check.php');
 }

elseif(isset($_POST['suanguoidung'])) {
						//SỬA NGƯỜI DÙNG
	$sql_update = "UPDATE host_quanlynguoidung SET id='".$id."', name='".$hovaten."', age='".$tuoi."', gender='".$gioitinh."',goidangky='".$goidangky."',ngaydangky='".$ngaydangky."',count='3' WHERE id='$_GET[idnguoidung]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlynguoidung&query=them');

                       
} else {
					 // XÓA NGƯỜI DÙNG
	$id = $_GET['idnguoidung']; 
	$sql_xoa ="DELETE FROM host_quanlynguoidung WHERE id ='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynguoidung&query=them');

}

?>