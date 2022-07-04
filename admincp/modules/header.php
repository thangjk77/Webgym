<div class="header">
	<div class="grid-header wide">
		<div class="header-narbar">
			<div class="header-narbar-lists">
				<img src="../img/icons8-dumbbell-50.png" class="header-narbar__img">
				<span class="header-narbar__logo">
					<a href="../../../web-gymPHP/index.php?quanly=trangchu&id=1">
						<span class="JK">JK</span>
						<span class="GYM header-color-white">GYM</span>
					</a>
				</span>
			</div>
			<div class="header-narbar-lists">
				<ul class="header-narbar__services">
					<li class="header-narbar__services-item">
						<a class="header-color-black"
							href="../../../web-gymPHP/index.php?quanly=trangchu&id=1#dichvu">Dịch vụ</a>
					</li>
					<li class="header-narbar__services-item">
						<a class="header-color-black"
							href="../../../web-gymPHP/index.php?quanly=trangchu&id=1#nguoidung">Kiểm tra hội viên</a>
					</li>
					<li class="header-narbar__services-item">
						<a class="header-color-black"
							href="../../../web-gymPHP/index.php?quanly=trangchu&id=4#tintuc">Tin Tức</a>
					</li>
					<li class="header-narbar__services-item">
						<a class="header-color-black"
							href="../../../web-gymPHP/admincp/index.php?action=quanlynguoidung&query=them">Quản lý</a>
					</li>
					<li class="header-narbar__services-item">
						<a class="header-color-black" href="../../../web-gymPHP/index.php?quanly=taikhoan&id=7">Tài
							khoản</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script>
let header = document.querySelector('.header');
let logoText = document.querySelector('.GYM');
let headerTexts = document.querySelectorAll('.header-narbar__services-item a')

function handleOnScroll() {
	if (document.documentElement.scrollTop > 72) {
		header.classList.add('header-color');
		logoText.classList.remove('GYM');
		headerTexts.forEach((item) => {
			item.classList.add('header-color-white');
			item.classList.remove('header-color-black');
		})
	} else {
		header.classList.remove('header-color');
		logoText.classList.add('GYM');
		headerTexts.forEach((item) => {
			item.classList.remove('header-color-white');
			item.classList.add('header-color-black');
		})
	}
}
window.onscroll = () => handleOnScroll();
</script>