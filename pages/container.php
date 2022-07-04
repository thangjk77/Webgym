<div class="container">
	<!-- <div class="grid wide"> -->
	<div id="dichvu" class="container-services">
		<header class="services-heading">
			Các dịch vụ của chúng tôi
		</header>
		<span class="services-description">
			Luyện tập tại JK GYM sẽ giúp bạn đạt được mục tiêu sức khỏe và thể hình.
		</span>
		<div class="row ">
			<div class="col l-3 m-6 c-12">
				<div class="services">
					<div class="services-item">
						<img src="./img/container.jpg" alt="" class="services-item-img">
						<div class="services-item-effect">
							<span class="effect-name">
								PERSONAL TRAINER
							</span>
						</div>
					</div>
					<span class="services-item-name">
						Personal Trainer
					</span>
					<span class="services-item-description">
						Hỗ trợ bạn đạt được mục tiêu sức khỏe và thể chất như mong muốn.
					</span>
				</div>
			</div>
			<div class="col l-3 m-6 c-12">
				<div class="services">
					<div class="services-item">
						<img src="./img/container-2.jpg" alt="" class="services-item-img">
						<div class="services-item-effect">
							<span class="effect-name">
								YOGA
							</span>
						</div>
					</div>
					<span class="services-item-name">
						Yoga
					</span>
					<span class="services-item-description">
						Hỗ trợ bạn đạt được mục tiêu sức khỏe và thể chất như mong muốn.
					</span>
				</div>
			</div>
			<div class="col l-3 m-6 c-12">
				<div class="services">
					<div class="services-item">
						<img src="./img/container-5.jpg" alt="" class="services-item-img">
						<div class="services-item-effect">
							<span class="effect-name">
								GROUP X
							</span>
						</div>
					</div>
					<span class="services-item-name">
						Group X
					</span>
					<span class="services-item-description">
						Hỗ trợ bạn đạt được mục tiêu sức khỏe và thể chất như mong muốn.
					</span>
				</div>
			</div>
			<div class="col l-3 m-6 c-12">
				<div class="services">
					<div class="services-item">
						<img src="./img/container-3.jpg" alt="" class="services-item-img">
						<div class="services-item-effect">
							<span class="effect-name">
								CLUB
							</span>
						</div>
					</div>
					<span class="services-item-name">
						Club
					</span>
					<span class="services-item-description">
						Hỗ trợ bạn đạt được mục tiêu sức khỏe và thể chất như mong muốn.
					</span>
				</div>
			</div>
		</div>
	</div>

	<div id="nguoidung" class="container-user">
		<div class="user-functions">
			<header class="services-heading services-heading-color ">
				Kiểm tra hội viên
			</header>
			<span class="services-description-user">
				Luyện tập tại JK GYM sẽ giúp bạn đạt được mục tiêu sức khỏe và thể hình.
			</span>
			<div class="row">
				<div class="col l-4 m-6 c-12">
					<div class="function-test function-container">
						<span class="function-test_heading">
							Kiểm tra thẻ hội viên
						</span>
						<span class="function-test_desc">
							Kiểm tra thẻ hội viên của bạn còn thời hạn hay không tại đây nhé !
						</span>
						<a href="../../web-gymPHP/admincp/modules/quanlynguoidung/User_check.php"
							class="function-test_check bmi-result">Kiểm tra</a>

					</div>
				</div>

				<div class="col l-4 m-6 c-12">
					<div class="function-tracking function-container">
						<span class="function-tracking_heading">
							Theo dõi lộ trình tập
						</span>
						<span class="function-tracking_desc">
							Kiểm tra xem bạn đã tập được bao nhiêu ngày rồi nhé !
						</span>
						<form class="tracking" action="" autocomplete="off" method="POST">
							<div class="function-tracking-input">
								<!-- <span class="function-tracking-input_tag">Nhập id :</span> -->
								<span><input type="text" placeholder="Nhập ID" name="tukhoa">
								</span>
							</div>

							<input type="submit" class="function-tracking_check bmi-result" name="timkiem"
								value="Kiểm tra">

							<?php 
									include('./admincp/config/config.php');
									if (isset($_POST['timkiem'])){
										$timnguoidung = $_POST['tukhoa'];	
									} else {
										// echo 'id không tồn tại';
										$timnguoidung = '';
									}	
										$sql_pro = "SELECT * FROM host_quanlynguoidung WHERE id='".$timnguoidung."' LIMIT 1";
										$query_pro = mysqli_query($mysqli,$sql_pro);
								?>

						</form>
						<?php
									while ($row = mysqli_fetch_array($query_pro)) { 
								?>
						<span class="function-tracking-result"> Chào <?php echo $row['Ten'] ?> , bạn đã tập
							được tổng cộng
							<?php echo $row['Songaytap'] ?> ngày
						</span>

						<?php	
							} ?>
					</div>
				</div>

				<div class="col l-4 m-6 c-12">
					<div class="function-bmi function-container">
						<span class="function-bmi_heading">
							Kiểm tra chỉ số bmi
						</span>
						<span class="function-bmi_desc">
							Kiểm tra chỉ số khối cơ thể (BMI) tại đây nhé !
						</span>
						<div class="bmi">
							<div class="bmi-detail">
								<!-- <span class="bmi-name">Nhập chiều cao (cm): </span> -->
								<span><input placeholder="Nhập chiều cao (cm)" autocomplete="off" type="text"
										id="height"></span>
								<br><span id="height_error" style="color:red; font-size: 1.3rem"></span>
							</div>

							<div class="bmi-detail">
								<!-- <span class="bmi-name">Nhập cân nặng (kg): </span> -->
								<span><input placeholder="Nhập cân nặng (kg)" autocomplete="off" type=" text"
										id="weight"></span>
								<br><span id="weight_error" style="color:red; font-size: 1.3rem"></span>
							</div>

							<button class="bmi-result bmi-result-text" role="button" id="btn">Kết quả</button>
							<span class="bmi-output" id="output"></p>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="tintuc" class="container-news">
		<header class="services-heading">
			Tin tức mới nhất
		</header>
		<span class="services-description">
			Theo dõi các tin tức mới nhất của JK Gym
		</span>
		<div class="row">
			<div class="col l-4 m-6 c-12">
				<div class="news">
					<div class="news-img">
						<img src="./img/new.jpg" class="news-photo">
					</div>
					<div class="news-container">
						<span class="news-heading">
							Tập luyện
						</span>

						<span class="news-description">
							Các bài tập giảm mỡ bụng hiệu quả
						</span>
						<span class="news-detail">
							Những bài tập giảm mỡ bụng siêu nhanh là một phần không thể thiếu với những ai muốn giảm mỡ
							bụng.
						</span>
					</div>
				</div>
			</div>
			<div class="col l-4 m-6 c-12">
				<div class="news">
					<div class="news-img">
						<img src="./img/new2.jpg" class="news-photo">
					</div>
					<div class="news-container">
						<span class="news-heading">
							Ăn uống
						</span>

						<span class="news-description">
							Các chế độ ăn hợp lý
						</span>
						<span class="news-detail">
							Những chế độ ăn hợp lý là một phần không thể thiếu với những ai muốn giảm mỡ
							bụng.
						</span>
					</div>
				</div>
			</div>
			<div class="col l-4 m-6 c-12">
				<div class="news">
					<div class="news-img">
						<img src="./img/new4.jpg" class="news-photo">
					</div>
					<div class="news-container">
						<span class="news-heading">
							Khuyến mãi
						</span>

						<span class="news-description">
							Các chương trình khuyến mãi hấp dẫn.
						</span>
						<span class="news-detail">
							Các chương trình khuyến mãi hấp dẫn đang chờ đón các bạn, theo dõi và đăng ký ngay bạn nhé !
						</span>
					</div>
				</div>
			</div>


		</div>


	</div>
	<!-- </div> -->
</div>