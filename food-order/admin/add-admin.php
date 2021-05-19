<?php include('partials/menu.php'); ?>

<div class="main-content">
            <div class="wrapper">
                <h1>Thêm tài khoản admin</h1>
                <br/>
                <?php
                   if(isset($_SESSION['add']))
                   {
                       echo $_SESSION['add'];
                       unset($_SESSION['add']);// tắt thông báo session
                   }
                ?>
                <form action="" method="POST">
                    <table class="tbl-30">
                        <tr>
                            <td>Họ tên: </td>
                            <td><input type="text" name="hoten" placeholder="Nhập họ tên của bạn" ></td>
                        </tr>
                        <tr>
                            <td>Tài khoản: </td>
                            <td><input type="text" name="taikhoan" placeholder="Nhập tài khoản của bạn" ></td>
                        </tr>
                        <tr>
                            <td>Mật khẩu: </td>
                            <td><input type="password" name="matkhau" placeholder="Nhập mật khẩu của bạn" ></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Admin" class="btn-add"> 
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
<?php include('partials/footer.php'); ?>

<?php
    if(isset($_POST['submit']))
    {
        // 1. Get data
        $hoten = $_POST['hoten'];
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);// mã hóa password
        // 2. SQL query
        $sql = "INSERT INTO tbl_admin SET
            hoten='$hoten',
            taikhoan='$taikhoan',
            matkhau='$matkhau'
        ";
        // 3. Excute query
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        // 4. Check
        if($res==TRUE)
        {
            //Create a session
            $_SESSION['add'] = "<div class='thanhcong'>Thêm Admin thành công.</div>";
            //Redirect page manage admin
            header('location:'.SITEURL.'admin/manage-admin.php');
        } 
        else
        {
            //Create a session
            $_SESSION['add'] = "<div class='loi'>Thêm Admin thất bại, vui lòng thử lại !!!</div>";
            //Redirect page add admin
            header('location:'.SITEURL.'admin/add-admin.php');
        }
    }
?>