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
    <title>Bảng đơn hàng</title>
</head>
<body>
    
<div class="container">
    <br/>
<div class="text-center">
<div><a href="http://localhost:8080/bandienmay/admin/quanlydonhang.php"><i class="fas fa-undo"></i></a></div>
    <button onclick="window.print();" class="btn btn-primary">Xuất PDF</button>
    <h1 class="text-center">Bảng đơn hàng</h1>
	</div>
    <br/>
<div class="row">
    <div class="col-md-12"></div>
    <?php
           $sql_select = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_khachhang,tbl_donhang,tbl_ctdh WHERE tbl_ctdh.sanpham_id=tbl_sanpham.sanpham_id AND tbl_donhang.khachhang_id=tbl_khachhang.khachhang_id AND tbl_ctdh.madonhang = tbl_donhang.mahang GROUP BY tbl_donhang.mahang ");  
    ?> 

  <table class="table table-bordered">
    <thead>
      <tr>
            <th>Thứ tự</th>
						<th>Mã đơn hàng</th>
						<th>Tình trạng đơn hàng</th>
						<th>Tên khách hàng</th>
						<th>Ngày đặt</th>
						<th>Ghi chú</th>
						<th>Hủy đơn</th>
      </tr>
      </thead>
      <tbody>
      <?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['mahang']; ?></td>
						<td><?php
							if($row_donhang['tinhtrang']==0){
								echo 'Chưa xử lý';
							}else{
								echo 'Đã xử lý';
							}
						?></td>
						<td><?php echo $row_donhang['name']; ?></td>
						
						<td><?php echo $row_donhang['ngaythang'] ?></td>
						<td><?php echo $row_donhang['note'] ?></td>
						<td><?php if($row_donhang['huydon']==0){ }elseif($row_donhang['huydon']==1){
							echo '<a href="quanlydonhang.php?quanly=xemdonhang&mahang='.$row_donhang['mahang'].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
						}else{
							echo 'Đã hủy';
						} 
						?></td>
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
	