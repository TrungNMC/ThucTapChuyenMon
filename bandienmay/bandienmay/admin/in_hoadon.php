<?php
include('../db/connect.php');
include('includes/header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Hóa đơn</title>
</head>
<body>
    
<div class="container">
    <br/>
<div class="text-center">
<div><a href="http://localhost:8080/bandienmay/admin/quanlyhoadon.php"><i class="fas fa-undo"></i></a></div>
    <button onclick="window.print();" class="btn btn-primary">In hóa đơn</button>
    <h1 class="text-center">Hóa đơn</h1>
	</div>
    <br/>

    <form method="post" class="well">
                        <div id="printablediv" class="table-responsive ps">
                            <center>
                                <table class="table" style="width:50%;">
                                    <label style="font-size:25px; ">Electronics Shop</label></br>
                                    <label style="font-size:20px; ">Official Receipt</label></br>
                                    <b>
                                        <thead>
                                        <tr>
                                        <th>
                                                <h5 >Thứ tự</h5>
                                                </th>
                                        <th>
                                                <h5 >Sản phẩm</h5>
                                                </th>
                                            <th>
                                                <h5 >Số lượng</h5>
                                                </th>
                                            <th>
                                                <h5 >Giá bán</h5>
                                                </th>
                                        </tr>
                                        </thead>
                                    </b>
                                    <tbody>
                                    <?php
                                    $mahang = $_GET['mahang'];
                                    $query = $con->query("SELECT * FROM tbl_giaodich, tbl_khachhang WHERE tbl_giaodich.khachhang_id = tbl_khachhang.khachhang_id AND magiaodich='$mahang'") or die (mysqli_error());
                                    $fetch = $query->fetch_array();

                                    echo "Tên khách hàng : ". $fetch['name']."<br/>";
                                    echo "Email : ". $fetch['email']."<br/>";
                                    echo "Địa chỉ : ". $fetch['address']."<br/>";
                                    echo "Ngày đặt hàng : ". $fetch['ngaythang']."<br/>";

                                    $query2 = $con->query("SELECT * FROM tbl_giaodich,tbl_sanpham WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_giaodich.magiaodich='$mahang'") or die (mysqli_error());
                                    $i = 0;
                                    while($row = $query2->fetch_array()){
                                        $i++;
                                      $pname = $row['sanpham_name'];
                                      $pprice = $row['sanpham_giakhuyenmai'];
                                      $oqty = $row['soluong'];
                                      echo "<tr>";
                                      echo "<td>".$i."</td>";
                                        echo "<td>".$pname."</td>";
                                        echo "<td>".$oqty."</td>";
                                        echo "<td>".number_format($pprice)." vnđ</td>";
                                      echo "</tr>";
                                    }
                                    
                                    $query3 = $con->query("SELECT *, SUM(soluong * sanpham_giakhuyenmai) as 'tongtien' FROM tbl_sanpham,tbl_khachhang,tbl_giaodich WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_giaodich.khachhang_id=tbl_khachhang.khachhang_id AND tbl_giaodich.magiaodich='$mahang' GROUP BY magiaodich") or die (mysqli_error());
                                    while($row1 = $query3->fetch_array()){
                                      $tong = $row1['tongtien'];
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <legend></legend>
                                <?php

                                ?>
                                <h4>Tổng hóa đơn: <?php echo number_format($tong); ?> vnđ</h4>
                            </center>
                            </div>
                         
                    </form>
<?php
include('includes/scripts.php');
?>
</body>
</html>
	