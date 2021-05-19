<?php
    //quyền/kiểm soát truy cập
    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] = "<div class='loi text-center'>Vui lòng đăng nhập !!!</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
?>