   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->

  
  <a style="padding: 5px 0 5px 15px ;"><img src="img/logo2.png" alt="" width="70px"></a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-home" style="font-size: 1.1rem;"></i>
    <span style="font-size: 1rem;">Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="register.php">
  <i class="fas fa-user-circle" style="font-size: 1.2rem;"></i>
    <span style="font-size: 1.1rem;">Admin</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="quanlykhachhang.php?trang=1">
  <i class="fas fa-users" style="font-size: 1rem;"></i>
    <span style="font-size: 1.1rem;">Khách hàng</span></a>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fa fa-list-alt" style="font-size: 1.1rem;" aria-hidden="true"></i>
    <span style="font-size: 1.1rem;">Danh mục</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header" style="font-size: 0.8rem;">Bao gồm :</h6>
      <a class="collapse-item" style="font-size: 0.8rem;" href="quanlydanhmucsp.php">Danh mục sản phẩm</a>
      <a class="collapse-item" style="font-size: 0.9rem;" href="quanlydanhmucbaiviet.php">Danh mục bài viết</a>
    </div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" href="quanlydonhang.php">
  <i class="fa fa-shopping-cart" style="font-size: 1rem;" aria-hidden="true"></i>
    <span style="font-size: 1.1rem;">Đơn hàng</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="quanlyhoadon.php">
  <i class="fas fa-file-invoice-dollar" style="font-size: 1.1rem;" aria-hidden="true"></i>
    <span style="font-size: 1.1rem;">Hóa đơn</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="quanlysanpham.php?trang=1">
  <i class="fab fa-product-hunt" style="font-size: 1.1rem;"></i>
    <span style="font-size: 1.1rem;">Sản phẩm</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="quanlybaiviet.php">
  <i class="far fa-newspaper" style="font-size: 1.1rem;"></i>
    <span style="font-size: 1.1rem;">Bài viết</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Thông báo
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-clipboard-list text-white"></i>
                    </div>
                  </div>
                  <div>
                 <?php
                              $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                              $query = "SELECT mahang FROM tbl_donhang GROUP BY mahang";
                              $query_run = mysqli_query($con, $query);
                              $row = mysqli_num_rows($query_run);
                              echo '<h8>Có '.$row.' đơn hàng</h8>';
                            ?>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <?php
                              $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                              $query = "SELECT SUM(tbl_sanpham.sanpham_giakhuyenmai * tbl_giaodich.soluong) as 'tongtien' FROM tbl_giaodich, tbl_sanpham WHERE tbl_sanpham.sanpham_id = tbl_giaodich.sanpham_id AND tbl_giaodich.huydon = 0 AND YEAR(tbl_giaodich.ngaythang)= YEAR(CURDATE())";
                              $query_run = mysqli_query($con, $query);
                              $result1 = mysqli_num_rows($query_run);
                              while($row = mysqli_fetch_array($query_run)){
                                  $tongtien = number_format($row['tongtien']);
                              }      
                              echo '<h8>Tổng doanh thu '.$tongtien.'(vnđ)</h8>';
                            ?>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fab fa-product-hunt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <?php
                             $con = mysqli_connect("localhost", "root", "", "bandienmay");  
                             $query = "SELECT sanpham_id FROM tbl_sanpham ORDER BY sanpham_id";
                             $query_run = mysqli_query($con, $query);
                             $row = mysqli_num_rows($query_run);
                             echo '<h8>Có '.$row.' sản phẩm.</h8>';
                            ?>
                  </div>
                </a>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                     <?php echo $login; ?>
                </span>
                <img class="img-profile rounded-circle" src="img/1.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="register.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Tài khoản
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn thật sự muốn thoát ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn đã sẵn sàng kết thúc phiên hiện tại của mình.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Đăng xuất</button>

          </form>


        </div>
      </div>
    </div>
  </div>