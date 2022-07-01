<div class="sign__banner">
	<div class="modal">
	</div>
	<div class="sign__banner-text">
		<span class="sign__banner-heading">Quản lý thành viên JK Gym </span>
		<span class="sign__banner-desc">Nhanh chóng, tiện lợi và an toàn.</span>
	</div>
</div>

<style>
.sign__banner {
	margin-top: 72px;
	height: 360px;
	width: 100%;
	background-image: url('../img/about_bg.png');
	background-size: cover;
	background-position: center;
	position: relative;
}

.modal {
	background: rgba(0, 0, 0, 1);
	content: "";
	height: 100%;
	left: 0;
	opacity: 0.7;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 0;
}

.sign__banner-text {
	position: absolute;
	top: 70px;
	left: 78px;
	display: flex;
	flex-direction: column;
	padding: 56px 0 56px 112px;
}

.sign__banner-heading {
	font-size: 7.2rem;
	text-transform: uppercase;
	color: #ee6c0c;
	font-weight: 700;
	padding-bottom: 24px;
	line-height: 100%;
}

.sign__banner-desc {
	font-size: 2.8rem;
	color: #fff;
	font-weight: 400;
}

.header-item_account {
	font-size: 1.4rem;
	padding: 0 16px;
}

.header-item_account:hover {
	cursor: pointer;
	color: #64b3f4;
}
</style>