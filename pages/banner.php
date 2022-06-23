<!-- <div class="banner">

	<div class="banner-background">
		<div class="row">
			<div class="col l-6">
				<div class="banner-text">
					<span class="banner-text-heading jkgym">
						JK GYM
					</span>
					<span class="banner-text-heading signature">
						SIGNATURE
					</span>
					<span class="banner-text-heading dq">
						ĐẶC QUYỀN
					</span>
					<span class="banner-text-heading vip">
						VIP LOUNGE
					</span>
					<span class="banner-text-heading desc">
						Dành riêng cho khách hàng Signature
					</span>
				</div>
			</div>
			<div class="col l-6">
				<div class="banner-image">
					<div class="banner-image-room banner-image-room__left">
						<img src="./img/room2.jpg" alt="" class="room-left">
					</div>
					<div class="banner-image-room banner-image-room__center">
						<img src="./img/room2.jpg" alt="" class="room-center">
					</div>
					<div class="banner-image-room banner-image-room__right">
						<img src="./img/room2.jpg" alt="" class="room-right">
					</div>
				</div>
			</div>
		</div>

	</div>
</div> -->
<div class="row">
	<!-- <div class="grid wide"> -->
	<!-- <div class="col l-12"> -->
	<div class="slideshow-container">

		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img class="banner-background" src="./img/banner.png" style="width:100%">
			<div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			<img class="banner-background" src="./img/banner2.png" style="width:100%">
			<div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img class="banner-background" src="./img/banner3.png" style="width:100%">
			<div class="text">Caption Three</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>

	</div>
	<br>

	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>
	<!-- </div> -->
	<!-- </div> -->
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");
	if (n > slides.length) {
		slideIndex = 1
	}
	if (n < 1) {
		slideIndex = slides.length
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";
}
</script>