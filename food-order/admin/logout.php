<?php 
    include('../config/constants.php');
    session_destroy();//đăng xuất user
    header('location:'.SITEURL.'admin/login.php'); 
?>