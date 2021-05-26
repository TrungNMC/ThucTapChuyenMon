<?php
	session_start();
 include('../db/connect.php'); 
?>
<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['matkhau']);
		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
				$_SESSION['admin_id'] = $row_dangnhap['admin_id'];
				header('Location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<div class="container">
	<h2 style="text-align: center;">Đăng nhập Admin</h2>
		<form action="" method="POST" class="login-email">
		<label>Tài khoản</label>
		<div class="input-group">
		<input type="text" name="taikhoan" placeholder="Nhập tài khoản email của bạn"><br>
		</div>
		<label>Mật khẩu</label>
		<div class="input-group">
		<input type="password" name="matkhau" placeholder="Nhập mật khẩu của bạn"><br>
		</div>
		<div class="input-group">
		<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
		</div>
		<p style="text-align: center;">Tạo bởi - <a href="https://www.facebook.com/nguyenmaichitrung2000/">Nguyễn Mai Chí Trung</a></p>
		</form>
	</div>
</body>
</html>