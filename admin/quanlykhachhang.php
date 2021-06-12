<?php
include('../db/connect.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  	<form method="post">
    	<h6 class="m-0 font-weight-bold text-primary">Khách hàng <input style="width: 250px; height: 40px; border-radius: 20px; border: #ccc;padding-left: 20px;" type="text" placeholder="Search..." name="searchdata"><button style="width: 42px; height: 40px; border-radius: 20px; border: #ccc;" type="text" placeholder="Search..." name="search"><i class="fas fa-search"></i></button> </h6>
	</form>
  </div>
	<?php
		if(isset($_POST['search'])){
			$data = $_POST['searchdata'];
		}
	?>
  <div class="card-body">

    <div class="table-responsive">
        <?php
				$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang,tbl_giaodich WHERE tbl_khachhang.khachhang_id=tbl_giaodich.khachhang_id and tbl_khachhang.name like '%$data%' GROUP BY tbl_giaodich.magiaodich ORDER BY tbl_khachhang.khachhang_id DESC"); 
		?> 

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Thứ tự</th>
			<th>ID khách hàng</th>
			<th>Tên khách hàng</th>
			<th>Số điện thoại</th>
			<th>Địa chỉ</th>
			<th>Email</th>
			<th>Ngày mua</th>
			<th>Quản lý</th>
          </tr>
          </thead>
          <tbody>
          <?php
					$i = 0;
					while($row_khachhang = mysqli_fetch_array($sql_select_khachhang)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_khachhang['khachhang_id']; ?></td>
						<td><?php echo $row_khachhang['name']; ?></td>
						<td><?php echo $row_khachhang['phone']; ?></td>
						<td><?php echo $row_khachhang['address']; ?></td>
						<td><?php echo $row_khachhang['email'] ?></td>
						<td><?php echo $row_khachhang['ngaythang'] ?></td>
						<td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['magiaodich'] ?>">Xem giao dịch</a></td>
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
    <h6 class="m-0 font-weight-bold text-primary">Liệt kê lịch sử đơn hàng</h6>
                </div>
    <?php
				if(isset($_GET['khachhang'])){
					$magiaodich = $_GET['khachhang'];
				}else{
					$magiaodich = '';
				}
				$sql_select = mysqli_query($con,"SELECT * FROM tbl_giaodich,tbl_khachhang,tbl_sanpham WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_khachhang.khachhang_id=tbl_giaodich.khachhang_id AND tbl_giaodich.magiaodich='$magiaodich' ORDER BY tbl_giaodich.giaodich_id DESC"); 
				?> 
				<table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
					<tr>
						<th>Thứ tự</th>
						<th>Mã giao dịch</th>
						<th>Tên sản phẩm</th>
						<th>Ngày đặt</th>
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
						
						<td><?php echo $row_donhang['magiaodich']; ?></td>
					
						<td><?php echo $row_donhang['sanpham_name']; ?></td>
						
						<td><?php echo $row_donhang['ngaythang'] ?></td>
					
					
					</tr>
					 <?php
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