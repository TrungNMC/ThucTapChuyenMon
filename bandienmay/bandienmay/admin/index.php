<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-chart-bar"></i> Thống kê</h1>
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
                              $query = "SELECT SUM(tbl_sanpham.sanpham_giakhuyenmai * tbl_giaodich.soluong) as 'tongtien' FROM tbl_giaodich, tbl_sanpham WHERE tbl_sanpham.sanpham_id = tbl_giaodich.sanpham_id AND tbl_giaodich.huydon = 0 AND YEAR(tbl_giaodich.ngaythang)= YEAR(CURDATE())";
                              $query_run = mysqli_query($con, $query);
                              $result1 = mysqli_num_rows($query_run);
                              while($row = mysqli_fetch_array($query_run)){
                                  $tongtien = number_format($row['tongtien']);
                              }      
                              echo "<h5>$tongtien(vnđ)</h5>" ;
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
                              $query = "SELECT mahang FROM tbl_donhang GROUP BY mahang";
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
        <div class="container-fluid">
        <div class="card-body">
        <!-- Biểu đồ starst -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tháng', 'Doanh thu'],
          <?php
           $con = mysqli_connect("localhost","root","","bandienmay");  
           $sql = "SELECT MONTH(tbl_giaodich.ngaythang) as 'thang', SUM(tbl_giaodich.soluong*tbl_sanpham.sanpham_giakhuyenmai) as 'doanhthu' FROM tbl_giaodich, tbl_sanpham WHERE tbl_sanpham.sanpham_id = tbl_giaodich.sanpham_id AND tbl_giaodich.huydon = 0 AND YEAR(tbl_giaodich.ngaythang)= YEAR(CURDATE()) GROUP BY MONTH(tbl_giaodich.ngaythang)";  
           $buscar = mysqli_query($con, $sql);
           
           while($dados = mysqli_fetch_array($buscar))  
           {  
                $thang = $dados['thang'];
                $doanhthu = $dados['doanhthu'];
                ?>
                 ['<?php echo $thang ?>', <?php echo $doanhthu ?>],
                 <?php }  ?>
        ]);

        var options = {
          title: 'Biểu đồ doanh thu theo tháng Năm 2021',
          hAxis: {title: 'Tháng',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
</div>
</div>
    <!-- Biểu đồ end -->
        <!-- Biểu đồ 3D starst -->
        <div class="container-fluid">
        <div class="card-body">
        <?php  
            $con = mysqli_connect("localhost","root","","bandienmay");  
            $query = "SELECT tbl_category.category_name, SUM(sanpham_soluong) as number FROM tbl_sanpham, tbl_category WHERE tbl_sanpham.category_id = tbl_category.category_id GROUP BY tbl_sanpham.category_id";  
            $result = mysqli_query($con, $query);  
        ?>  
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Danh mục', 'Số lượng'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["category_name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Biểu đồ  thống kê sản phẩm theo danh mục',  
                      is3D:true,  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
           <br /><br />  
           <div style="width:auto;">  
              
                <div id="piechart" style="width: auto; height: 300px; text-align: center;"></div>  
           </div>  
           
</div>
    <!-- Content Row -->
    
</div>
<!-- Biểu đồ 3D end -->




</div>




    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>