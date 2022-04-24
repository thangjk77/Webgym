<?php 
	if(isset($_GET['quanly'])) {
		$tam = $_GET['quanly'];
	} else {
		$tam ='';
	}
	if($tam=='trangchu') {
		include("banner.php");
		include("container.php");
	}elseif($tam=='clb') {
		include("main/clb.php");
	}elseif($tam=='dichvu') {
		include("main/dichvu.php");
	}elseif($tam=='lichhoc') {
		include("main/lichhoc.php");
	}elseif($tam=='tintuc') {
		include("main/tintuc.php");
	}
	elseif($tam=='host') {
		include("main/host.php");
	}
	elseif($tam=='taikhoan') {
		include("main/index_sign-in.php");
	}
?>