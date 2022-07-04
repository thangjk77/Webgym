<?php 
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
		unset($_SESSION['dangnhap']);
		header('Location:../../../../../web-gymPHP/index.php?quanly=taikhoan&id=7');
	}
?>
<div class="manage">
	<ul class="manage-table">
		<button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?action=quanlynguoidung&query=them">Quản
					lý
					người
					dùng</a></li>
		</button>

		<button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?dangxuat=1">Đăng xuất : <?php 
				if(isset($_SESSION['dangnhap'])){
					echo $_SESSION['dangnhap'];
				}
			?>
				</a></li>
		</button>
	</ul>
</div>
</div>