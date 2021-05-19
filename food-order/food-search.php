<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php
                // Từ khóa tìm kiếm
                $search = $_POST['search'];
            ?>
            <h2>Tìm kiếm món ăn với từ khóa  <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                // Sql truy vấn 
                $sql = "SELECT * FROM tbl_food WHERE tieude LIKE '%$search%' OR mieuta LIKE  '%$search%'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

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
                                        if($image_name=="")
                                        {
                                            echo "<div class='loi'>Ảnh không tồn tại !!!</div>";
                                        }
                                        else
                                        {
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

                                    <a href="#" class="btn btn-primary">Order Now</a>
                                </div>
                            </div>  

                        <?php
                    }
                }
                else
                {
                    echo "<div class='loi'>Không tìm thấy món ăn !!!</div>";
                }
            ?>
            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>