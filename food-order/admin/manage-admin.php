<?php include('partials/menu.php'); ?>


        <!-- Content Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Quản lý tài khoản</h1>
                <br/>
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
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);// tắt thông báo session
                    }
                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);// tắt thông báo session
                    }
                    if(isset($_SESSION['pass-not-found']))
                    {
                        echo $_SESSION['pass-not-found'];
                        unset($_SESSION['pass-not-found']);// tắt thông báo session
                    }
                    if(isset($_SESSION['change-pass']))
                    {
                        echo $_SESSION['change-pass'];
                        unset($_SESSION['change-pass']);// tắt thông báo session
                    }
                ?>
                <br/><br/><br/>
                <!-- Btn add -->
                <a href="add-admin.php" class="btn-add">Thêm tài khoản</a>
                <br/><br/>
                <table class="tbl-full">
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Tài khoản</th>
                        <th>Thao tác</th>
                    </tr>
                    
                    <?php
                    //Query lấy tất cả admin
                        $sql = "SELECT * FROM tbl_admin";
                    //Excute query
                    $res = mysqli_query($conn, $sql);
                    //Check
                    if($res==TRUE)
                    {
                        $count = mysqli_num_rows($res);
                        $sn=1;
                        if($count > 0)
                        {
                            while($rows = mysqli_fetch_assoc($res))
                            {
                                $id=$rows['id'];
                                $hoten=$rows['hoten'];
                                $taikhoan=$rows['taikhoan'];

                                ?>
                                    <tr>
                                        <td><?php echo $sn++; ?>.</td>
                                        <td><?php echo $hoten; ?></td>
                                        <td><?php echo $taikhoan; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn">Đổi mật khẩu</a>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-update">Cập nhật</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-delete">Xóa</a>
                                        </td>
                                    </tr>
                            
                                <?php
                        
                            }
                        }
                        else
                        {

                        }
                    }
                    ?>
                </table>
            </div>
        </div>
        <!-- Content End -->

<?php include('partials/footer.php'); ?>