<?php 
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
		unset($_SESSION['dangnhap']);
		header('Location:../../../../../web-gymPHP/index.php?quanly=taikhoan&id=7');
	}
?>
<div class="manage">
	<!-- <div class="grid wide">
		<div class="row sm-gutter app__content">
			<div class="col l-2 m-0 c-0"> -->
	<ul class="manage-table">
		<button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?action=quanlynguoidung&query=them">Quản
					lý
					người
					dùng</a></li>
		</button>
		<!-- <button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?action=quanlydichvu&query=them">Quản lý dịch
					vụ</a>
			</li>
		</button>
		<button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?action=quanlybaiviet&query=them">Quản lý bài
					viết
				</a>
			</li>
		</button>
		<button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?action=quanlytaikhoanadmin&query=them">Quản lý
					tài
					khoản admin
				</a></li>
		</button> -->

		<button class="button-51" role="button">
			<li class="manage-table-item"><a href="index.php?dangxuat=1">Đăng xuất : <?php 
				if(isset($_SESSION['dangnhap'])){
					echo $_SESSION['dangnhap'];
				}
			?>
				</a></li>
		</button>

	</ul>

	<!-- </div>
		</div>
	</div> -->
</div>
</div>