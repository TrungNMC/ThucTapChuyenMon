<?php
error_reporting(0); include('partials/menu.php'); ?>

<div class="main-content">
            <div class="wrapper">
                <h1>Thêm món ăn</h1>
                <br/>
                <?php
                   if(isset($_SESSION['upload']))
                   {
                       echo $_SESSION['upload'];
                       unset($_SESSION['upload']);// tắt thông báo session
                   }
                ?>
                <!-- Add Food Starts -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">
                        <tr>
                            <td>Tiêu đề: </td>
                            <td><input type="text" name="tieude" placeholder="Nhập tiêu đề cho món ăn" ></td>
                        </tr>
                        <tr>
                            <td>Miêu tả: </td>
                            <td>
                                <textarea name="mieuta" cols="30" rows="5" placeholder="Miêu tả món ăn"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá: </td>
                            <td>
                                <input type="number" name="gia">
                            </td>
                        </tr>
                        <tr>
                            <td>Chọn ảnh: </td>
                            <td>
                                <input type="file" name="image">
                            </td>
                        </tr>
                        <tr>
                            <td>Danh mục: </td>
                            <td>
                                <select name="category">
                                    <?php
                                        //hiển thị category từ database
                                        $sql = "SELECT * FROM tbl_category WHERE hoatdong='Yes'";

                                        $res = mysqli_query($conn, $sql);

                                        $count = mysqli_num_rows($res);

                                        if($count>0)
                                        {
                                            while($rows = mysqli_fetch_assoc($res))
                                            {
                                                $id=$rows['id'];
                                                $tieude=$rows['tieude'];
                                                ?>
                                                <option value="<?php echo $id; ?>"><?php echo $tieude; ?></option>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <option value="0">Không tìm thấy danh mục</option>
                                            <?php
                                        }
                                    ?>
                                </select>
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
                                <input type="submit" name="submit" value="Thêm món ăn" class="btn-add"> 
                            </td>
                        </tr>
                    </table>
                </form>
                <!-- Add Food Ends -->
                <?php
                if(isset($_POST['submit']))
                {
                    // 1. lấy dữ liệu từ from
                    $tieude = $_POST['tieude'];
                    $mieuta = $_POST['mieuta'];
                    $gia = $_POST['gia'];
                    $category = $_POST['category'];

                    //radio btn cho noi bat và hoatdong
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

                    // 2. tải ảnh nếu chọn
                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];

                        if($image_name != "")
                        {
                            //đổi tên ảnh
                        $ext =  end(explode('.', $image_name));
                        $image_name = "Food_Name_".rand(000, 999).'.'.$ext;//Food_Category_8334.jpg

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/food/".$image_name ;

                        $upload = move_uploaded_file($source_path, $destination_path);
  
                        if($upload == FALSE)
                        {
                            $_SESSION['upload'] = "<div class='loi'>Upload ảnh thất bại !!!</div>";
                            header('location:'.SITEURL.'admin/add-food.php');
                            die();
                        }
                        }
                    }
                    else
                    {
                        $image_name = "";
                    }
                    // 3. chèn dữ liệu vào database
                    $sql2  = "INSERT INTO tbl_food SET
                    tieude='$tieude',
                    mieuta='$mieuta',
                    gia='$gia', 
                    image_name='$image_name',
                    category_id=$category,
                    noibat='$noibat',
                    hoatdong='$hoatdong'
                    ";
                    //Excute sql
                    $res2 = mysqli_query($conn, $sql2);
                    // 4. Chuyển hướng trang đến manage-food    
                    // print_r($_FILES['image']);
                    // die(); 
                    if($res2==TRUE)
                    {
                        $_SESSION['add'] = "<div class='thanhcong'>Thêm món thành công.</div>";
                        echo "<script>alert('Them mon thanh cong !')</script>";
                        header('location:'.SITEURL.'admin/manage-food.php');
                    } 
                    else
                    {
                        $_SESSION['add'] = "<div class='loi'>Thêm món thất bại, vui lòng thử lại !!!</div>";
                        header('location:'.SITEURL.'admin/manage-food.php');
                    }
                }
                ?>
                
            </div>
</div>

<?php include('partials/footer.php'); ?>