<?php
include('../db/connect.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
	if(isset($_POST['themdanhmuc'])){
		$tendanhmuc = $_POST['danhmuc'];
		$sql_insert = mysqli_query($con,"INSERT INTO tbl_danhmuc_tin(tendanhmuc) values ('$tendanhmuc')");
	}elseif(isset($_POST['capnhatdanhmuc'])){
		$id_post = $_POST['id_danhmuc'];
		$tendanhmuc = $_POST['danhmuc'];
		$sql_update = mysqli_query($con,"UPDATE tbl_danhmuc_tin SET tendanhmuc='$tendanhmuc' WHERE danhmuctin_id='$id_post'");
		header('Location:xulydanhmucbaiviet.php');
	}
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($con,"DELETE FROM tbl_danhmuc_tin WHERE danhmuctin_id='$id'");
	}
?>

<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Bài viết</h4>
    <div class="card-body">
    <?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['id'];
				$sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin WHERE danhmuctin_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				?>
				<div class="col-md-4">
				<h4>Cập nhật danh mục</h4>
				<label>Tên danh mục</label>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['tendanhmuc'] ?>"><br>
					<input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['danhmuctin_id'] ?>">
					<input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-primary">
				</form>
				</div>
			<?php
			}else{
				?>
				<div class="col-md-4">
				<h4>Thêm danh mục bài viết</h4>
				<label>Tên danh mục bài viết</label>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục"><br>
					<input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-primary">
				</form>
				</div>
				<?php
			} 
			
				?>
  </div>



    <div class="table-responsive">
            <?php
				$sql_select = mysqli_query($con,"SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC"); 
		    ?>

      <table class="table table-bordered" width="100%" cellspacing="0">
      <h4>Liệt kê danh mục</h4>
        <thead>
			<tr>
				<th>Thứ tự</th>
				<th>Tên danh mục bài viết</th>
				<th>Quản lý</th>
			</tr>
        </thead>
        <tbody>
       				 <?php
					$i = 0;
					while($row_category = mysqli_fetch_array($sql_select)){ 
						$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_category['tendanhmuc'] ?></td>
						<td><a href="?xoa=<?php echo $row_category['danhmuctin_id'] ?>">Xóa</a> || <a href="?quanly=capnhat&id=<?php echo $row_category['danhmuctin_id'] ?>">Cập nhật</a></td>
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