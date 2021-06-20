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
        if(isset($_POST['edit_id']))
        {
            $admin_id = $_POST['edit_id'];
            $query = "SELECT * FROM tbl_admin WHERE admin_id='$admin_id'";
            $query_run = mysqli_query($con, $query);
            foreach ($query_run as $row) {
                ?>
                <form action="code.php" method="POST">
                    <input type="hidden" name="edit_admin_id"  value="<?php echo $row['admin_id']?>">
                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="edit_admin_name"  value="<?php echo $row['admin_name']?>" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="edit_email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="edit_password" value="<?php echo $row['password']?>" class="form-control"placeholder="Enter Password">
                    </div>
                        <a href="register.php" class="btn btn-danger">Thoát</a>
                        <button type="submit" name="updatebtn"class="btn btn-primary">Cập nhật</button>
                </form>
                <?php
        }
    }
?>
    </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>