<div class="slideshow-container">
	<div class="mySlides fade">
		<div class="numbertext">
			<div class="banner-text">
				<p>Chọn chúng tôi
					<br>Chọn sức khỏe
				</p>
			</div>
		</div>
		<img class="banner-background" src="./img/banner.png">

		<!-- <div class="text">Caption Text</div> -->
	</div>

	<div class="mySlides fade">
		<div class="numbertext">
			<div class="banner-text">
				<p>Muốn khỏe mạnh
					<br> Đừng bỏ cuộc
				</p>
			</div>
		</div>
		<img class="banner-background " src="./img/banner2.png">
		<!-- <div class="text">Caption Two</div> -->
	</div>

	<div class="mySlides fade ">
		<div class="numbertext">
			<div class="banner-text">
				<p>Không đau đớn
					<br>Không thành công
				</p>
			</div>
		</div>
		<img class="banner-background " src="./img/banner3.png">
		<!-- <div class="text">Caption Three</div> -->
	</div>

	<div class="banner-img">
		<img src="./img/bannerup.png" alt="" class="banner-img-mini">
	</div>


</div>
<br>

<div class="list-dot" style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
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
//+++++++++++++++++++++++++++++++++++++
let myIndex = 0;
carousel()

function carousel() {
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");

	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	myIndex++;
	if (myIndex > slides.length) {
		myIndex = 1;
	}
	dots[myIndex - 1].className += " active";
	slides[myIndex - 1].style.display = "block";
	setTimeout(carousel, 3000);
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