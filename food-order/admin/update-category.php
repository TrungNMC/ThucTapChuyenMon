<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Cập nhật danh mục</h1>
        <br/>
        <?php 
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_category WHERE id=$id";
            
                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);
                if($count == 1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $tieude = $row['tieude'];
                    $image_hientai = $row['image_name'];
                    $noibat = $row['noibat'];
                    $hoatdong = $row['hoatdong'];
                }
                else
                {
                    $_SESSION['no-category-found'] = "<div class='loi'>Không tìm thấy danh mục, vui lòng kiểm tra lại !!!</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
            }
             
            else
            {
                header('location:'.SITEURL.'admin/manage-category.php');
            } 
            ?>
        <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">
                        <tr>
                            <td>Tiêu đề: </td>
                            <td><input type="text" name="tieude" value="<?php echo $tieude; ?>"></td>
                        </tr>
                        <tr>
                            <td>Ảnh hiện tại: </td>
                            <td>
                                <?php
                                    if($image_hientai != "")
                                    {
                                        ?>
                                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_hientai; ?>" width="100px">
                                        <?php
                                    }
                                    else
                                    {
                                        echo "<div class='loi'>Chưa thêm ảnh !!!</div>";
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Ảnh mới: </td>
                            <td>
                                <input type="file" name="image">
                            </td>
                        </tr>
                        <tr>
                            <td>Nổi bật: </td>
                            <td>
                                <input <?php if($noibat=="Yes"){echo "checked";} ?> type="radio" name="noibat" value="Yes">Yes
                                <input <?php if($noibat=="No"){echo "checked";} ?> type="radio" name="noibat" value="No">No
                            </td>
                        </tr>
                        <tr>
                            <td>Hoạt động: </td>
                            <td>
                                <input <?php if($hoatdong=="Yes"){echo "checked";} ?> type="radio" name="hoatdong" value="Yes">Yes
                                <input <?php if($hoatdong=="No"){echo "checked";} ?> type="radio" name="hoatdong" value="No">No
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="image_hientai" value="<?php echo $image_hientai; ?>">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="submit" value="Cập nhật danh mục" class="btn-add"> 
                            </td>
                        </tr>
                    </table>
                </form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $id = $_POST['id']; 
                        $tieude = $_POST['tieude']; 
                        $image_hientai = $_POST['image_hientai'];
                        $noibat = $_POST['noibat'];
                        $hoatdong = $_POST['hoatdong'];
                        //cập nhật ảnh mới
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
                                    header("location:".SITEURL.'admin/manage-category.php');
                                    die();
                                }
                                    if($image_hientai!="")
                                    {
                                        $remove_path = "../images/category/".$image_hientai;
                                        $remove = unlink($remove_path);
                                        if($remove==FALSE)
                                        {
                                        $_SESSION['failed-remove'] = "<div class='loi'>Update ảnh hiện tại thất bại, vui lòng kiểm tra lại !!!</div>";
                                        header('location:'.SITEURL.'admin/manage-category.php');
                                        die();
                                        }
                                    }
                            }
                            else
                            { 
                                $image_name = $image_hientai;
                            }
                            }
                            else
                            {
                                $image_name = $image_hientai;
                            }
                        //update query
                        $sql2 = "UPDATE tbl_category SET
                        tieude = '$tieude',
                        image_name = '$image_name',
                        noibat = '$noibat',
                        hoatdong = '$hoatdong'
                        WHERE id = '$id'
                        ";

                        $res2 = mysqli_query($conn, $sql2);
                        if($res2==TRUE)
                        {
                            $_SESSION['update'] = "<div class='thanhcong'>Update danh mục thành công.</div>";
                            header('location:'.SITEURL.'admin/manage-category.php');
                        }
                        else
                        {
                            $_SESSION['update'] = "<div class='loi'>Update danh mục thất bại, vui lòng thử lại !!!</div>";
                            header('location:'.SITEURL.'admin/manage-category.php');
                        }
                    }
                ?>
    </div>
</div>


<?php include('partials/footer.php'); ?>