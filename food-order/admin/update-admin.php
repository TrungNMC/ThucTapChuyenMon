<?php include('partials/menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>Cập nhật tài khoản</h1>
            <br/>
            <?php 
                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_admin WHERE id=$id";
            
                $res = mysqli_query($conn, $sql);

                if($res==TRUE)
                {
                    $count = mysqli_num_rows($res);
                    if($count == 1)
                    {
                        $row = mysqli_fetch_assoc($res);
                        $hoten = $row['hoten'];
                        $taikhoan = $row['taikhoan'];
                    }
                    else
                    {
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
            ?>
            <form action="" method="POST">
                    <table class="tbl-30">
                        <tr>
                            <td>Họ tên: </td>
                            <td><input type="text" name="hoten" value="<?php echo $hoten; ?>" ></td>
                        </tr>
                        <tr>
                            <td>Tài khoản: </td>
                            <td><input type="text" name="taikhoan" value="<?php echo $taikhoan; ?>" ></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="submit" value="Update Admin" class="btn-add"> 
                            </td>
                        </tr> 
                    </table>
                </form>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $id = $_POST['id']; 
                        $hoten = $_POST['hoten'];
                        $taikhoan = $_POST['taikhoan'];

                        //update query
                        $sql = "UPDATE tbl_admin SET
                        hoten = '$hoten',
                        taikhoan = '$taikhoan'
                        WHERE id = '$id'
                        ";

                        $res = mysqli_query($conn, $sql);
                        if($res==TRUE)
                        {
                            $_SESSION['update'] = "<div class='thanhcong'>Update thành công.</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                        else
                        {
                            $_SESSION['update'] = "<div class='loi'>Update thất bại, vui lòng thử lại !!!</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                    }
                ?>
        </div>
</div>



<?php include('partials/footer.php'); ?>