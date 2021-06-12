<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Edit thông tin admin</h6>
    </div>
    <div class="card-body">
        <?php
        $con = mysqli_connect("localhost", "root", "", "bandienmay");   
        if(isset($_POST['hoadon_id']))
        {
            $hoadon_id = $_POST['hoadon_id'];
            $query = "SELECT * FROM tbl_donhang WHERE mahang='$hoadon_id'";
            $query_run = mysqli_query($con, $query);
        }
?>
    </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>