<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php
    // $command = escapeshellcmd('python ../../../graduation-thesis/example.py');
    // $output = shell_exec($command);
    // echo $output;
		echo shell_exec("User_check.py");
		header('Location:../../../../Web-gymPHP/index.php?quanly=trangchu&id=1#nguoidung');
?>
</head>

<body>

</body>

</html>