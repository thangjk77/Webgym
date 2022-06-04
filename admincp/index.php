<?php 
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('Location:../index.php?quanly=taikhoan&id=7');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminCp</title>
	<link rel="stylesheet" type="text/css" href="./css/main_admincp.css">
	<link rel="stylesheet" type="text/css" href="./css/grid.css">
	<link rel="stylesheet" type="text/css" href="./css/main_header.css">
	<link rel="stylesheet" type="text/css" href="./css/base_admin.css">

	<!-- <php
echo shell_exec("python testPython.py 'parameter1'");
?> -->

</head>

<body>

	<!-- <div class="wrapper"> -->
	<?php 	
			include("modules/header.php");
			include("config/config.php");
			include("modules/banner.php");
			include("modules/container.php");
			include("modules/main.php");
			include("modules/footer.php");
		?>
	<!-- </div> -->
</body>

</html>