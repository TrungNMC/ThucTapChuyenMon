<?php
session_start();
include_once('../db/connect.php');
$khachhang_id = $_SESSION['khachhang_id'];
	$sql = mysqli_query($con,"update tbl_donhang set phuongthucthanhtoan='online' where khachhang_id='$khachhang_id' and phuongthucthanhtoan is null");
    if($sql){
        echo "<script>alert('Thành công !')</script>";	
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">

</head>
<body>
<main id="cart-main">

    <div class="site-title text-center">
    <div><a href="http://localhost:8080/bandienmay/index.php"><i class="fas fa-undo"></i></a></div>
        <div><img src="./assets/checked.png" alt=""></div>
        <h1 class="font-title">Payment Done Successfully...!</h1>
    </div>
    

</main>

</body>
</html>
