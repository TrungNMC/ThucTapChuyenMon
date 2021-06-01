<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'"); 
?>
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Trang chủ</a>
                    <i>|</i>
                </li>
                <li>Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<?php
	while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->

        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-imagezoom="true" class="img-fluid" alt=""
                                data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true"
                                        class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-imagezoom="true" class="img-fluid" alt=""
                                data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true"
                                        class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-imagezoom="true" class="img-fluid" alt=""
                                data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
                                <div class="thumb-image">
                                    <img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true"
                                        class="img-fluid" alt="">
                                </div>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3"><?php echo $row_chitiet['sanpham_name'] ?></h3>
                <p class="mb-3">
                    <span
                        class="item_price"><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']).'vnđ' ?></span>
                    <del
                        class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']).'vnđ' ?></del>
                    <label>Miễn phí vận chuyển</label>
                </p>

                <div class="product-single-w3l">
                    <br>
                    <p><?php echo $row_chitiet['sanpham_chitiet'] ?></p>
                    <p><?php echo $row_chitiet['sanpham_mota'] ?></p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="?quanly=giohang" method="post">
                            <fieldset>
                                <input type="hidden" name="tensanpham"
                                    value="<?php echo $row_chitiet['sanpham_name'] ?>" />
                                <input type="hidden" name="sanpham_id"
                                    value="<?php echo $row_chitiet['sanpham_id'] ?>" />
                                <input type="hidden" name="giasanpham"
                                    value="<?php echo $row_chitiet['sanpham_gia'] ?>" />
                                <input type="hidden" name="hinhanh"
                                    value="<?php echo $row_chitiet['sanpham_image'] ?>" />
                                <input type="hidden" name="soluong" value="1" />
                                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Single Page -->
<?php
	} 
	?>


<?php
	$sql_chitiet1 = mysqli_query($con,"select category_id FROM tbl_sanpham WHERE sanpham_id='$id'");
	while($r = mysqli_fetch_array($sql_chitiet1)){
		$cate = $r['category_id'];
	}
?>
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
    <h3 class="heading-tittle text-center font-italic"><?php echo $r1['category_name'] ?><h4>Sản phẩm liên quan</h4> </h3>
    <div class="row">

        <?php
	$sql = mysqli_query($con,"select * FROM tbl_sanpham WHERE category_id='$cate' limit 3");
	while($r1 = mysqli_fetch_array($sql)){
?>
        <div class="col-md-4 product-men mt-5">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item text-center">
                    <img src="images/<?php echo $r1['sanpham_image'] ?>" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="?quanly=chitietsp&id=<?php echo $r1['sanpham_id'] ?>"
                                class="link-product-add-cart">Xem sản
                                phẩm</a>
                        </div>
                    </div>
                </div>
                <div class="item-info-product text-center border-top mt-4">
                    <h4 class="pt-1">
                        <a
                            href="?quanly=chitietsp&id=<?php echo $r1['sanpham_id'] ?>"><?php echo $r1['sanpham_name'] ?></a>
                    </h4>
                    <div class="info-product-price my-2">
                        <span class="item_price"><?php echo number_format($r1['sanpham_giakhuyenmai']).'vnđ' ?></span>
                        <del><?php echo number_format($r1['sanpham_gia']).'vnđ' ?></del>
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="?quanly=giohang" method="post">
                            <fieldset>
                                <input type="hidden" name="tensanpham" value="<?php echo $r1['sanpham_name'] ?>" />
                                <input type="hidden" name="sanpham_id" value="<?php echo $r1['sanpham_id'] ?>" />
                                <input type="hidden" name="giasanpham" value="<?php echo $r1['sanpham_gia'] ?>" />
                                <input type="hidden" name="hinhanh" value="<?php echo $r1['sanpham_image'] ?>" />
                                <input type="hidden" name="soluong" value="1" />
                                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
	}
?>
    </div>
</div>