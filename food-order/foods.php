<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                // Tạo SQL truy vấn để hiển thị cơ sở dữ liệu từ database
                $sql = "SELECT * FROM tbl_food WHERE hoatdong='Yes'";
                // Thực hiện truy vấn
                $res = mysqli_query($conn, $sql );
                // Đếm hàng để kiểm tra xem có sẵn danh mục không
                $count  = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $tieude = $row['tieude'];
                        $gia = $row['gia'];
                        $mieuta = $row['mieuta'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
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
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                <?php
                            }
                            ?>
                                
                            </div>
                            <div class="food-menu-desc">
                                <h4><?php echo $tieude; ?></h4>
                                <p class="food-price"><?php echo $gia; ?></p>
                                <p class="food-detail">
                                    <?php echo $mieuta; ?>  
                                </p>
                                <br>
                                <a href="order.html" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>  
                        </a>

                        <?php
                    }
                }
                else
                {
                    echo "<div class='loi'>Không tìm thấy món ăn, vui lòng kiểm tra lai !!!</div>";
                }
            ?>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>