<?php 
	// session_start();
	// include('./admincp/config/config.php');
	// if (isset($_POST['dangnhap'])){
	// 	$taikhoan = $_POST['email'];
	// 	$matkhau = md5($_POST['password']);
	// 	$sql = "SELECT * FROM host_admin WHERE email='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
	// 	$row = mysqli_query($mysqli,$sql);
	// 	$count = mysqli_num_rows($row);
	// 	if($count>0) {
	// 		$_SESSION['dangnhap'] = $taikhoan;
	// 		header("Location:./admincp/index.php");			
	// 	}else {
	// 		echo '<script>alert("Tài khoản mật khẩu không đúng, vui lòng nhập lại.")</script>';
	// 		header("Location:index.php?quanly=taikhoan&id=7");			
	// 	} }

	session_start();
	include('./admincp/config/config.php');
	if (isset($_POST['dangnhap'])){
		$username = $_POST['email'];
		$password = md5($_POST['password']);
		$sql = "SELECT * FROM host_dangky WHERE email='".$username."' AND password='".$password."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0) {
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangnhap'] = $row_data['tenkhachhang'];
			// $_SESSION['dangnhap'] = $username;
			echo '<P>đăng nhập thành công</P>';	
			header("Location:./admincp/index.php?action=quanlynguoidung&query=them");		
			

		}else {
			echo '<P>Vui lòng nhập lại</P>'		;	
		}
	}
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$sodienthoai = $_POST['sodienthoai'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO host_dangky(tenkhachhang,sodienthoai,email,password) VALUE('".$tenkhachhang."','".$sodienthoai."','".$email."','".$password."')");
		if($sql_dangky) {
			
			echo '
			<div class="modal js-modal">
				<div class="sign-up-success js-sign-up-success">
					<div class="modal-close js-modal-close">
					<i class="fa-solid fa-xmark"></i>
					</div>
					<div class="success-notice">
						<span class="success-notice_text"> Chúc mừng bạn đã đăng ký thành công</span>
						<span class="success-notice_text">Mã giảm giá của bạn là </span>
						<span class="success-notice_text">
							<p id="demo"></p>
							<script>
								let x = Math.floor((Math.random() * 100000) + 1);
								document.getElementById("demo").innerHTML = x;
							</script>
						</span>
						<span class="success-notice_text">Sử dụng mã khi đến tạo thẻ thành viên tại tất cả phòng tập của JK GYM !</span>
					</div>
				</div>
			</div>
				';
				}
			}
		?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- <link rel="stylesheet" href="./css/main.css"> -->
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/grid.css">
	<link rel="stylesheet" href="./css/sign__in.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<div class="app__sign-in">


		<div class="sign__banner">
			<div class="sign__banner-text">
				<span class="sign__banner-heading">Đăng ký thành viên Jk GYM - Tích điểm thưởng và nhận ưu đãi</span>
				<span class="sign__banner-desc">Nhanh chóng, tiện lợi và an toàn. Đăng ký liền tay, rinh ngay quyền
					lợi.</span>
			</div>
		</div>

		<div class="sign__container">
			<div class="grid wide">
				<div class="row">
					<div class="col l-4">
						<div class="benefits">
							<img src="https://www.luxstay.com/account/coins@2x.png" alt="" class="benefits--img1">
							<span class="benefits--heading">Tích điểm nhanh chóng</span>
							<span class="benefits--desc">Tích điểm đối với mỗi lượt đặt chỗ thành công. Quy đổi thành
								JK Credit để du lịch nhiều hơn nữa.</span>
						</div>
						<div class="benefits">
							<img src="https://www.luxstay.com/account/wallet@2x.png" alt="" class="benefits--img2">
							<span class="benefits--heading">Thanh toán đơn giản</span>
							<span class="benefits--desc">Phương thức thanh toán tiện lợi, an toàn. Tích hợp chức năng
								lưu thẻ để đặt phòng lần sau.</span>
						</div>
					</div>

					<div class="col l-4">
						<div class="benefits">
							<img src="https://www.luxstay.com/account/top-sales@2x.png" alt="" class="benefits--img3">
							<span class="benefits--heading">Tiện ích thông minh</span>
							<span class="benefits--desc">Check-in và kiểm tra hóa đơn thanh toán kể cả khi không có kết
								nối mạng. Hoàn tiền nhanh gọn. Đổi lịch dễ dàng.</span>
						</div>
						<div class="benefits">
							<img src="https://www.luxstay.com/account/backpack@2x.png" alt="" class="benefits--img4">
							<span class="benefits--heading">Ưu đãi mỗi ngày</span>
							<span class="benefits--desc">Nhận thông báo ưu đãi từ JK GYM khi có kế hoạch du lịch để lựa
								chọn và đặt ngay cho mình một chỗ ở phù hợp, tiện nghi với giá tốt nhất.</span>
						</div>
					</div>

					<div class="col l-4 sign__in-active">
						<form action="" autocomplete="off" method="POST">
							<div class="account">
								<span class="account--heading">Đăng nhập</span>
								<span class="account--desc">Đăng nhập để trải nghiệm</span>
								<div class="account--form">
									<input type="text" class="account--email" placeholder="Địa chỉ email" name="email">
									<i class="far fa-envelope account--form--email-icon"></i>
								</div>
								<div class="account--form">
									<input type="password" class="account--password" placeholder="Mật khẩu"
										name="password">
									<i class="fas fa-lock account--form--password-icon"></i>
								</div>
								<input type="submit" name="dangnhap" value="Đăng nhập" class="account--btn">
								<ul class="account--lists">
									<li class="account--item">Quên mật khẩu? <a href="" class="account--link">Nhấn vào
											đây</a></li>
									<li class="account--item">Bạn chưa có tài khoản JK GYM?
									<li class="account--link js-sign-up">Đăng ký</li>
									</li>
									<li class="account--item">Hoặc</li>
									<li class="account--item account--item-btn">Đăng nhập với Facebook
										<i class="fab fa-facebook-square account--item-btn-fb"></i>
									</li>
									<li class="account--item account--item-btn">Đăng nhập với Google
										<i class="fab fa-google account--item-btn-gg"></i>
									</li>
								</ul>
							</div>
						</form>
					</div>

					<div class="col l-4 sign__up-active sign__up-active-disable">
						<form action="" autocomplete="off" method="POST">
							<div class="account ">
								<span class="account--heading">Đăng ký thành viên</span>

								<span class="sign-up__account-heading">Họ và tên</span>
								<div class="account--form account--form__sign-up">
									<input name="hovaten" type="text" class="account--password" placeholder="Họ và tên">
									<i class="fas fa-user account--form--password-icon"></i>
								</div>

								<span class="sign-up__account-heading">Số điện thoại</span>
								<div class="account--form account--form__sign-up">
									<button class="phone-number-area">
										<img src="https://product.hstatic.net/200000122283/product/c-e1-bb-9d-vi-e1-bb-87t-nam_2c0683597d2d419fac401f51ccbae779_grande.jpg"
											alt="" class="phone-number-area-icon">
										<!-- <i class="far fa-star phone-number-area-icon"></i> -->
										<span class="phone-number-area-code">+84</span>
										<i class="fas fa-sort-down"></i>
									</button>
									<input name="sodienthoai" type="text" class="account--phone-number"
										placeholder="Số điện thoại">
								</div>

								<span class="sign-up__account-heading">Địa chỉ email</span>
								<div class="account--form account--form__sign-up">
									<input name="email" type="email" class="account--email" placeholder="Địa chỉ email">
									<i class="far fa-envelope account--form--email-icon"></i>
								</div>

								<span class="sign-up__account-heading">Mật khẩu</span>
								<div class="account--form account--form__sign-up">
									<input name="password" type="password" class="account--password"
										placeholder="Mật khẩu">
									<i class="fas fa-lock account--form--password-icon"></i>
								</div>

								<span class="sign-up__account-heading">Xác nhận mật khẩu</span>
								<div class="account--form account--form__sign-up">
									<input type="password" class="account--password" placeholder="Xác nhận mật khẩu">
									<i class="fas fa-lock account--form--password-icon"></i>
								</div>

								<input type="submit" name="dangky" value="Đăng ký" class="account--btn">
								<ul class="account--lists">
									<li class="account--item">Bạn đã có tài khoản JK GYM?
									<li class="account--link js-sign-in">Đăng nhập</li>
									</li>
									<li class="account--item">Tôi đồng ý với <a href="" class="account--link"> Bảo
											mật</a>
										và <a href="" class="account--link">Điều khoản hoạt động</a> của JK GYM</li>
								</ul>
							</div>
						</form>
					</div>


				</div>
			</div>
		</div>

		<script>
		const formSignUp = document.querySelector('.js-sign-up')
		const SignUpActive = document.querySelector('.sign__up-active')
		const SignInActive = document.querySelector('.sign__in-active')
		const formSignIn = document.querySelector('.js-sign-in')

		function showFormsignup() {
			SignInActive.classList.add('sign__in-active-disable')
			SignUpActive.classList.remove('sign__up-active-disable')
		}

		function showFormsignin() {
			SignInActive.classList.remove('sign__in-active-disable')
			SignUpActive.classList.add('sign__up-active-disable')
		}
		formSignUp.addEventListener('click', showFormsignup)
		formSignIn.addEventListener('click', showFormsignin)
		</script>

		<script>
		const notice = document.querySelectorAll('.sign-up-success')
		const modal = document.querySelector('.js-modal')
		const modalClose = document.querySelector('.js-modal-close')
		const modalSignUpSuccess = document.querySelector('.js-sign-up-success')

		function hideNotice() {
			modal.classList.add('close')
		}

		modalClose.addEventListener('click', hideNotice)
		modal.addEventListener('click', hideNotice);
		modalSignUpSuccess.addEventListener('click', function(event) {
			event.stopPropagation()
		})
		</script>

	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>