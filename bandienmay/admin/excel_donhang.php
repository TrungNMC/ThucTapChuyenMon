<?php
    include('../db/connect.php');
    header('Content-type: application/vnd-ms-excel');
    $filename = "excel_donhang.xls";
    header("Content-Disposition:attachment;filename=\"$filename\"");
?>
 <?php
					$sql_select = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_khachhang,tbl_donhang WHERE tbl_donhang.sanpham_id=tbl_sanpham.sanpham_id AND tbl_donhang.khachhang_id=tbl_khachhang.khachhang_id GROUP BY mahang ");
		?> 

      <table class="table table-bordered">
        <thead>
            <tr style="text-align:center;"><h1 >Bảng đơn hàng</h1></tr>
          <tr>
		  				<th style="border: 1px solid black;">Thứ tự</th>
						<th style="border: 1px solid black;">Mã đơn hàng</th>
						<th style="border: 1px solid black;">Tình trạng đơn hàng</th>
						<th style="border: 1px solid black;">Tên khách hàng</th>
						<th style="border: 1px solid black;">Ngày đặt</th>
						<th style="border: 1px solid black;">Ghi chú</th>
						<th style="border: 1px solid black;">Hủy đơn</th>
          </tr>
          </thead>
          <tbody>
		  <?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td style="border: 1px solid black; text-align: center;"><?php echo $i; ?></td>
						
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_donhang['mahang']; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php
							if($row_donhang['tinhtrang']==0){
								echo 'Chưa xử lý';
							}else{
								echo 'Đã xử lý';
							}
						?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_donhang['name']; ?></td>
						
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_donhang['ngaythang'] ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_donhang['note'] ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php if($row_donhang['huydon']==0){ }elseif($row_donhang['huydon']==1){
							echo '<a href="quanlydonhang.php?quanly=xemdonhang&mahang='.$row_donhang['mahang'].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
						}else{
							echo 'Đã hủy';
						} 
						?></td>
					</tr>
					 <?php
					} 
					?> 
        </tbody>
      </table>