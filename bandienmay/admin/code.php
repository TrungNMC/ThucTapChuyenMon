<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "bandienmay");    
if(isset($_POST['registerbtn']))
{
    $admin_name = $_POST['admin_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['confirmpassword']);


        if($password === $cpassword)
        {
            $query = "INSERT INTO tbl_admin (admin_name,email,password) VALUES ('$admin_name','$email','$password')";
            $query_run = mysqli_query($con, $query);
            
            if($query_run)
            {
                $_SESSION['success'] = "Thêm admin thành công.";
                header('Location: register.php'); 
            }
            else 
            {
                $_SESSION['status'] = "Thêm admin thất bại !!!";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['warning'] = "Mật khẩu và xác nhận mật khẩu không khớp !";
            header('Location: register.php');  
        }
}

if(isset($_POST['updatebtn']))
{
    $admin_id = $_POST['edit_admin_id'];
    $admin_name = $_POST['edit_admin_name'];
    $email = $_POST['edit_email'];
    $password = md5($_POST['edit_password']);

    $query = "UPDATE tbl_admin SET admin_name='$admin_name', email='$email', password='$password' WHERE admin_id='$admin_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Cập nhật thành công.";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Cập nhật thất bại !!!";
        header('Location: register.php'); 
    }
}


if(isset($_POST['delete_btn']))
{
    $admin_id = $_POST['delete_id'];

    $query = "DELETE FROM tbl_admin WHERE admin_id='$admin_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Xóa thành công.";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Xóa thất bại";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}

?>