<?php
    include('../config/constants.php');
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        if($image_name != "")
        {
            $path = "../images/food/".$image_name;

            $remove = unlink($path);

            if($remove == FALSE)
            {
                $_SESSION['upload'] = "<div class='loi'>Xóa ảnh thất bại !!!</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
                die();
            }
        }
        $sql = "DELETE FROM tbl_food WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        if($res==TRUE)
        {
            $_SESSION['delete'] = "<div class='thanhcong'>Xóa món thành công.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='loi'>Xóa món thất bại, vui lòng thử lại !!!</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
    }
    else
    {
        $_SESSION['unauthorize'] = "<div class='loi'>Truy cập trái phép !!!</div>";
        header('location:'.SITEURL.'admin/manage-food.php');
    }

?>