<?php 
	if(isset($_GET['quanly'])) {
		$tam = $_GET['quanly'];
	} else {
		$tam ='';
	}
	if($tam=='trangchu') {
		include("banner.php");
		include("container.php");
	}

	elseif($tam=='taikhoan') {
		include("main/index_sign-in.php");
	}
?>