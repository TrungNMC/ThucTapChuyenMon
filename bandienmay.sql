-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2021 lúc 04:58 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandienmay`
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(9, 'trung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'trung'),
(10, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(13, 'nhi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'nhi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'Bài 1 : Hệ điều hành cài trên điện thoại .', 'Trên thị trường hiện nay (2020) ngoài điện thoại iPhone của Apple sử dụng hệ điều hành iOS thì hều hết các điện thoại thông mình khác đều được cài hệ điều hành Android. Android và iOS là 2 hệ điều hành thống trị thị trường hệ điều hành trên Smartphone, hệ điều hành Android hiện được nhiều người sử dụng nhất thế giới chiếm trên 80%.', 'Trên thị trường hiện nay (2020) ngoài điện thoại iPhone của Apple sử dụng hệ điều hành iOS thì hều hết các điện thoại thông mình khác đều được cài hệ điều hành Android. Android và iOS là 2 hệ điều hành thống trị thị trường hệ điều hành trên Smartphone, hệ điều hành Android hiện được nhiều người sử dụng nhất thế giới chiếm trên 80%.', 4, 'b1.jpg'),
(2, 'Bài 1 : Hãng máy giặt nào tốt nhất hiện nay ?', 'Hiện tại mới là đầu năm, có thể nhiều hàng chưa ra, vì thế bài viết này chỉ viết cho sản phẩm đang có. Có rất nhiều hãng máy giặt ở VN, nhưng phổ biến nhất và bán chạy nhất vẫn là 2 hãng LG và Elecs đối với máy lồng ngang; Sanyo, Toshiba, Panasonic đối với máy lồng đứng.', 'LG: Dòng máy lồng ngang khá là đa dạng về kg từ 7kg-7.5kg-8kg-13kg… Đặc biệt dòng lồng ngang của LG 2013 sử dụng toàn bộ dẫn động trực tiếp Inverter. Các mẹ nên mua dòng có tính năng giặt 6 motion như WD-8600/9600/10600/11600/13600/14600/15600/14660(thái lan)/15660(thái lan)/19600/20600/23600/25600, 17DW (Hàn quốc)… (sang năm nay theo đánh giá của mình thì các sp của LG sẽ gần như đạt 100% sử dụng công nghệ giặt này. Với LG mình vote cho dòng lồng ngang.\r\nCác dòng không có sấy giá khá dễ chịu từ 8 tr cho model 8600 đến 16.5tr cho model WD-17DW. Các dòng có sấy của LG thì đều thuộc dòng sấy thông hơi, giá tương đối đắt đỏ, thực sự so với mua sấy rời hoặc máy giặt sấy của Elecs thì ko đáng mua bằng.Các dòng cửa đứng của LG ko thực sự nổi trội so với cửa ngang. Công nghệ giặt của dòng này, sau thời gian kiểm chứng thì không tối ưu bằng các công nghệ giặt của máy Toshi, pana hay Sanyo.\r\n\r\nElectrolux: Dòng 2014 của hãng vẫn sử dụng dẫn động dây cuaroa. Elec giặt vẫn rất sạch có tiếng nên mọi người vẫn mua nhiều. Công nghệ giặt cho các dòng máy 2014 của hãng là giặt phun nước. Máy Elec thường có tự trọng nặng hơn các máy hãng khác cùng dòng. Các model cao cấp nhất của hãng có giá rất cạnh tranh và cũng có công nghệ Inverter kèm tốc độ vắt khá ấn tượng (vắt khá khô). Với các model thường, vì dẫn động dây cuaroa và động cơ thường nên máy thường vắt ồn hơn các dòn máy dẫn động trực tiếp khác. Quả thực mình không ấn tượng lắm về dòng này, giá tuy có giảm nhưng ko hấp dẫn lắm. Với dòng cao cấp thì nên chọn vì giá cạnh tranh. Chú ý là bơm nước tuần hoàn sẽ hơi ồn một chút, các bạn cân nhắc khi đặt máy gần phòng ngủ. Elec phân ra các mã như EWF-… là mã máy giặt không kèm sấy; EWW-…là mã máy giặt có sấy. Với model 2013 đầu 2014 thì số cuối là 2. Một số mã mà mình thấy đáng mua nhất của dòng không sấy là: EWF 14012 (No 1); EWF-10932(s); EWW 12732(s)– của dòng có sấy là: EWW 14012; EWF 1122DW\r\nCác dòng cửa đứng của Elecs đa số là dòng có kg lớn và cũng ko thực sự ấn tượng.\r\n\r\nPanasonic: Model cửa ngang dẫn động trực tiếp cũng tốt, nhưng người dùng gần như không có chọn lựa vì hiện giờ có đúng 1 mẫu đang được bán chính hãng là NA-148VG3 giá 14tr…. SP của Pana đa số có xuất xứ từ Pana Trung Quốc nên cũng kén người mua. Máy Pana hiện có ở VN thuộc dòng VG3, dòng gần nhất hiện nay trên thế giới là VG4.\r\nVề máy giặt cửa đứng thì Pana vẫn khá tốt, rẻ, bền. Mỗi điều là tốc độ vắt của máy Pana hơi thấp, thấp hơn Toshiba nên mình không ấn tượng bằng Toshiba.\r\n\r\nToshiba: Hãng này thì mạnh về máy cửa đứng, đặc biệt là các dòng dẫn động trực tiếp. Cửa ngang của 2 hãng này vẫn dùng dây cuaroa như Elecs, giá cao vì thế ít người dùng. Model lồng đứng của hãng thuộc top máy lồng đứng tốt nhất thị trường. Đó là DC-1000CV; DC1005CV; D990SV (máy này chắc khó mà mua dc, vì là sp 2012); một số máy 10kg…\r\n\r\nSanyo: Hiện tại đang có ở VN và phổ biến nhất là các máy lồng đứng. Máy lồng ngang có các model 7kg là ASW-700T (dẫn động thường, giá rẻ); D700T; D700VT (dẫn động trực tiếp, giá cạnh tranh, phổ biến dưới 9.5tr). Máy lồng nghiêng có 2 model 8kg là D800T (ko sấy) và D800HT (có sấy). Máy lồng đứng đáng mua nhất là Sanyo S80ZT.\r\n\r\nSamsung:  samsung  ko thực sự ấn tượng về máy giặt, chỉ có các model đầu bảng dẫn động trực tiếp inverter như 0894 là đáng mua khi giá phù hợp.\r\n\r\nHitachi: Máy giặt Hitachi vào Việt nam cũng khá lâu nhưng hơi kén khách. Về lồng đứng thì có nhiều nhưng giá cao, cao hơn cả Toshi, đa số là dòng dẫn động thường, vì thế khó cạnh tranh. Về máy lồng ngang thì hiện tại đã có model của Hitachi dẫn động trực tiếp (khá êm); tuy nhiên hàng này tương đối đắt đỏ; 7kg mà giá cũng phải 15-16tr nên thực sự là 1 bài toán khó cho người mua, hãng có đại diện ở Vn nhưng có nhiều linh kiện độc quyền.\r\n\r\nCác thương khác: Miele, Maytag,… khá tốt, nhưng giá cao, ít nơi bán nên không phổ biến.\r\n\r\nCác thương hiệu TQ như Haier, Midea… giá cạnh tranh, máy nào giá càng cao thì chạy càng ít hỏng vặt.', 2, 'kienthucmaygiat1.jpg'),
(3, 'Bài 1 : Cấu tạo của tủ lạnh, các bộ phận chính và chức năng từng bộ phận', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'kienthuctulanh1.jpg'),
(5, 'Giặt Cảm Biến Thông Minh AI Wash', 'Bài 5 : AI Wash trang bị 4 loại cảm biến để nhận biết khối lượng và phân tích độ bẩn áo quần; từ đó tự động tối ưu thời gian giặt, phân bổ chính xác lượng nước giặt xả và lượng nước phù hợp; giúp giặt sạch hoàn hảo.', 'AI Wash trang bị 4 loại cảm biến để nhận biết khối lượng và phân tích độ bẩn áo quần; từ đó tự động tối ưu thời gian giặt, phân bổ chính xác lượng nước giặt xả và lượng nước phù hợp; giúp giặt sạch hoàn hảo.', 2, 'kienthucmaygiat2.jpg'),
(7, 'Bài 2 : Thương hiệu Smartphone', 'Thương hiệu của một sản phẩm cũng là điều làm cho nhiều người phân vân, có những người lựa chọn điện thoại chỉ đơn giản vì thương hiệu của nó mà không hề quan tâm đến cấu hình, đây là sở thích của mỗi người , thời điểm hiện tại thì Samsung và iPhone là 2 cái tên nhận được nhiều sự quan tâm nhất. Bên cánh đócũng có khá nhiều sự lựa chọn cho bạn đến từ các tên tuổi như: Nokia, Sony, htc, oppo, vivo, Huawei, xiaomi, realme, philips, Vsmart, Asus,…', 'Thương hiệu của một sản phẩm cũng là điều làm cho nhiều người phân vân, có những người lựa chọn điện thoại chỉ đơn giản vì thương hiệu của nó mà không hề quan tâm đến cấu hình, đây là sở thích của mỗi người , thời điểm hiện tại thì Samsung và iPhone là 2 cái tên nhận được nhiều sự quan tâm nhất. Bên cánh đócũng có khá nhiều sự lựa chọn cho bạn đến từ các tên tuổi như: Nokia, Sony, htc, oppo, vivo, Huawei, xiaomi, realme, philips, Vsmart, Asus,…', 4, 'b4.jpg'),
(8, 'Bài 1 : Chọn Mac, Windows hay hệ điều hành khác?', 'Hệ điều hành là tiêu chí đầu tiên mà người dùng cân nhắc khi lựa chọn một chiếc laptop. Trước đây khi mà thị trường hệ điều hành còn hẹp thì việc lựa chọn của chúng ta dễ dàng hơn khi chỉ có MacOS của Apple và Windows của Microsoft. Nhưng hiện nay chúng ta có nhiều sự lựa chọn hơn khi Chrome OS, Ubuntu và một số các hệ điều hành khác đang dần phát triển và hướng đến mục đích làm cho máy tính có mức giá phải chăng hơn. ', 'Cho đến nay thì phần lớn máy tính đều dùng hệ điều hành Windows là chủ yếu bởi vì nhiều lý do, phần lớn trong số đó là việc Windows được cập nhật một cách thường xuyên, cũng như là phần lớn các nhà phát triển game và các phần mềm kinh doanh xem đây như là hệ điều hành tiêu chuẩn cho các sản phẩm.\r\n\r\nHiện tại, trên thị trường các dòng sản phẩm chạy Windows có rất nhiều kích cỡ cùng thiết kế. Phổ biến nhất thường thấy đó là các dòng máy tính kiểu dáng vỏ sò cổ điển với một bên là màn hình và một bên là bàn phím cùng trackpad.\r\n\r\nNgoài ra, còn có cách loại khác như màn hình cảm ứng, màn hình gập hay màn hình và bàn phím có thể tách rời ra cũng đang dần được các nhà sản xuất ngày càng tung ra nhiều hơn, gần đây đặc biệt có thể kể đến đó là dòng Surface của Microsoft. Đây cũng là một trong những đặc thù mà các dòng máy Macbook của Apple không có được nếu không tính đến Touchbar.\r\n\r\nKhác với các dòng máy của Apple thì các dòng máy dùng Windows sẽ có đa dạng phần cứng hơn khi có rất nhiều các sản phẩm đến từ nhiều hãng sản xuất như Lenovo, Dell, Asus,…', 3, 'b2.jpg'),
(9, 'Bài 2 : Những điều cần biết về phần cứng ?', 'Đối với một chiếc laptop thì phần cứng sẽ là phần quyết định được thiết bị đó sẽ hoạt động như thế nào. Một phần cứng tốt cũng sẽ đắt hơn những cái yếu hơn, vậy nên xem xét phần cứng sao cho phù hợp với nhu cầu sử dụng sẽ giúp cho người dùng tiết kiệm được một khoản chi phí không cần thiết. Chiếc laptop chỉ phục vụ cho việc lướt web, đọc viết tài liệu sẽ không cần đến một bộ xử lý mạnh mẽ hay card đồ họa.', 'CPU/ Bộ xử lý\r\nTrong máy vi tính thì CPU sẽ là bộ phận xử lý hầu hết các tác vụ xử lý hoặc tính toán. Đồng nghĩa rằng CPU càng tốt thì tốc độ xử lý càng nhanh. Tuy nhiên, có một lưu ý là xung nhịp của CPU không nói lên tất cả, nó còn phụ thuộc thêm rất nhiều thứ. Nếu bạn không phải là một người có hiểu biết giới hạn về CPU thì các đơn giản nhất tìm kiếm trên mạng các bài so sánh cũng như đánh giá về con chip mà bạn chọn.\r\nNhìn chung, các dòng CPU mới nhất hiện nay của Intel là Core i3, i5 và i7 thế hệ thứ 8 nếu như chúng ta bỏ qua một vài thiết bị đã bắt đầu đưa những con chip thế hệ thứ 9 lên một vài dòng máy chơi gaming. Tuy nhiên nó vẫn là một số ít. Bên cạnh đó thì AMD cũng đã ra mắt thế hệ chip thứ 3 của mình dù hơi khó tìm những chiếc máy chạy dòng chip này.\r\n\r\nLựa chọn những dòng CPU mới nhất luôn là lựa chọn tốt nhất khi có thể. Nếu chi phí không cho phép thì cũng đừng lựa chọn các thế hệ chip quá cũ. Thêm vào đó nếu bạn không làm việc về xử lý hình ảnh hay đồ họa thì các chip dòng trung cũng là một sự lựa chọn tốt nếu so giữa một con chip i5 thế hệ mới và i7 thế hệ cũ.', 3, 'kienthuclaptop2.jpg'),
(10, 'Bài 2 : Những lưu ý khi sử dụng tủ lạnh ', 'Khi sử dụng tủ lạnh bạn cần lưu ý những điều sau để đảm bảo an toàn, tiết kiệm điện và tăng tuổi thọ cho tủ lạnh:', 'Nên đặt tủ lạnh cách tường tối thiểu 10 cm để đảm bảo lưu thông không khí làm mát dàn lạnh.\r\nNên vệ sinh tủ lạnh thường xuyên, khoảng nửa tháng một lần hoặc ít nhất là 1 lần mỗi tháng để tránh cho vi khuẩn có điều kiện sinh sôi, phát triển. Hãy bắt đầu bằng việc vặn nút điều chỉnh từ vị trí (ON) hoặc (OFF) để ngắt điện tủ lạnh hoặc rút nguồn ra. Lấy toàn bộ thực phẩm, giá đỡ trong tủ ra ngoài. Mở cửa tủ để tuyết trên ngăn đá tan chảy (không dùng dao, hay vật cứng để cạy tuyết trên ngăn đá), sau đó dùng khăn mềm lau khô.\r\nKhi cọ rửa tủ lạnh cần tránh tình trạng để nước đọng lại ở đáy tủ. Nên để tủ lạnh trở lại rồi mới đặt thực phẩm vào trong.\r\nKhoảng 1 tháng 1 lần cho tủ lạnh nghỉ ngơi 30 phút bằng cách vặn nút điều chỉnh (thermostat) về vị trí (ON) hoặc (OFF), sau đó để tủ chạy bình thường.\r\nKhông nên nhồi nhét quá nhiều thứ vào tủ lạnh vì cần có đủ không gian để không khí trong tủ lạnh lưu thông tốt.\r\nHạn chế mở tủ lạnh nhiều lần và thời gian mở lâu quá mức cần thiết. Làm như thế sẽ tiêu hao một lượng điện. Cũng không nên che kín các giá để thực phẩm trong tủ lạnh.\r\nKhông nên để thức ăn nóng trong tủ lạnh, vì sẽ làm ảnh hưởng đến bộ dàn làm mát, giảm tuổi thọ của tủ lạnh.\r\nKhi tủ lạnh tắt hoặc khởi động mà nghe tiếng kêu, có thể các vít bắt của dàn lạnh bị lỏng. Nên rút điện và đệm thêm miếng cao su vào, xiết chặt.\r\nNên làm sạch các loại đồ ăn thức uống trước khi cho vào tủ. Các loại thực phẩm có mùi đặc trưng, hay thức ăn mặn nên bỏ vào túi hay hộp kín rồi mới cho vào tủ lạnh, tránh tình trạng phát tán mùi, bay hơi mặn gây hiện tượng ăn mòn tủ lạnh.\r\nKhi tủ lạnh không lạnh có thể do tủ lạnh chứa nhiều thực phẩm hoặc núm công tắc (rơ le) để không phù hợp. Nên lấy bớt thực phẩm ra ngoài, vặn núm công tắc lên nhiệt độ lạnh hơn. Kiểm tra lại độ lạnh sau khi điều chỉnh.', 1, 'kienthuctulanh2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Laptop'),
(2, 'Tủ lạnh'),
(3, 'Máy giặt'),
(4, 'Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_tin`
--

