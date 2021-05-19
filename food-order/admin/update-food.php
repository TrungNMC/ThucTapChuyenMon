<?php include('partials/menu.php'); ?>
<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql2 = "SELECT * FROM tbl_food WHERE id = $id";
        $res2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($res2);
        $tieude = $row2['tieude'];
        $mieuta = $row2['mieuta'];
        $gia = $row2['gia'];
        $image_hientai = $row2['image_name'];
        $category_hientai = $row2['category_id'];
        $noibat = $row2['noibat'];
        $hoatdong = $row2['hoatdong'];
    }
    else 
    {
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Cập nhật món</h1>
        <br/>
        <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-30">
        <tr>
            <td>Tiêu đề: </td>
            <td>
                <input type="text" name="tieude" value="<?php echo $tieude; ?>">
            </td>
        </tr>
        <tr>
            <td>Miêu tả: </td>
            <td>
                <textarea name="mieuta" cols="30" rows="5"><?php echo $mieuta; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Giá: </td>
            <td>
                <input type="number" name="gia" value="<?php echo $gia; ?>">
            </td>
        </tr>
        <tr>
            <td>Ảnh hiện tại: </td>
                <td>
                <?php
                    if($image_hientai == "")
                    {
                        echo "<div class='loi'>Chưa thêm ảnh !!!</div>";
                    }
                    else
                    {
                    ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_hientai;?>" width="100px ">
                    <?php
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
            <td>Danh mục: </td>
            <td>
                <select name="category">          
                    <?php
                        $sql = "SELECT * FROM tbl_category WHERE hoatdong='Yes'";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $category_tieude = $row['tieude'];
                                $category_id = $row['id'];

                                ?>
                                    <option  <?php if($category_hientai==$category_id){echo "selected";} ?> value="<?php echo $category_id; ?>"><?php echo $category_tieude; ?></option>
                                <?php
                            }
                        }
                        else
                        {
                            echo "<option value='0'>Danh mục không tồn tại !!!</option>";
                        }
                    ?>
                    <option value="0">Test</option>
                </select>
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
            <td>    
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="image_hientai" value="<?php echo $image_hientai; ?>">
                <input type="submit" name="submit" value="Cập nhật" class="btn-add"> 
            </td>
        </tr>
        </table>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $id = $_POST['id'];  
                $tieude = $_POST['tieude']; 
                $mieuta = $_POST['mieuta'];
                $gia = $_POST['gia'];
                $image_hientai = $_POST['image_hientai'];   
                $category = $_POST['category'];
                $noibat = $_POST['noibat'];
                $hoatdong = $_POST['hoatdong'];
                if(isset($_FILES['image']['name']))
                {
                    $image_name = $_FILES['image']['name'];
                    if($image_name!= "")
                    {
                        $ext =  end(explode('.', $image_name));
                        $image_name = "Food_Name_".rand(000, 999).'.'.$ext;
                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/food/".$image_name ;

                        $upload = move_uploaded_file($source_path, $destination_path);
                        if($upload==FALSE)
                        {       
                            $_SESSION['upload'] = "<div class='loi'>Upload ảnh thất bại !!!</div>";
                            header('location:'.SITEURL.'admin/manage-food.php');
                            die();
                        }
                        if($image_hientai!="")
                                {
                                    $remove_path = "../images/food/".$image_hientai;
                                        $remove = unlink($remove_path);
                                        if($remove==FALSE)
                                        {
                                        $_SESSION['remove-failed'] = "<div class='loi'>Update ảnh hiện tại thất bại, vui lòng kiểm tra lại !!!</div>";
                                        header('location:'.SITEURL.'admin/manage-food.php');
                                        die();
                                    }
                                }
                            } 
                }
                else
                {
                    $image_name = $image_hientai;
                }
                $sql3 = "UPDATE tbl_food SET
                    tieude ='$tieude',
                    mieuta = '$mieuta',
                    gia = $gia,
                    image_name = '$image_name',
                    category_id = '$category',
                    noibat = '$noibat',
                    hoatdong = '$hoatdong'
                    WHERE id = $id 
                "; 
                $res3 = mysqli_query($conn, $sql3);
                if($res3==TRUE)
                {
                    $_SESSION['update'] = "<div class='thanhcong'>Update món thành công.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    $_SESSION['update'] = "<div class='loi'>Update món thất bại, vui lòng thử lại !!!</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
            }
        ?>
        </div>
</div>
<?php include('partials/footer.php'); ?>