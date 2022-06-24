<div class="header ">
	<div class="grid-header wide">
		<div class="header-narbar">
			<div class="header-narbar-lists">
				<img src="./img/icons8-dumbbell-50.png" class="header-narbar__img">
				<span class="header-narbar__logo">
					<a href="index.php?quanly=trangchu&id=1">
						<span class="JK">JK</span>
						<span class="GYM">GYM</span>
					</a>
				</span>
			</div>
			<div class="header-narbar-lists">
				<ul class="header-narbar__services">
					<li class="header-narbar__services-item">
						<a href="#dichvu">Dịch vụ</a>
					</li>
					<!-- <li class="header-narbar__services-item">
						<a href="index.php?quanly=lichhoc&id=4">Lịch học</a>
					</li> -->
					<li class="header-narbar__services-item">
						<a href="#tintuc">Tin tức</a>
					</li>
					<li class="header-narbar__services-item">
						<a href="#nguoidung">Kiểm tra hội viên</a>
					</li>
					<li class="header-narbar__services-item">
						<a href="../../web-gymPHP/admincp/index.php?action=quanlynguoidung&query=them">Quản lý</a>
					</li>
					<li class="header-narbar__services-item">
						<a href="index.php?quanly=taikhoan&id=7">Tài khoản</a>
					</li>


				</ul>
			</div>
		</div>
	</div>
</div>

<script>
let header = document.querySelector('.header');
console.log(document.documentElement.scrollTop)

function handleOnScroll() {
	if (document.documentElement.scrollTop > 72) {
		header.classList.add('header-color');
	} else {
		header.classList.remove('header-color');
	}
}
window.onscroll = () => handleOnScroll();
</script>