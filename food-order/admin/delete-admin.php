<?php
    include('../config/constants.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        $_SESSION['delete'] = "<div class='thanhcong'>Xóa thành công.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='loi'>Xóa thất bại, vui lòng thử lại !!!</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
?>