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
		set_time_limit(500);
		echo shell_exec("python main_app.py");
		header('Location:../../index.php?action=quanlynguoidung&query=them');
?>
</head>

<body>

</body>

</html>