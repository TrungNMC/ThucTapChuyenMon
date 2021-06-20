<?php
include('../db/connect.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php 
if(isset($_POST['capnhatdonhang'])){
	$xuly = $_POST['xuly'];
	$mahang = $_POST['mahang_xuly'];
	$sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET tinhtrang='$xuly' WHERE mahang='$mahang'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET tinhtrangdon='$xuly' WHERE magiaodich='$mahang'");
}
?>
<?php
	if(isset($_GET['xoadonhang'])){
		$mahang = $_GET['xoadonhang'];
		$sql_delete = mysqli_query($con,"DELETE FROM tbl_donhang WHERE mahang='$mahang'");
		header('Location:quanlydonhang.php');
	} 
	if(isset($_GET['xacnhanhuy'])&& isset($_GET['mahang'])){
		$huydon = $_GET['xacnhanhuy'];
		$magiaodich = $_GET['mahang'];
	}else{
		$huydon = '';
		$magiaodich = '';
	}
	$sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'");

?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<form method="post">
	<h6 class="m-0 font-weight-bold text-primary">Liệt kê đơn hàng <input style="width: 250px; height: 40px; border-radius: 20px; border: #ccc;padding-left: 20px;" type="text" placeholder="Search..." name="searchdata"><button style="width: 42px; height: 40px; border-radius: 20px; border: #ccc;" type="text" placeholder="Search..." name="search"><i class="fas fa-search"></i></button> </h6>
	</form>
	<br/>
	<div class="card-header py-3">
	<a href="excel_donhang.php" class="btn btn-success" target="_blank">Xuất Excel</a>
	<a href="pdf_donhang.php" class="btn btn-danger">Xuất PDF</a>
	</div>
  </div>
  <?php
		if(isset($_POST['search'])){
			$data = $_POST['searchdata'];
		}
	?>

  <div class="card-body">

    <div class="table-responsive">
            <?php
				$sql_select = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_khachhang,tbl_donhang,tbl_ctdh WHERE tbl_khachhang.name LIKE '%$data%' AND tbl_ctdh.sanpham_id=tbl_sanpham.sanpham_id AND tbl_donhang.khachhang_id=tbl_khachhang.khachhang_id AND tbl_ctdh.mahang = tbl_donhang.mahang GROUP BY tbl_donhang.mahang "); 
			?> 

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
							<th>Thứ tự</th>
							<th>Mã đơn hàng</th>
							<th>Tình trạng đơn hàng</th>
							<th>Tên khách hàng</th>
							<th>Ngày đặt</th>
							<th>Ghi chú</th>
							<th>Hủy đơn</th>
							<th>Quản lý</th>
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

						<td><a href="?xoadonhang=<?php echo $row_donhang['mahang'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem </a></td>
					</tr>
					 <?php
					} 
					?> 
        </tbody>
      </table>
    </div>

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Xem chi tiết đơn hàng</h6>
                </div>
                <?php
			if(isset($_GET['quanly'])=='xemdonhang'){
				$mahang = $_GET['mahang'];
				$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_ctdh,tbl_sanpham WHERE tbl_ctdh.sanpham_id=tbl_sanpham.sanpham_id AND tbl_ctdh.mahang='$mahang'");
				?>
                <form action="" method="POST">
				<table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
					<tr>
                        <th>Thứ tự</th>
						<th>Mã đơn hàng</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Tổng tiền</th>
					</tr>
                    </thead>
                    <tbody>
                    <?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_chitiet)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_donhang['mahang']; ?></td>
						
						<td><?php echo $row_donhang['sanpham_name']; ?></td>
						<td><?php echo $row_donhang['soluong']; ?></td>
						<td><?php echo number_format($row_donhang['sanpham_giakhuyenmai']).' vnđ'; ?></td>
						<td><?php echo number_format($row_donhang['soluong']*$row_donhang['sanpham_giakhuyenmai']).' vnđ'; ?></td>
						<input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang'] ?>">
					</tr>
					 <?php
					} 
					?> 
				</table>

				<select class="form-control" name="xuly">
					<option value="1">Đã xử lý | Giao hàng</option>
					<option value="0">Chưa xử lý</option>
				</select><br>
				<input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
			</form>
				</div>  
			<?php
			}else{
			} 
			
				?> 
                    </tbody>
				</table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>