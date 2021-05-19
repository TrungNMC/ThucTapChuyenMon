<?php 
    include('../config/constants.php'); 
    include('login-check.php');
?>

<html>
    <head>
        <title>Food Order Website - Home Page</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <!-- Menu Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="manage-admin.php">Tài khoản</a></li>
                    <li><a href="manage-category.php">Danh mục</a></li>
                    <li><a href="manage-food.php">Thức ăn</a></li>
                    <li><a href="manage-order.php">Đặt hàng</a></li>
                    <li><a href="logout.php">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu End -->