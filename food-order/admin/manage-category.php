<?php include('partials/menu.php'); ?>
<div class="main-content">
            <div class="wrapper">
                <h1>MANAGE CATEGORY</h1>
                <br/>
                <?php
                   if(isset($_SESSION['add']))
                   {
                       echo $_SESSION['add'];
                       unset($_SESSION['add']);// tắt thông báo session
                   }
                   if(isset($_SESSION['remove']))
                   {
                       echo $_SESSION['remove'];
                       unset($_SESSION['remove']);// tắt thông báo session
                   }
                   if(isset($_SESSION['delete']))
                   {
                       echo $_SESSION['delete'];
                       unset($_SESSION['delete']);// tắt thông báo session
                   }
                   if(isset($_SESSION['no-category-found']))
                   {
                       echo $_SESSION['no-category-found'];
                       unset($_SESSION['no-category-found']);// tắt thông báo session
                   }
                   if(isset($_SESSION['update']))
                   {
                       echo $_SESSION['update'];
                       unset($_SESSION['update']);// tắt thông báo session
                   }
                   if(isset($_SESSION['upload']))
                   {
                       echo $_SESSION['upload'];
                       unset($_SESSION['upload']);// tắt thông báo session
                   }
                   if(isset($_SESSION['failed-remove']))
                   {
                       echo $_SESSION['failed-remove'];
                       unset($_SESSION['failed-remove']);// tắt thông báo session
                   }
                ?>
                <br/><br/>
                <!-- Btn add -->
                <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-add">Thêm danh mục</a>
                <br/><br/>
                <table class="tbl-full">
                    <tr> 
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Hình ảnh</th>
                        <th>Nổi bật</th>
                        <th>Hoạt động</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM tbl_category";

                    $res = mysqli_query($conn, $sql);
 
                    $count = mysqli_num_rows($res);
                    $sn=1;
                    if($count > 0)
                    {
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            $id=$rows['id'];
                            $tieude=$rows['tieude'];
                            $image_name=$rows['image_name'];
                            $noibat=$rows['noibat'];
                            $hoatdong=$rows['hoatdong'];
                            ?>
                                <tr>
                                    <td><?php echo $sn++ ?>.</td>
                                    <td><?php echo $tieude; ?></td>
                                    <td>
                                        <?php 
                                            if($image_name!="")
                                            {
                                                ?>
                                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px">
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
                                        <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-update">Cập nhật</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-delete">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                        } 
                    }
                    else
                    {
                        ?>
                        <tr>
                            <td colspan="6"><div class="loi">Thêm danh mục thất bại !!!</div></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
<?php include('partials/footer.php'); ?>