CREATE TABLE `tbl_danhmuc_tin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_tin`
--

INSERT INTO `tbl_danhmuc_tin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Kiến thức tủ lạnh'),
(2, 'Kiến thức máy giặt'),
(3, 'Kiến thức laptop'),
(4, 'Kiến thức Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`) VALUES
(46, 21, 1, '9254', 29, '2021-05-26 00:51:28', 0, 0),
(47, 26, 2, '9254', 29, '2021-05-26 00:51:28', 0, 0),
(51, 24, 4, '840', 29, '2021-06-03 03:54:07', 1, 1),
(52, 21, 6, '840', 29, '2021-06-03 03:54:07', 1, 1),
(53, 20, 1, '840', 29, '2021-06-03 03:54:07', 1, 1),
(54, 26, 1, '8652', 30, '2021-05-26 04:20:07', 0, 0),
(55, 21, 1, '5384', 29, '2021-05-28 15:06:16', 1, 0),
(56, 26, 1, '5384', 29, '2021-05-28 15:06:16', 1, 0),
(61, 17, 1, '7146', 29, '2021-05-29 06:20:15', 0, 0),
(65, 21, 1, '8243', 29, '2021-06-02 11:03:51', 1, 2),
(66, 35, 2, '1312', 31, '2021-05-31 14:11:45', 0, 0),
(67, 36, 1, '521', 29, '2021-06-01 09:10:49', 0, 0),
(68, 36, 1, '3172', 29, '2021-04-01 09:12:26', 1, 0),
(69, 37, 4, '4016', 29, '2021-03-01 09:16:48', 0, 0),
(70, 36, 1, '7782', 29, '2021-02-01 09:17:58', 0, 0),
(71, 36, 3, '2615', 32, '2021-01-02 09:29:37', 1, 1),
(73, 52, 1, '4703', 33, '2021-01-04 10:01:03', 1, 0),
(74, 47, 1, '4703', 33, '2021-01-04 10:01:03', 1, 0),
(75, 56, 1, '4703', 33, '2021-01-04 10:01:03', 1, 0),
(76, 48, 1, '9542', 33, '2021-06-04 10:06:47', 1, 0),
(77, 50, 1, '9542', 33, '2021-06-04 10:06:47', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(23, 21, 1, '9254', '2021-05-26 00:51:28', 29, 0, 0),
(24, 26, 2, '9254', '2021-05-26 00:51:28', 29, 0, 0),
(28, 24, 4, '840', '2021-06-03 03:54:07', 29, 1, 1),
(29, 21, 6, '840', '2021-06-03 03:54:07', 29, 1, 1),
(30, 20, 1, '840', '2021-06-03 03:54:07', 29, 1, 1),
(31, 26, 1, '8652', '2021-05-26 04:20:07', 30, 0, 0),
(32, 21, 1, '5384', '2021-05-28 15:06:16', 29, 1, 0),
(33, 26, 1, '5384', '2021-05-28 15:06:16', 29, 1, 0),
(38, 17, 1, '7146', '2021-05-29 06:20:15', 29, 0, 0),
(42, 21, 1, '8243', '2021-06-02 11:03:51', 29, 1, 2),
(45, 35, 2, '1312', '2021-05-31 14:11:45', 31, 0, 0),
(46, 36, 1, '521', '2021-06-01 09:10:49', 29, 0, 0),
(47, 36, 1, '3172', '2021-06-01 09:12:26', 29, 1, 0),
(48, 37, 4, '4016', '2021-06-01 09:16:48', 29, 0, 0),
(49, 36, 1, '7782', '2021-06-01 09:17:58', 29, 0, 0),
(50, 36, 3, '2615', '2021-06-02 09:29:37', 32, 1, 1),
(52, 52, 1, '4703', '2021-01-04 10:01:03', 33, 1, 0),
(53, 47, 1, '4703', '2021-01-04 10:01:03', 33, 1, 0),
(54, 56, 1, '4703', '2021-01-04 10:01:03', 33, 1, 0),
(55, 48, 1, '9542', '2021-06-04 10:06:47', 33, 1, 0),
(56, 50, 1, '9542', '2021-06-04 10:06:47', 33, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(29, 'trung', '0357640009', 'quan9', '123', 'trung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(31, 'hoang', '0357640008', 'quan9', 'test', 'hoang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(32, 'nhi', '0357640009', 'quan9', 'test', 'nhi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(33, 'cuong', '5465445465', 'Đường Võ Văn Hát - Phường Long Trường - Quận 9 - TP Thủ Đức', 'cuongpro', 'cuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(34, 'Nguyễn Mai Chí Trung', '0357640009', 'Hẻm 40 - Đường Võ Văn Hát - Phường Long Trường - Quận 9 - TP Thủ Đức', 'gmail chuẩn', 'trungnguyenhuynhnhi@gmail.com', 'fcbfaf22c2a4badc476e2649b65be46f', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
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
(57, 2, 'Tủ lạnh AQUA', '- Chi tiết tủ lạnh', '- Mô tả tủ lạnh', '40000000', '38000000', 0, 0, 20, 'tulanh4.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
