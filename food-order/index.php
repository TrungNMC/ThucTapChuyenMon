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

    <!-- Slider Bar Starst -->
        <div class="slider container1">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <div class="slide first ">
                    <img src="images/slider/slider1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/slider/slider2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/slider/slider3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/slider/slider4.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>
        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter>4){
                counter = 1;
            }
        }, 5000);
        </script>
    <!-- Slider Bar End -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
                // Tạo SQL truy vấn để hiển thị cơ sở dữ liệu từ database
                $sql = "SELECT * FROM tbl_category WHERE hoatdong='Yes' AND noibat='Yes' LIMIT 3";
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



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                // Tạo SQL truy vấn để hiển thị cơ sở dữ liệu từ database
                $sql2 = "SELECT * FROM tbl_food WHERE hoatdong='Yes' AND noibat='Yes' LIMIT 6";
                // Thực hiện truy vấn
                $res2 = mysqli_query($conn, $sql2);
                // Đếm hàng để kiểm tra xem có sẵn danh mục không
                $count2  = mysqli_num_rows($res2);

                if($count2>0)
                {
                    while($row = mysqli_fetch_assoc($res2))
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
                    echo "<div class='loi'>Thêm món thất bại, vui lòng kiểm tra lai !!!</div>";
                }
            ?>


            <div class="clearfix"></div> 
        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>