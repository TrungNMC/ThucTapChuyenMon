<?php
    include('../db/connect.php');
    header('Content-type: application/vnd-ms-excel');
    $filename = "excel_hoadon.xls";
    header("Content-Disposition:attachment;filename=\"$filename\"");
?>
 <?php
				$sql_hoadon = mysqli_query($con,"SELECT *, SUM(soluong * sanpham_giakhuyenmai) as 'tongtien' FROM tbl_sanpham,tbl_khachhang,tbl_giaodich WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_giaodich.khachhang_id=tbl_khachhang.khachhang_id GROUP BY magiaodich"); 
		?> 

      <table class="table table-bordered">
        <thead>
            <tr style="text-align:center;"><h1 >Bảng hóa đơn</h1></tr>
          <tr>
            <th style="border: 1px solid black;">Thứ tự</th>
			<th style="border: 1px solid black;">Mã giao dịch</th>
			<th style="border: 1px solid black;">Tên khách hàng</th>
			<th style="border: 1px solid black;">Số điện thoại</th>
			<th style="border: 1px solid black;">Địa chỉ</th>
			<th style="border: 1px solid black;">Tổng hóa đơn</th>
			<th style="border: 1px solid black;">Thời gian</th>
          </tr>
          </thead>
          <tbody>
          <?php
					$i = 0;
					while($row_hoadon = mysqli_fetch_array($sql_hoadon)){ 
						$i++;
					?> 
					<tr>	
                        <td style="border: 1px solid black; text-align: center;"><?php echo $i; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_hoadon['magiaodich']; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_hoadon['name']; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_hoadon['phone']; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_hoadon['address']; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo number_format($row_hoadon['tongtien']).'vnđ'; ?></td>
						<td style="border: 1px solid black; text-align: center;"><?php echo $row_hoadon['ngaythang'] ?></td>
					</tr>
					 <?php
					} 
					?> 
        </tbody>
      </table>