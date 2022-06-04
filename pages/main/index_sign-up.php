<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- <link rel="stylesheet" href="./css/main.css"> -->
	<link rel="stylesheet" href="../../css/base.css">
	<link rel="stylesheet" href="../../css/grid.css">
	<link rel="stylesheet" href="../../css/sign__in.css">
	<link rel="stylesheet" href="../../admincp/css/main_header.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
	<?php 
	include('../../admincp/modules/header.php')
?>


	<div class="app__sign-in">

		<div class="sign__banner">
			<div class="sign__banner-text">
				<span class="sign__banner-heading">Đăng ký thành viên Luxstay - Tích điểm thưởng và nhận ưu đãi</span>
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
								Lux Credit để du lịch nhiều hơn nữa.</span>
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
							<span class="benefits--desc">Nhận thông báo ưu đãi từ Luxstay khi có kế hoạch du lịch để lựa
								chọn và đặt ngay cho mình một chỗ ở phù hợp, tiện nghi với giá tốt nhất.</span>
						</div>
					</div>

					<div class="col l-4 sign__up-active ">
						<div class="account ">
							<span class="account--heading">Đăng ký thành viên</span>

							<span class="sign-up__account-heading">Họ và tên</span>
							<div class="account--form account--form__sign-up">
								<input type="text" class="account--password" placeholder="Họ và tên">
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
								<input type="text" class="account--phone-number" placeholder="Số điện thoại">
							</div>

							<span class="sign-up__account-heading">Địa chỉ email</span>
							<div class="account--form account--form__sign-up">
								<input type="email" class="account--email" placeholder="Địa chỉ email">
								<i class="far fa-envelope account--form--email-icon"></i>
							</div>

							<span class="sign-up__account-heading">Mật khẩu</span>
							<div class="account--form account--form__sign-up">
								<input type="password" class="account--password" placeholder="Mật khẩu">
								<i class="fas fa-lock account--form--password-icon"></i>
							</div>

							<span class="sign-up__account-heading">Xác nhận mật khẩu</span>
							<div class="account--form account--form__sign-up">
								<input type="password" class="account--password" placeholder="Xác nhận mật khẩu">
								<i class="fas fa-lock account--form--password-icon"></i>
							</div>

							<button class="account--btn">Đăng ký</button>
							<ul class="account--lists">
								<li class="account--item">Bạn đã có tài khoản Luxstay?
								<li class="account--link js-sign-in">Đăng nhập</li>
								</li>
								<li class="account--item">Tôi đồng ý với <a href="" class="account--link"> Bảo mật</a>
									và <a href="" class="account--link">Điều khoản hoạt động</a> của Luxstay</li>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</div>

</body>

</html>