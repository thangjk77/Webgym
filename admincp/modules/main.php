<div class="main">
	<div class="grid wide">
		<div class="row">
			<?php
	if(isset($_GET['action']) && $_GET['query']) {  
		$tam = $_GET['action'];
		$query = $_GET['query'];
	} else {
		$tam ='';
		$query ='';
	}		
	if($tam=='quanlynguoidung' && $query=='them') {
		include("modules/quanlynguoidung/them.php"); 
		include("modules/quanlynguoidung/lietke.php"); 

	} elseif($tam=='quanlynguoidung' && $query=='sua') {
		include("modules/quanlynguoidung/sua.php"); 
	}
	// elseif($tam=='quanlydichvu') {
	// 	include("main/clb.php");
	// }elseif($tam=='quanlybaiviet') {
	// 	include("main/dichvu.php");
	// }elseif($tam=='quanlytaikhoanadmin') {
	// 	include("main/lichhoc.php");
	// }
	// else {
	// 	include("modules/dashboard.php");
	// }
	?>
		</div>
	</div>
</div>