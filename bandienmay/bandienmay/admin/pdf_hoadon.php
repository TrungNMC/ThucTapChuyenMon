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
    <button onclick="window.print();" class="btn btn-primary">Xuất PDF</button>
    <h1 class="text-center">Bảng hóa đơn</h1>
	</div>
    <br/>
<div class="row">
    <div class="col-md-12"></div>
    <?php
            $sql_hoadon = mysqli_query($con,"SELECT *, SUM(soluong * sanpham_giakhuyenmai) as 'tongtien' FROM tbl_sanpham,tbl_khachhang,tbl_giaodich WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_giaodich.khachhang_id=tbl_khachhang.khachhang_id GROUP BY magiaodich"); 
    ?> 

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Thứ tự</th>
        <th>Mã hóa đơn</th>
        <th>Tên khách hàng</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Tổng hóa đơn</th>
        <th>Thời gian</th>
      </tr>
      </thead>
      <tbody>
      <?php
                $i = 0;
                while($row_hoadon = mysqli_fetch_array($sql_hoadon)){ 
                    $i++;
                ?> 
                <tr>	
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row_hoadon['magiaodich']; ?></td>
                    <td><?php echo $row_hoadon['name']; ?></td>
                    <td><?php echo $row_hoadon['phone']; ?></td>
                    <td><?php echo $row_hoadon['address']; ?></td>
                    <td><?php echo number_format($row_hoadon['tongtien']).'vnđ'; ?></td>
                    <td><?php echo $row_hoadon['ngaythang'] ?></td>
                </tr>
                 <?php
                } 
                ?> 
    </tbody>
  </table>

</div>
</div>
</div>
<?php
include('includes/scripts.php');
?>
</body>
</html>
	