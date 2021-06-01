<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-chart-bar"></i> Thống kê</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tài khoản admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                              $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                              $query = "SELECT admin_id FROM tbl_admin ORDER BY admin_id";
                              $query_run = mysqli_query($con, $query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h4>'.$row.'</h4>';
                            ?>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-cog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng thu nhập (năm)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            </div>
                             <?php
                              $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                              $query = "SELECT SUM(tbl_sanpham.sanpham_giakhuyenmai * tbl_donhang.soluong) as 'tongtien' FROM tbl_donhang, tbl_sanpham WHERE tbl_sanpham.sanpham_id = tbl_donhang.sanpham_id AND YEAR(tbl_donhang.ngaythang)= YEAR(CURDATE())";
                              $query_run = mysqli_query($con, $query);
                              $result1 = mysqli_num_rows($query_run);
                              while($row = mysqli_fetch_array($query_run)){
                                  $tongtien = $row['tongtien'];
                              }      
                              echo "<h5>$tongtien</h5>" ;
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-coins fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đơn hàng</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?php
                              $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                              $query = "SELECT donhang_id FROM tbl_donhang ORDER BY donhang_id";
                              $query_run = mysqli_query($con, $query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h4>'.$row.'</h4>';
                            ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sản phẩm</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?php
                             $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                             $query = "SELECT sanpham_id FROM tbl_sanpham ORDER BY sanpham_id";
                             $query_run = mysqli_query($con, $query);
                             $row = mysqli_num_rows($query_run);
                             echo '<h4>'.$row.'</h4>';
                            ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-product-hunt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Content Row -->
</div>





    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>