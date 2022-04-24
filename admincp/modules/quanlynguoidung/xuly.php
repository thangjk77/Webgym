<?php
include('../../config/config.php');
$id = $_POST['id'];
$hovaten = $_POST['hovaten'];
$tuoi = $_POST['tuoi'];
$gioitinh = $_POST['gioitinh'];
if(isset($_POST['themnguoidung'])) {
						// THÊM NGUUOI DÙNG
	$sql_them = "INSERT INTO host_quanlynguoidung(name,age,gender) VALUE('".$hovaten."','".$tuoi."','".$gioitinh."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlynguoidung&query=them');
} elseif(isset($_POST['suanguoidung'])) {
						//SỬA NGƯỜI DÙNG
	$sql_update = "UPDATE host_quanlynguoidung SET id='".$id."', name='".$hovaten."', age='".$tuoi."', gender='".$gioitinh."' WHERE id='$_GET[idnguoidung]'";
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