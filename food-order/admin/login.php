<?php include('../config/constants.php'); ?>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Đăng nhập</h1>
        <br/>
        <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login-message']))
            {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
        ?>
        <br/>
        <!-- Form login starts -->
        <form action="" method="POST" class="text-center">
            Tài khoản: <br/>
            <input type="text" name="taikhoan" placeholder="Nhập tài khoản của bạn" ><br/><br/>
            Mật khẩu: <br/>
            <input type="password" name="matkhau" placeholder="Nhập mật khẩu của bạn" ><br/><br/>
            <input type="submit" name="submit" value="Đăng nhập" class="btn-add">
            <br/><br/>
        </form>
        <!-- Form login ends -->
        <p class="text-center">Tạo bởi - <a href="https://www.facebook.com/nguyenmaichitrung2000/">Nguyễn Mai Chí Trung</a></p>
    </div>
</body>
</html> 
<?php
    if(isset($_POST['submit']))
    {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);

        $sql = "SELECT * FROM tbl_admin WHERE taikhoan='$taikhoan' AND matkhau='$matkhau'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            $_SESSION['login'] = "<div class='thanhcong text-align'>Đăng nhập thành công.</div>";
            $_SESSION['user'] = $taikhoan;//tạo phiên
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            $_SESSION['login'] = "<div class='loi text-align'>Đăng nhập thất bại, vui lòng thử lại !!!</div>";
            header('location:'.SITEURL.'admin/login.php');
        }
    }
?>