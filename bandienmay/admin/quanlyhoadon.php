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
    	<h6 class="m-0 font-weight-bold text-primary">Hóa đơn <input style="width: 250px; height: 40px; border-radius: 20px; border: #ccc;padding-left: 20px;" type="text" placeholder="Search..." name="searchdata"><button style="width: 42px; height: 40px; border-radius: 20px; border: #ccc;" type="text" placeholder="Search..." name="search"><i class="fas fa-search"></i></button> </h6>
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
				$sql_hoadon = mysqli_query($con,"SELECT * FROM tbl_donhang, tbl_khachhang, tbl_sanpham WHERE tbl_sanpham.sanpham_id = tbl_donhang.sanpham_id AND tbl_khachhang.khachhang_id = tbl_donhang.khachhang_id AND tbl_khachhang.name like '%$data%' OR tbl_sanpham.sanpham_name like '%data%'"); 
		?> 

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Thứ tự</th>
			<th>Tên khách hàng</th>
			<th>Tên sản phẩm</th>
			<th>Số điện thoại</th>
			<th>Địa chỉ</th>
			<th>Email</th>
			<th>Gía sản phẩm</th>
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
						<td><?php echo $row_hoadon['name']; ?></td>
						<td><?php echo $row_hoadon['sanpham_name']; ?></td>
						<td><?php echo $row_hoadon['phone']; ?></td>
						<td><?php echo $row_hoadon['address']; ?></td>
						<td><?php echo $row_hoadon['email'] ?></td>
						<td><?php echo $row_hoadon['sanpham_giakhuyenmai'] ?></td>
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
include('includes/footer.php');
?>