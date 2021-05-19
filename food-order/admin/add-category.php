<?php include('partials/menu.php'); ?>


<div class="main-content">
            <div class="wrapper">
                <h1>Thêm danh mục</h1>
                <br/>
                <?php
                   if(isset($_SESSION['upload']))
                   {
                       echo $_SESSION['upload'];
                       unset($_SESSION['upload']);// tắt thông báo session
                   }
                ?>
                <!-- Add Category Starts -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">
                        <tr>
                            <td>Tiêu đề: </td>
                            <td><input type="text" name="tieude" placeholder="Nhập tiêu đề cho danh mục" ></td>
                        </tr>
                        <tr>
                            <td>Chọn ảnh: </td>
                            <td>
                                <input type="file" name="image">
                            </td>
                        </tr>
                        <tr>
                            <td>Nổi bật: </td>
                            <td>
                                <input type="radio" name="noibat" value="Yes">Yes
                                <input type="radio" name="noibat" value="No">No
                            </td>
                        </tr>
                        <tr>
                            <td>Hoạt động: </td>
                            <td>
                                <input type="radio" name="hoatdong" value="Yes">Yes
                                <input type="radio" name="hoatdong" value="No">No
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Thêm danh mục" class="btn-add"> 
                            </td>
                        </tr>
                    </table>
                </form>
                <!-- Add Category Ends -->
                <?php
                if(isset($_POST['submit']))
                {
                    $tieude = $_POST['tieude'];
                    if(isset($_POST['noibat']))
                    {
                        $noibat = $_POST['noibat'];
                    }
                    else
                    {
                        $noibat = "No";
                    }
                    if(isset($_POST['hoatdong']))
                    {
                        $hoatdong = $_POST['hoatdong'];
                    }
                    else
                    {
                        $hoatdong = "No";
                    }
                    // print_r($_FILES['image']);
                    // die();
                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];

                        if($image_name != "")
                        {
                            //đổi tên ảnh
                        $ext =  end(explode('.', $image_name));
                        $image_name = "Food_Category_".rand(000, 999).'.'.$ext;//Food_Category_8334.jpg

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name ;

                        $upload = move_uploaded_file($source_path, $destination_path);
  
                        if($upload == FALSE)
                        {
                            $_SESSION['upload'] = "<div class='loi'>Upload ảnh thất bại !!!</div>";
                            header("location:".SITEURL.'admin/add-category.php');
                            die();
                        }
                        }
                    }
                    else
                    {
                        $image_name = "";
                    }
                   $sql = "INSERT INTO tbl_category SET
                    tieude='$tieude',
                    image_name='$image_name',
                    noibat='$noibat',
                    hoatdong='$hoatdong'
                    ";
                    $res = mysqli_query($conn, $sql) or die(mysqli_error());
                    if($res==TRUE)
                    {
                        $_SESSION['add'] = "<div class='thanhcong'>Thêm danh mục thành công.</div>";
                        header('location:'.SITEURL.'admin/manage-category.php');
                    } 
                    else
                    {
                        $_SESSION['add'] = "<div class='loi'>Thêm danh mục thất bại, vui lòng thử lại !!!</div>";
                        header('location:'.SITEURL.'admin/add-category.php');
                    }
                }
                ?>
            </div>
</div>


<?php include('partials/footer.php'); ?>