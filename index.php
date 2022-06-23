<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebGym</title>
	<link rel="stylesheet" type="text/css" href="./css/base.css">
	<link rel="stylesheet" type="text/css" href="./css/grid.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link href="<link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="./pages/bmi.js" defer></script>

</head>

<body>
	<div class="app">
		<?php 	
			include("pages/header.php");
			include("pages/main.php");

			// include("pages/banner.php");
			// include("pages/container.php");
			include("pages/footer.php");
		?>

	</div>
</body>

</html>