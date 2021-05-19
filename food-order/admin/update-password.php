<?php include('partials/menu.php'); ?>
<div class="main-content">
        <div class="wrapper">
            <h1>Thay đổi tài khoản</h1>
            <br/>
            <?php
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
            ?>
            <form action="" method="POST">
                    <table class="tbl-30">
                        <tr>
                            <td>Mật khẩu hiện tại: </td>
                            <td>
                                <input type="password" name="matkhaucu" placeholder="Nhập mật khẩu hiện tại" >
                            </td>
                        </tr>
                        <tr>
                            <td>Mật khẩu mới: </td>
                            <td>
                                <input type="password" name="matkhaumoi" placeholder="Nhập mật khẩu mới" >
                            </td>
                        </tr>
                        <tr>
                            <td>Nhập lại: </td>
                            <td>
                                <input type="password" name="matkhaunhaplai" placeholder="Nhập lại mật khẩu mới" >
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="submit" value="Đổi mật khẩu" class="btn-update"> 
                            </td>
                        </tr> 
                    </table>
                </form> 
        </div>
</div>

<?php

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $matkhaucu = md5($_POST['matkhaucu']);
        $matkhaumoi = md5($_POST['matkhaumoi']);
        $matkhaunhaplai = md5($_POST['matkhaunhaplai']);

        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND matkhau='$matkhaucu'";
        $res = mysqli_query($conn, $sql);
        if($res==TRUE)
        {
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                if($matkhaumoi==$matkhaunhaplai)
                {
                    $sql2 = "UPDATE tbl_admin SET
                    matkhau = '$matkhaumoi'
                    WHERE id = '$id'
                    ";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2==TRUE)
                    {
                        $_SESSION['change-pass'] = "<div class='thanhcong'>Đổi mật khẩu thành công.</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    else
                    {
                        $_SESSION['change-pass'] = "<div class='loi'>Đổi mật khẩu thất bại, vui lòng thử lại !!!</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
                else
                {
                    $_SESSION['pass-not-found'] = "<div class='loi'>Nhập mật khẩu sai, vui lòng thử lại !!!</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        else
            {
                $_SESSION['user-not-found'] = "<div class='loi'>Không tìm thấy tài khoản, vui lòng thử lại !!!</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
    }

?>

<?php include('partials/footer.php'); ?>