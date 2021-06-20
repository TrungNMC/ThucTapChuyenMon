-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 07:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandienmay`
--

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(10, 'Nguyen Trung', 5, 'San pham dep chat luong tot', 1624124894),
(11, 'Dang Van Cuong', 5, 'San pham dong goi ki luong', 1624124928),
(12, 'Mai Thi Thuong ', 5, 'Gia kha re', 1624124957),
(13, 'Huynh Thi Yen Nhi', 4, 'Gia re nhieu khuyen mai', 1624124995);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(9, 'trung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'trung'),
(10, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(13, 'nhi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'nhi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) UNSIGNED NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'Bài 1 : Hệ điều hành cài trên điện thoại .', 'Trên thị trường hiện nay (2020) ngoài điện thoại iPhone của Apple sử dụng hệ điều hành iOS thì hều hết các điện thoại thông mình khác đều được cài hệ điều hành Android. Android và iOS là 2 hệ điều hành thống trị thị trường hệ điều hành trên Smartphone, hệ điều hành Android hiện được nhiều người sử dụng nhất thế giới chiếm trên 80%.', 'Trên thị trường hiện nay (2020) ngoài điện thoại iPhone của Apple sử dụng hệ điều hành iOS thì hều hết các điện thoại thông mình khác đều được cài hệ điều hành Android. Android và iOS là 2 hệ điều hành thống trị thị trường hệ điều hành trên Smartphone, hệ điều hành Android hiện được nhiều người sử dụng nhất thế giới chiếm trên 80%.', 4, 'b1.jpg'),
(2, 'Bài 1 : Hãng máy giặt nào tốt nhất hiện nay ?', 'Hiện tại mới là đầu năm, có thể nhiều hàng chưa ra, vì thế bài viết này chỉ viết cho sản phẩm đang có. Có rất nhiều hãng máy giặt ở VN, nhưng phổ biến nhất và bán chạy nhất vẫn là 2 hãng LG và Elecs đối với máy lồng ngang; Sanyo, Toshiba, Panasonic đối với máy lồng đứng.', 'LG: Dòng máy lồng ngang khá là đa dạng về kg từ 7kg-7.5kg-8kg-13kg… Đặc biệt dòng lồng ngang của LG 2013 sử dụng toàn bộ dẫn động trực tiếp Inverter. Các mẹ nên mua dòng có tính năng giặt 6 motion như WD-8600/9600/10600/11600/13600/14600/15600/14660(thái lan)/15660(thái lan)/19600/20600/23600/25600, 17DW (Hàn quốc)… (sang năm nay theo đánh giá của mình thì các sp của LG sẽ gần như đạt 100% sử dụng công nghệ giặt này. Với LG mình vote cho dòng lồng ngang.\r\nCác dòng không có sấy giá khá dễ chịu từ 8 tr cho model 8600 đến 16.5tr cho model WD-17DW. Các dòng có sấy của LG thì đều thuộc dòng sấy thông hơi, giá tương đối đắt đỏ, thực sự so với mua sấy rời hoặc máy giặt sấy của Elecs thì ko đáng mua bằng.Các dòng cửa đứng của LG ko thực sự nổi trội so với cửa ngang. Công nghệ giặt của dòng này, sau thời gian kiểm chứng thì không tối ưu bằng các công nghệ giặt của máy Toshi, pana hay Sanyo.\r\n\r\nElectrolux: Dòng 2014 của hãng vẫn sử dụng dẫn động dây cuaroa. Elec giặt vẫn rất sạch có tiếng nên mọi người vẫn mua nhiều. Công nghệ giặt cho các dòng máy 2014 của hãng là giặt phun nước. Máy Elec thường có tự trọng nặng hơn các máy hãng khác cùng dòng. Các model cao cấp nhất của hãng có giá rất cạnh tranh và cũng có công nghệ Inverter kèm tốc độ vắt khá ấn tượng (vắt khá khô). Với các model thường, vì dẫn động dây cuaroa và động cơ thường nên máy thường vắt ồn hơn các dòn máy dẫn động trực tiếp khác. Quả thực mình không ấn tượng lắm về dòng này, giá tuy có giảm nhưng ko hấp dẫn lắm. Với dòng cao cấp thì nên chọn vì giá cạnh tranh. Chú ý là bơm nước tuần hoàn sẽ hơi ồn một chút, các bạn cân nhắc khi đặt máy gần phòng ngủ. Elec phân ra các mã như EWF-… là mã máy giặt không kèm sấy; EWW-…là mã máy giặt có sấy. Với model 2013 đầu 2014 thì số cuối là 2. Một số mã mà mình thấy đáng mua nhất của dòng không sấy là: EWF 14012 (No 1); EWF-10932(s); EWW 12732(s)– của dòng có sấy là: EWW 14012; EWF 1122DW\r\nCác dòng cửa đứng của Elecs đa số là dòng có kg lớn và cũng ko thực sự ấn tượng.\r\n\r\nPanasonic: Model cửa ngang dẫn động trực tiếp cũng tốt, nhưng người dùng gần như không có chọn lựa vì hiện giờ có đúng 1 mẫu đang được bán chính hãng là NA-148VG3 giá 14tr…. SP của Pana đa số có xuất xứ từ Pana Trung Quốc nên cũng kén người mua. Máy Pana hiện có ở VN thuộc dòng VG3, dòng gần nhất hiện nay trên thế giới là VG4.\r\nVề máy giặt cửa đứng thì Pana vẫn khá tốt, rẻ, bền. Mỗi điều là tốc độ vắt của máy Pana hơi thấp, thấp hơn Toshiba nên mình không ấn tượng bằng Toshiba.\r\n\r\nToshiba: Hãng này thì mạnh về máy cửa đứng, đặc biệt là các dòng dẫn động trực tiếp. Cửa ngang của 2 hãng này vẫn dùng dây cuaroa như Elecs, giá cao vì thế ít người dùng. Model lồng đứng của hãng thuộc top máy lồng đứng tốt nhất thị trường. Đó là DC-1000CV; DC1005CV; D990SV (máy này chắc khó mà mua dc, vì là sp 2012); một số máy 10kg…\r\n\r\nSanyo: Hiện tại đang có ở VN và phổ biến nhất là các máy lồng đứng. Máy lồng ngang có các model 7kg là ASW-700T (dẫn động thường, giá rẻ); D700T; D700VT (dẫn động trực tiếp, giá cạnh tranh, phổ biến dưới 9.5tr). Máy lồng nghiêng có 2 model 8kg là D800T (ko sấy) và D800HT (có sấy). Máy lồng đứng đáng mua nhất là Sanyo S80ZT.\r\n\r\nSamsung:  samsung  ko thực sự ấn tượng về máy giặt, chỉ có các model đầu bảng dẫn động trực tiếp inverter như 0894 là đáng mua khi giá phù hợp.\r\n\r\nHitachi: Máy giặt Hitachi vào Việt nam cũng khá lâu nhưng hơi kén khách. Về lồng đứng thì có nhiều nhưng giá cao, cao hơn cả Toshi, đa số là dòng dẫn động thường, vì thế khó cạnh tranh. Về máy lồng ngang thì hiện tại đã có model của Hitachi dẫn động trực tiếp (khá êm); tuy nhiên hàng này tương đối đắt đỏ; 7kg mà giá cũng phải 15-16tr nên thực sự là 1 bài toán khó cho người mua, hãng có đại diện ở Vn nhưng có nhiều linh kiện độc quyền.\r\n\r\nCác thương khác: Miele, Maytag,… khá tốt, nhưng giá cao, ít nơi bán nên không phổ biến.\r\n\r\nCác thương hiệu TQ như Haier, Midea… giá cạnh tranh, máy nào giá càng cao thì chạy càng ít hỏng vặt.', 2, 'kienthucmaygiat1.jpg'),
(3, 'Bài 1 : Cấu tạo của tủ lạnh, các bộ phận chính và chức năng từng bộ phận', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'kienthuctulanh1.jpg'),
(5, 'Bài 2 : Giặt Cảm Biến Thông Minh AI Wash', 'Bài 5 : AI Wash trang bị 4 loại cảm biến để nhận biết khối lượng và phân tích độ bẩn áo quần; từ đó tự động tối ưu thời gian giặt, phân bổ chính xác lượng nước giặt xả và lượng nước phù hợp; giúp giặt sạch hoàn hảo.', 'AI Wash trang bị 4 loại cảm biến để nhận biết khối lượng và phân tích độ bẩn áo quần; từ đó tự động tối ưu thời gian giặt, phân bổ chính xác lượng nước giặt xả và lượng nước phù hợp; giúp giặt sạch hoàn hảo.', 2, 'kienthucmaygiat2.jpg'),
(7, 'Bài 2 : Thương hiệu Smartphone', 'Thương hiệu của một sản phẩm cũng là điều làm cho nhiều người phân vân, có những người lựa chọn điện thoại chỉ đơn giản vì thương hiệu của nó mà không hề quan tâm đến cấu hình, đây là sở thích của mỗi người , thời điểm hiện tại thì Samsung và iPhone là 2 cái tên nhận được nhiều sự quan tâm nhất. Bên cánh đócũng có khá nhiều sự lựa chọn cho bạn đến từ các tên tuổi như: Nokia, Sony, htc, oppo, vivo, Huawei, xiaomi, realme, philips, Vsmart, Asus,…', 'Thương hiệu của một sản phẩm cũng là điều làm cho nhiều người phân vân, có những người lựa chọn điện thoại chỉ đơn giản vì thương hiệu của nó mà không hề quan tâm đến cấu hình, đây là sở thích của mỗi người , thời điểm hiện tại thì Samsung và iPhone là 2 cái tên nhận được nhiều sự quan tâm nhất. Bên cánh đócũng có khá nhiều sự lựa chọn cho bạn đến từ các tên tuổi như: Nokia, Sony, htc, oppo, vivo, Huawei, xiaomi, realme, philips, Vsmart, Asus,…', 4, 'b4.jpg'),
(8, 'Bài 1 : Chọn Mac, Windows hay hệ điều hành khác?', 'Hệ điều hành là tiêu chí đầu tiên mà người dùng cân nhắc khi lựa chọn một chiếc laptop. Trước đây khi mà thị trường hệ điều hành còn hẹp thì việc lựa chọn của chúng ta dễ dàng hơn khi chỉ có MacOS của Apple và Windows của Microsoft. Nhưng hiện nay chúng ta có nhiều sự lựa chọn hơn khi Chrome OS, Ubuntu và một số các hệ điều hành khác đang dần phát triển và hướng đến mục đích làm cho máy tính có mức giá phải chăng hơn. ', 'Cho đến nay thì phần lớn máy tính đều dùng hệ điều hành Windows là chủ yếu bởi vì nhiều lý do, phần lớn trong số đó là việc Windows được cập nhật một cách thường xuyên, cũng như là phần lớn các nhà phát triển game và các phần mềm kinh doanh xem đây như là hệ điều hành tiêu chuẩn cho các sản phẩm.\r\n\r\nHiện tại, trên thị trường các dòng sản phẩm chạy Windows có rất nhiều kích cỡ cùng thiết kế. Phổ biến nhất thường thấy đó là các dòng máy tính kiểu dáng vỏ sò cổ điển với một bên là màn hình và một bên là bàn phím cùng trackpad.\r\n\r\nNgoài ra, còn có cách loại khác như màn hình cảm ứng, màn hình gập hay màn hình và bàn phím có thể tách rời ra cũng đang dần được các nhà sản xuất ngày càng tung ra nhiều hơn, gần đây đặc biệt có thể kể đến đó là dòng Surface của Microsoft. Đây cũng là một trong những đặc thù mà các dòng máy Macbook của Apple không có được nếu không tính đến Touchbar.\r\n\r\nKhác với các dòng máy của Apple thì các dòng máy dùng Windows sẽ có đa dạng phần cứng hơn khi có rất nhiều các sản phẩm đến từ nhiều hãng sản xuất như Lenovo, Dell, Asus,…', 3, 'b2.jpg'),
(9, 'Bài 2 : Những điều cần biết về phần cứng ?', 'Đối với một chiếc laptop thì phần cứng sẽ là phần quyết định được thiết bị đó sẽ hoạt động như thế nào. Một phần cứng tốt cũng sẽ đắt hơn những cái yếu hơn, vậy nên xem xét phần cứng sao cho phù hợp với nhu cầu sử dụng sẽ giúp cho người dùng tiết kiệm được một khoản chi phí không cần thiết. Chiếc laptop chỉ phục vụ cho việc lướt web, đọc viết tài liệu sẽ không cần đến một bộ xử lý mạnh mẽ hay card đồ họa.', 'CPU/ Bộ xử lý\r\nTrong máy vi tính thì CPU sẽ là bộ phận xử lý hầu hết các tác vụ xử lý hoặc tính toán. Đồng nghĩa rằng CPU càng tốt thì tốc độ xử lý càng nhanh. Tuy nhiên, có một lưu ý là xung nhịp của CPU không nói lên tất cả, nó còn phụ thuộc thêm rất nhiều thứ. Nếu bạn không phải là một người có hiểu biết giới hạn về CPU thì các đơn giản nhất tìm kiếm trên mạng các bài so sánh cũng như đánh giá về con chip mà bạn chọn.\r\nNhìn chung, các dòng CPU mới nhất hiện nay của Intel là Core i3, i5 và i7 thế hệ thứ 8 nếu như chúng ta bỏ qua một vài thiết bị đã bắt đầu đưa những con chip thế hệ thứ 9 lên một vài dòng máy chơi gaming. Tuy nhiên nó vẫn là một số ít. Bên cạnh đó thì AMD cũng đã ra mắt thế hệ chip thứ 3 của mình dù hơi khó tìm những chiếc máy chạy dòng chip này.\r\n\r\nLựa chọn những dòng CPU mới nhất luôn là lựa chọn tốt nhất khi có thể. Nếu chi phí không cho phép thì cũng đừng lựa chọn các thế hệ chip quá cũ. Thêm vào đó nếu bạn không làm việc về xử lý hình ảnh hay đồ họa thì các chip dòng trung cũng là một sự lựa chọn tốt nếu so giữa một con chip i5 thế hệ mới và i7 thế hệ cũ.', 3, 'kienthuclaptop2.jpg'),
(10, 'Bài 2 : Những lưu ý khi sử dụng tủ lạnh ', 'Khi sử dụng tủ lạnh bạn cần lưu ý những điều sau để đảm bảo an toàn, tiết kiệm điện và tăng tuổi thọ cho tủ lạnh:', 'Nên đặt tủ lạnh cách tường tối thiểu 10 cm để đảm bảo lưu thông không khí làm mát dàn lạnh.\r\nNên vệ sinh tủ lạnh thường xuyên, khoảng nửa tháng một lần hoặc ít nhất là 1 lần mỗi tháng để tránh cho vi khuẩn có điều kiện sinh sôi, phát triển. Hãy bắt đầu bằng việc vặn nút điều chỉnh từ vị trí (ON) hoặc (OFF) để ngắt điện tủ lạnh hoặc rút nguồn ra. Lấy toàn bộ thực phẩm, giá đỡ trong tủ ra ngoài. Mở cửa tủ để tuyết trên ngăn đá tan chảy (không dùng dao, hay vật cứng để cạy tuyết trên ngăn đá), sau đó dùng khăn mềm lau khô.\r\nKhi cọ rửa tủ lạnh cần tránh tình trạng để nước đọng lại ở đáy tủ. Nên để tủ lạnh trở lại rồi mới đặt thực phẩm vào trong.\r\nKhoảng 1 tháng 1 lần cho tủ lạnh nghỉ ngơi 30 phút bằng cách vặn nút điều chỉnh (thermostat) về vị trí (ON) hoặc (OFF), sau đó để tủ chạy bình thường.\r\nKhông nên nhồi nhét quá nhiều thứ vào tủ lạnh vì cần có đủ không gian để không khí trong tủ lạnh lưu thông tốt.\r\nHạn chế mở tủ lạnh nhiều lần và thời gian mở lâu quá mức cần thiết. Làm như thế sẽ tiêu hao một lượng điện. Cũng không nên che kín các giá để thực phẩm trong tủ lạnh.\r\nKhông nên để thức ăn nóng trong tủ lạnh, vì sẽ làm ảnh hưởng đến bộ dàn làm mát, giảm tuổi thọ của tủ lạnh.\r\nKhi tủ lạnh tắt hoặc khởi động mà nghe tiếng kêu, có thể các vít bắt của dàn lạnh bị lỏng. Nên rút điện và đệm thêm miếng cao su vào, xiết chặt.\r\nNên làm sạch các loại đồ ăn thức uống trước khi cho vào tủ. Các loại thực phẩm có mùi đặc trưng, hay thức ăn mặn nên bỏ vào túi hay hộp kín rồi mới cho vào tủ lạnh, tránh tình trạng phát tán mùi, bay hơi mặn gây hiện tượng ăn mòn tủ lạnh.\r\nKhi tủ lạnh không lạnh có thể do tủ lạnh chứa nhiều thực phẩm hoặc núm công tắc (rơ le) để không phù hợp. Nên lấy bớt thực phẩm ra ngoài, vặn núm công tắc lên nhiệt độ lạnh hơn. Kiểm tra lại độ lạnh sau khi điều chỉnh.', 1, 'kienthuctulanh2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Laptop'),
(2, 'Tủ lạnh'),
(3, 'Máy giặt'),
(4, 'Điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ctdh`
--

