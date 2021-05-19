<?php include('partials-front/menu.php'); ?>
    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
                // Tạo SQL truy vấn để hiển thị cơ sở dữ liệu từ database
                $sql = "SELECT * FROM tbl_category WHERE hoatdong='Yes'";
                // Thực hiện truy vấn
                $res = mysqli_query($conn, $sql);
                // Đếm hàng để kiểm tra xem có sẵn danh mục không
                $count  = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $tieude = $row['tieude'];
                        $image_name = $row['image_name'];
                        ?>

                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                        <div class="box-3 float-container">
                        <?php
                            // Check hình có tồn tại không
                            if($image_name=="")
                            {
                                // Hiển thị thông báo khi không có hình sẵn
                                echo "<div class='loi'>Không có hình.</div>";
                            }
                            else
                            {
                                // Hình có sẵn
                                ?>
                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        ?>
                            

                            <h3 class="float-text text-white"><?php echo $tieude; ?></h3>
                        </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    echo "<div class='loi'>Thêm danh mục thất bại, vui lòng kiểm tra lai !!!</div>";
                }
            ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->
<?php include('partials-front/footer.php'); ?>