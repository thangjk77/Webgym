<?php 
// include('../../config/config.php');
// $sql_lietke_danhsachnguoidung = "SELECT * FROM host_quanlynguoidung ORDER BY id ASC";
// $query_lietke_danhsachnguoidung = mysqli_query($mysqli,$sql_lietke_danhsachnguoidung);
// $row = mysqli_fetch_array($query_lietke_danhsachnguoidung); ?>

<?php
if($row['goidangky']==='1 Tháng') { 		
	$adddate = new DateTime($row['ngaydangky']);
	$interval = new DateInterval('P1M');
	$adddate->add($interval);
	echo $ngayhethan = $adddate->format('Y-m-d') ;
} elseif($row['goidangky']==='3 Tháng') {
	$adddate = new DateTime($row['ngaydangky']);
	$interval = new DateInterval('P3M');
	$adddate->add($interval);
	echo $ngayhethan = $adddate->format('Y-m-d') ;
} elseif($row['goidangky']==='6 Tháng') {
	$adddate = new DateTime($row['ngaydangky']);
	$interval = new DateInterval('P6M');
	$adddate->add($interval);
	echo $ngayhethan = $adddate->format('Y-m-d') ;
} elseif($row['goidangky']==='9 Tháng') {
	$adddate = new DateTime($row['ngaydangky']);
	$interval = new DateInterval('P9M');
	$adddate->add($interval);
	echo $ngayhethan = $adddate->format('Y-m-d') ;
} elseif($row['goidangky']==='12 Tháng') {
	$adddate = new DateTime($row['ngaydangky']);
	$interval = new DateInterval('P12M');
	$adddate->add($interval);
	echo $ngayhethan = $adddate->format('Y-m-d') ;
}

?>