CREATE TABLE `tbl_ctdh` (
  `ctdh_id` int(11) UNSIGNED NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ctdh`
--

INSERT INTO `tbl_ctdh` (`ctdh_id`, `mahang`, `sanpham_id`, `soluong`) VALUES
(9, '6490', 36, 2),
(10, '6490', 91, 1),
(11, '6490', 97, 1),
(12, '6490', 95, 1),
(13, '6675', 93, 1),
(14, '6675', 54, 1),
(15, '6675', 88, 1),
(16, '2999', 47, 1),
(17, '5845', 35, 3),
(18, '6429', 49, 1),
(19, '3604', 91, 1),
(20, '3604', 88, 1),
(21, '3604', 99, 1),
(22, '3604', 47, 1),
(23, '4284', 23, 1),
(24, '4284', 52, 1),
(25, '2686', 38, 1),
(26, '909', 52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc_tin`
--

CREATE TABLE `tbl_danhmuc_tin` (
  `danhmuctin_id` int(11) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_danhmuc_tin`
--

INSERT INTO `tbl_danhmuc_tin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Kiến thức tủ lạnh'),
(2, 'Kiến thức máy giặt'),
(3, 'Kiến thức laptop'),
(4, 'Kiến thức Điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) UNSIGNED NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0,
  `phuongthucthanhtoan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`, `phuongthucthanhtoan`) VALUES
(154, '6490', 31, '2021-05-16 11:33:52', 0, 0, 'cod'),
(155, '6490', 31, '2021-05-16 11:33:52', 0, 0, 'cod'),
(156, '6490', 31, '2021-05-16 11:33:52', 0, 0, 'cod'),
(157, '6490', 31, '2021-05-16 11:33:52', 0, 0, 'cod'),
(158, '6675', 31, '2021-05-01 11:37:10', 0, 0, 'online'),
(159, '6675', 31, '2021-05-01 11:37:10', 0, 0, 'online'),
(160, '6675', 31, '2021-05-01 11:37:10', 0, 0, 'online'),
(161, '2999', 32, '2021-04-01 11:39:08', 0, 0, 'cod'),
(162, '5845', 32, '2021-03-14 11:41:06', 0, 0, 'online'),
(163, '6429', 32, '2021-06-16 11:43:58', 0, 0, 'cod'),
(164, '3604', 29, '2021-04-16 11:46:18', 0, 0, 'online'),
(165, '3604', 29, '2021-04-16 11:46:18', 0, 0, 'online'),
(166, '3604', 29, '2021-04-16 11:46:18', 0, 0, 'online'),
(167, '3604', 29, '2021-04-16 11:46:18', 0, 0, 'online'),
(168, '4284', 29, '2021-02-06 11:50:22', 0, 0, 'cod'),
(169, '4284', 29, '2021-02-06 11:50:22', 0, 0, 'cod'),
(170, '9338', 29, '2021-01-16 15:41:44', 0, 0, 'online'),
(171, '9338', 29, '2021-01-16 15:41:44', 0, 0, 'online'),
(175, '2686', 31, '2021-06-16 16:45:04', 1, 1, 'online'),
(176, '909', 31, '2021-06-16 16:09:46', 0, 2, 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) UNSIGNED NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(133, 36, 2, '6490', '2021-05-16 11:33:48', 31, 0, 0),
(134, 91, 1, '6490', '2021-05-16 11:33:48', 31, 0, 0),
(135, 97, 1, '6490', '2021-05-16 11:33:48', 31, 0, 0),
(136, 95, 1, '6490', '2021-05-16 11:33:48', 31, 0, 0),
(137, 93, 1, '6675', '2021-05-01 11:36:47', 31, 0, 0),
(138, 54, 1, '6675', '2021-05-01 11:36:47', 31, 0, 0),
(139, 88, 1, '6675', '2021-05-01 11:36:47', 31, 0, 0),
(140, 47, 1, '2999', '2021-04-01 11:39:05', 32, 0, 0),
(141, 35, 3, '5845', '2021-03-14 11:40:44', 32, 0, 0),
(142, 49, 1, '6429', '2021-06-16 11:43:56', 32, 0, 0),
(143, 91, 1, '3604', '2021-04-16 11:45:54', 29, 0, 0),
(144, 88, 1, '3604', '2021-04-16 11:45:54', 29, 0, 0),
(145, 99, 1, '3604', '2021-04-16 11:45:54', 29, 0, 0),
(146, 47, 1, '3604', '2021-04-16 11:45:54', 29, 0, 0),
(147, 23, 1, '4284', '2021-02-06 11:50:19', 29, 0, 0),
(148, 52, 1, '4284', '2021-02-06 11:50:19', 29, 0, 0),
(149, 26, 1, '9338', '2021-01-16 15:41:11', 29, 0, 0),
(150, 56, 1, '9338', '2021-01-16 15:41:11', 29, 0, 0),
(154, 38, 1, '2686', '2021-06-16 16:45:04', 31, 1, 1),
(155, 52, 1, '909', '2021-06-16 16:09:46', 31, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) UNSIGNED NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(29, 'trung', '0357640009', 'quan9', '123', 'trung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(31, 'hoang', '0357640008', 'quan9', 'test', 'hoang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(32, 'nhi', '0357640004', 'quan9', 'test', 'nhi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(33, 'cuong', '5465445465', 'Đường Võ Văn Hát - Phường Long Trường - Quận 9 - TP Thủ Đức', 'cuongpro', 'cuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(34, 'Nguyễn Mai Chí Trung', '0357640009', 'Hẻm 40 - Đường Võ Văn Hát - Phường Long Trường - Quận 9 - TP Thủ Đức', 'gmail chuẩn', 'trungnguyenhuynhnhi@gmail.com', 'fcbfaf22c2a4badc476e2649b65be46f', 1),
(36, 'k', 'k', 'k', 'k', 'k@gmail.com', '8ce4b16b22b58894aa86c421e8759df3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(21, 4, 'Điện thoại Galaxy A15', '- Chi tiết điện thoại', '- Mô tả điện thoại', '15000000', '14000000', 0, 0, 10, 'mk3.jpg'),
(22, 2, 'Tủ lạnh sony ', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '75000000', '68000000', 0, 0, 5, 'tulanh2.jpg'),
(23, 2, 'Tủ lạnh Samsung', '- 208 lít RT19M300BGS/SV', '- Tủ lạnh Samsung Inverter', '105000000', '94000000', 0, 0, 10, 'tulanh1.jpg'),
(26, 3, 'Máy giặt Samsung', '- Chi tiết máy giặt', '- Mô tả máy giặt', '105000000', '99000000', 0, 0, 10, 'maygiat1.jpg'),
(34, 1, 'Laptop DELL', '- Chi tiết : laptop', '- Mô tả : Laptop mầu đen', '15000000', '11200000', 0, 0, 20, 'laptop2.jpg'),
(35, 4, 'Điện thoại Iphone 11', '- Màu : Tím mộng mơ', '- Iphone 11 \r\n', '20000000', '16000000', 0, 0, 10, 'dienthoai1.jpg'),
(36, 4, 'Điện thoại Sam sung', '- Sum sung note 5', '- Màu : Vàng đồng', '11000000', '10000000', 0, 0, 10, 'dienthoai.jpg'),
(37, 3, 'Máy giặt LG', '- Hiệu quả hơn các máy giặt thông thường', '- Máy giặt chuẩn 5 sao', '20000000', '16000000', 0, 0, 20, 'maygiat2.jpg'),
(38, 3, 'Máy giặt Electrolux Inverter', '- Máy giặt Electrolux 9 Kg EWF9024BDWB sở hữu gam màu trắng trung tính, không chỉ thể hiện được vẻ đẹp sang trọng mà còn thuộc kiểu máy giặt cửa trước - mang phong cách đẳng cấp châu Âu, hứa hẹn sẽ làm cho ngôi nhà bạn trông hiện đại hơn.', '- Thiết kế tinh tế, đẳng cấp châu Âu.', '12000000', '10200000', 0, 0, 100, 'maygiat3.jpg'),
(39, 4, 'Điện thoại OPPO ', '- THIẾT KẾ MỚI ĐẦY SANG TRỌNG KHÔNG KÉM NHỮNG DÒNG OPPO CAO CẤP  .Được trang bị màn hình tràn viền,màn hình lớn 6.5 in,​Máy sử dụng tấm nền IPS LCD  tuy chỉ có độ phân giải  HD+ (720 x 1600 Pixels) nhưng vẫn cho chất lượng hiển thị màu sắc trung thực,giúp cho người sở hữu có những trải nghiệm tuyệt vời', '- Điện thoại OPPO A53', '13000000', '12000000', 0, 0, 10, 'dienthoa4.jpg'),
(41, 1, 'Laptop ACER', '- Core i5-10300H/ 8GB DDR4 3200MHz/ 512GB SSD M.2 PCIE/ GTX 1650Ti 4GB GDDR6/ 15.6 FHD IPS, 144Hz/ Win10', '- Laptop Acer Nitro 5 2020 AN515-55-5923 NH.Q7NSV.004', '23000000', '19699000', 0, 0, 100, 'laptop3.jpg'),
(42, 2, 'Tủ lạnh Toshiba', '- 608 lít ngăn đá trênHãng sản xuấtToshibaXuất xứThái LanBảo hành02 NămMàu sản phẩm Màu gương thuỷ tinh(X) ...', '- Tên sản phẩmTủ lạnh Toshiba GR-AG66VA (X) ', '20000000', '17900000', 0, 0, 20, 'tulanh3.jpg'),
(43, 1, 'Laptop HP', '- i3-1005G1/4GB RAM/256GB SSD/15.6\"HD/Win10/Bạc', '- Laptop HP 15s-fq1107TU 193Q3PA ', '24000000', '22000000', 0, 0, 50, 'laptop4.jpg'),
(47, 4, 'Điện thoại Iphone 12 PM', '- Chi tiết điện thoại', '- Mô tả điện thoại', '34000000', '31000000', 0, 0, 50, 'dienthoa5.jpg'),
(48, 3, 'Máy giặt AQUA', '- Chi tiết máy giặt', '- Mô tả máy giặt', '16000000', '15000000', 0, 0, 20, 'maygiat4.jpg'),
(49, 3, 'Máy giặt TOSHIBA', '- Chi tiết máy giặt', '- Mô tả máy giặt', '60000000', '55000000', 0, 0, 20, 'maygiat5.jpg'),
(50, 4, 'Điện thoại nokia ', '- Chi tiết điện thoại', '- Mô tả điện thoại', '11000000', '10000000', 0, 0, 100, 'dienthoa6.jpg'),
(51, 3, 'Máy giặt LG AI DD', '- Chi tiết máy giặt', '- Mô tả máy giặt', '30000000', '25000000', 0, 0, 70, 'maygiat6.jpg'),
(52, 1, 'Macbook Air', '- Chi tiết laptop', '- Mô tả laptop', '24000000', '23000000', 0, 0, 100, 'laptop5.jpg'),
(53, 1, 'Laptop ASUS', '- Chi tiết laptop', '- Mô tả laptop', '24000000', '21000000', 0, 0, 50, 'laptop6.jpg'),
(54, 1, 'Laptop SONY VAIO', '- Chi tiết laptop', '- Mô tả laptop', '24000000', '22000000', 0, 0, 50, 'laptop7.jpg'),
(55, 2, 'Tủ lạnh PANASONIC', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '18000000', '17000000', 0, 0, 20, 'tulanh6.jpg'),
(56, 2, 'Tủ lạnh HITACHI', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh\r\n', '60000000', '55000000', 0, 0, 20, 'tulanh5.jpg'),
(57, 2, 'Tủ lạnh AQUA', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '40000000', '38000000', 0, 0, 20, 'tulanh4.jpg'),
(86, 4, 'Điện thoại Mi10', '- Chi tiết điện thoại', '- Mô tả điện thoại', '11000000', '10000000', 0, 0, 30, 'dienthoa7.jpg'),
(87, 4, 'Điện thoại HUAWEI', '- Mô tả điện thoại', '- Mô tả điện thoại\r\n', '13900000', '12900000', 0, 0, 20, 'dienthoa8.jpg'),
(88, 4, 'Điện thoại VSMart', '- Chi tiết điện thoại', '- Mô tả điện thoại', '34900000', '31900000', 0, 0, 50, 'dienthoa9.jpg'),
(91, 1, 'Laptop RAZER', '- Chi tiết laptop', '- Mô tả laptop\r\n- Chi tiết laptop', '40000000', '37000000', 0, 0, 50, 'laptop9.jpg'),
(92, 1, 'Laptop Surface', '- Chi tiết laptop', '- Mô tả laptop', '35000000', '32700000', 0, 0, 50, 'laptop8.jpg'),
(93, 1, 'Laptop LENOVO', '- Chi tiết laptop', '- Mô tả laptop', '12390000', '11350000', 0, 0, 60, 'laptop10.jpg'),
(94, 3, 'Mát giặt ELECTROLUX O1A', '- Chi tiết máy giặt', '- Mô tả máy giặt', '26490000', '24999000', 0, 0, 50, 'maygiat7.jpg'),
(95, 3, 'Mát giặt SS Inverter 9', '- Chi tiết máy giặt', '- Mô tả máy giặt', '17000000', '15999000', 0, 0, 50, 'maygiat8.jpg'),
(96, 3, 'Mát giặt SS Add Wash', '- Chi tiết máy giặt', '- Mô tả máy giặt', '21900000', '20000000', 0, 0, 50, 'maygiat9.jpg'),
(97, 2, 'Tủ lạnh LG GR-X22MC', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '43990000', '41990000', 0, 0, 50, 'tulanh7.jpg'),
(98, 2, 'Tủ lạnh Bosch KAD90VB20', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '57900000', '56900000', 0, 0, 50, 'tulanh8.jpg'),
(99, 2, 'Tủ lạnh HF-SBSIC', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '69900000', '67500000', 0, 0, 50, 'tulanh9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `review_id` (`review_id`,`user_name`,`user_rating`,`user_review`,`datetime`) USING HASH;

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_ctdh`
--
ALTER TABLE `tbl_ctdh`
  ADD PRIMARY KEY (`ctdh_id`);

--
-- Indexes for table `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Indexes for table `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ctdh`
--
ALTER TABLE `tbl_ctdh`
  MODIFY `ctdh_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
