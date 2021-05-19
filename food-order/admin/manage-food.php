<?php include('partials/menu.php'); ?>
<div class="main-content">
            <div class="wrapper">
                <h1>Thêm món</h1>
                <br/><br/>
                <!-- Btn add -->
                <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-add">Thêm món</a>
                <br/><br/>
                <?php
                       if(isset($_SESSION['add']))
                       {
                           echo $_SESSION['add'];
                           unset($_SESSION['add']);// tắt thông báo session
                       }
                       if(isset($_SESSION['delete']))
                       {
                           echo $_SESSION['delete'];
                           unset($_SESSION['delete']);// tắt thông báo session
                       }
                       if(isset($_SESSION['upload']))
                       {
                           echo $_SESSION['upload'];
                           unset($_SESSION['upload']);// tắt thông báo session
                       }
                       if(isset($_SESSION['unauthorize']))
                       {
                           echo $_SESSION['unauthorize'];
                           unset($_SESSION['unauthorize']);// tắt thông báo session
                       }
                       if(isset($_SESSION['update']))
                       {
                           echo $_SESSION['update'];
                           unset($_SESSION['update']);// tắt thông báo session
                       }
                ?>
                <table class="tbl-full">
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th> 
                        <th>Nổi bật</th>
                        <th>Hoạt động</th>
                        <th>Thao tác</th> 
                    </tr>

                    <?php
                        $sql = "SELECT * FROM tbl_food";

                        $res = mysqli_query($conn, $sql);
 
                        $count = mysqli_num_rows($res);
                        $sn=1;
                     if($count > 0)
                    {
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            $id=$rows['id'];
                            $tieude=$rows['tieude'];
                            $gia=$rows['gia'];
                            $image_name=$rows['image_name'];
                            $noibat=$rows['noibat'];
                            $hoatdong=$rows['hoatdong'];
                            ?>
                                <tr>
                                    <td><?php echo $sn++ ?>.</td>
                                    <td><?php echo $tieude; ?></td>
                                    <td><?php echo $gia; ?>đ</td>
                                    <td>
                                        <?php 
                                            if($image_name!="")
                                            {
                                                ?>
                                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }
                                            else
                                            {
                                                echo "<div class='loi'>Chưa thêm ảnh !!!</div>";
                                            }
                                         ?>
                                    </td>
                                    <td><?php echo $noibat; ?></td>
                                    <td><?php echo $hoatdong; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-update">Cập nhật</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-delete">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                        } 
                    }
                    else
                    {
                        echo "<tr> <td colspan='7' class='loi'>Thêm món thất bại !!!</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
<?php include('partials/footer.php'); ?>