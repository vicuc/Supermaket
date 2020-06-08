-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 04:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptrinhweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `so_luong_sp` int(11) NOT NULL,
  `id_donhang` int(10) UNSIGNED DEFAULT NULL,
  `id_hanghoa` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`id`, `so_luong_sp`, `id_donhang`, `id_hanghoa`) VALUES
(1, 1, 26, 21),
(2, 1, 27, 22),
(3, 1, 28, 26),
(4, 1, 29, 27);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_donhang` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_donhang` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `id_khachhang` int(10) UNSIGNED DEFAULT NULL,
  `nguoi_duyet` int(10) UNSIGNED DEFAULT NULL,
  `ngay_dat` datetime NOT NULL,
  `address_order` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_order` int(11) NOT NULL,
  `name_order` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `city_order` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `ma_donhang`, `gia_donhang`, `trang_thai`, `id_khachhang`, `nguoi_duyet`, `ngay_dat`, `address_order`, `phone_order`, `name_order`, `city_order`) VALUES
(25, 'DH0025', 57000, 0, 3, NULL, '2019-11-16 18:44:34', 'ádasd', 762999994, 'Bánh Bao', 'ádasd'),
(26, 'DH0026', 460000, 3, 6, NULL, '2019-11-18 21:56:21', 'ádasdasd', 762999994, 'Huỳnh Gia Hưng', 'ádasdasd'),
(27, 'DH0027', 670000, 1, 6, NULL, '2019-11-19 22:53:41', 'dfdsfsfsf', 762999994, 'Bánh Bao', 'sdfdsfsd'),
(28, 'DH0028', 49000, 2, 6, NULL, '2019-11-19 22:53:55', 'fsdf', 762999994, 'Bánh Bao', 'sdfsdfsdf'),
(29, 'DH0029', 890000, 4, 6, NULL, '2019-11-19 22:55:12', 'sdad', 762999994, 'Bánh Bao', 'ádasd');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `ms_hh` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_hh` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `gia_hh` int(11) NOT NULL,
  `gia_km` int(11) DEFAULT NULL,
  `trong_luong` float NOT NULL,
  `soluong_hang` int(11) NOT NULL,
  `ma_nhom` int(10) UNSIGNED NOT NULL,
  `hinh_anh` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_bat` int(11) DEFAULT NULL,
  `ngay_lap` datetime NOT NULL,
  `update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `ms_hh`, `ten_hh`, `gia_hh`, `gia_km`, `trong_luong`, `soluong_hang`, `ma_nhom`, `hinh_anh`, `mo_ta`, `noi_bat`, `ngay_lap`, `update`) VALUES
(21, 'HH0021', 'Bộ hộp cơm giữ nhiệt', 546000, 460000, 500, 2, 5, 'dizXr_8f9646eaa1529cbdd2d437e393a74c56.jpg', '<p>Gồm 3 hộp: Hộp cơm 460ml, 2 hộp thức ăn 420ml và 280ml, 1 túi đựng, 1 đôi đũa&nbsp;</p><p>Thiết kế sang trọng, đường nét tinh tế&nbsp;</p><p>Chất liệu thép không gỉ 304, an toàn khi dùng&nbsp;</p><p>Giữ nhiệt đến 8 tiếng, giúp thức ăn luôn thơm ngon&nbsp;</p><p>Nút thoát khí có thể điều chỉnh bằng tay Hộp cơm lớn có khả năng giữ nhiệt, 2 hộp nhỏ không có khả năng giữ nhiệt Bộ 3 Hộp Cơm Giữ Nhiệt Lock&amp;Lock Mushroom LHC8025SLV - Bạc dùng để đựng thực phẩm, thích hợp để sử dụng hằng ngày.</p><p>&nbsp;</p>', NULL, '2019-11-16 23:46:19', '2019-11-16 23:46:19'),
(22, 'HH0022', 'Bộ nồi inox', 856000, 670000, 1, 4, 5, 'Iyg5S_1_dsnc.png', '<p>ĐẶC ĐIỂM CỦA BỘ NỒI NAGAKAWA:&nbsp;</p><p>BỘ GỒM 3 NỒI VỚI ĐƯỜNG KÍNH 16CM - 20CM - 24CM - Bộ nồi gồm: + Size 16cm, cao 9.5cm + Size 20cm, cao 11.5cm + Size 24cm, cao 13.5cm</p><p>&nbsp; CHẤT LIỆU INOX SIÊU BỀN, CHỐNG HOEN RỈ - Inox là loại vật liệu cứng, chịu được va đập rất tốt, là chất liệu được ưa chuộng sử dụng trong sản xuất trong lĩnh vực gia dụng như nồi, chảo,....Ngoài ra, inox hầu như không hoen rỉ và trơ với các thành phần có trong thức ăn nên rất an toàn cho sức khỏe, nó chống bám dính cũng rất tốt nên vệ sinh dễ dàng hơn - Bộ nồi sử dụng inox sẽ bền hơn, dễ vệ sinh hơn so với nồi nhôm thông thường</p>', 0, '2019-11-16 23:48:53', '2019-11-16 23:48:53'),
(23, 'HH0023', 'Rau xà lách', 55000, 49000, 1, 1, 6, 'gxVNZ_xa-lach-4-1500628001333-p0lom.jpg', '<p>Rau được trồng nhà kính&nbsp;</p><p>An toàn&nbsp;</p><p>không sử dụng thuốc hóa học</p>', 0, '2019-11-16 23:53:18', '2019-11-16 23:53:18'),
(24, 'HH0024', 'Cà chua', 78000, 69000, 1, 1, 6, 'qyJ8t_709428279692.jpg', '<p>Cà chua được nhập khẩu từ Ấn Độ</p>', 0, '2019-11-16 23:55:41', '2019-11-16 23:55:41'),
(25, 'HH0025', 'Dưa leo nhập khẩu', 45000, 40000, 1, 1, 6, 'NEwXN_dua-chuot-01.jpg', '<p>Dưa leo được trồng với quy trình nghiêm ngặc,&nbsp;</p><p>quả giòn và nhiều dinh dưỡng</p>', 0, '2019-11-16 23:57:18', '2019-11-16 23:57:18'),
(26, 'HH0026', 'Khổ qua', 55000, 49000, 1, 1, 6, '1NZxi_of10.png', '<p>Chưa cập nhật</p>', NULL, '2019-11-16 23:59:27', '2019-11-16 23:59:27'),
(27, 'HH0027', 'Cherry Mỹ', 980000, 890000, 1, 1, 7, 'ZGxIX_hinh-anh-qua-cherry-dep-nhat-the-gioi_012226392.jpg', '<p>Cherry được ví như “Kim cương của hoa quả”, trái cherry đỏ Mỹ, căng mọng chính là nguồn cung cấp vitamin dồi dào cho cơ thể.&nbsp;Nhờ các chất dinh dưỡng quan trọng như Vitamin A, chất sát, chất xơ, chất béo không cholesterol… nên trái Cherry rất tốt cho sức khỏe và ngăn ngừa bệnh tật.</p>', NULL, '2019-11-17 00:01:41', '2019-11-17 00:01:41'),
(28, 'HH0028', 'Dâu tây', 560000, 490000, 1, 1, 7, 'Z193i_hinh-anh-dau-tay-chin-ngot-lim-16.jpg', '<p>Dâu đất hay còn gọi là dâu tây là loại quả được rất nhiều người ưa chuộng, dâu tây có xuất xứ từ Châu Mỹ và ngày nay dâu tây xuất hiện hầu hết các quốc gia trên thế giới. Dâu tây có màu đỏ bắt mắt, có vị chua ngọt rất hấp dẫn. Trong thực phẩm dâu tây dùng làm sinh tố, trái cây trộn, hương liệu hoặc dùng ăn tươi đều được. Ở Việt Nam dâu tây được trồng nhiều nhất ở ĐL bởi thời tiết ở đây rất mát mẻ.</p>', NULL, '2019-11-17 00:03:02', '2019-11-17 00:03:02'),
(29, 'HH0029', 'Sầu riêng', 210000, 190000, 1, 1, 7, 'GyIpk_bi-vo-sinh-hiem-muon-hay-an-sau-rieng11525744516.PNG', '<p><strong>Sầu riêng chín</strong> tự nhiên và sầu chín rụng có đặc điểm là ngon hơn, béo hơn và thơm hơn, đặc biệt là an toàn cho sức khỏe hơn các loại sầu khác. Nhưng nếu bạn sống ở Hà Nội thì việc được ăn sầu chín tự nhiên hằng ngày là không hề đơn giản. Vì trái sầu riêng chỉ sống tại khu vực phía Nam mà vận chuyển ra Hà Nội phải mất mấy ngày. Khi đó các trái sầu chín tới hoặc gần chín sẽ bị hỏng hoặc kém chất lượng, cơm sầu sẽ bị chua, rất khó ăn.</p><p>&nbsp;</p><p>Tuy nhiên, nhận thấy số lượng khách hàng \"ghiền\" sầu riêng có số lượng lớn. Do đó, Donavi đã hợp tác với các nhà vườn nổi tiếng ở đất trồng sầu để chọn những trái sầu chín, hoặc chuẩn bị chín để vận chuyển ra Hà Nội phục vụ khách hàng. Sản phẩm được vận chuyển bằng đường hàng không, đảm bảo trái sầu vừa chín đến độ ngon, giao tới tận tay người tiêu dùng những múi sầu ngọt, béo và thơm ngất ngây.</p>', NULL, '2019-11-17 00:04:59', '2019-11-17 00:04:59'),
(31, 'HH0031', 'Bồn rữa chén hai ngăn', 2100000, 1990000, 1, 1, 8, 'Xk3va_chon_do_dung_nha_bep_3.jpg', '<p>chưa cập nhật</p>', 0, '2019-11-17 00:08:08', '2019-11-17 00:08:08'),
(32, 'HH0032', 'Bộ dùng cụ làm bếp bằng gổ', 380000, 280000, 1, 1, 8, 'X7guG_do-gia-dung-15.jpg', '<p>Sản phẩm được làm từ gỗ tự nhiên với công nghệ sơn Hàn Quốc</p>', 0, '2019-11-17 00:11:32', '2019-11-17 00:11:32'),
(33, 'HH0033', 'Bộ gia dụng bằng nhựa cao cấp', 250000, 210000, 1, 1, 8, 'Yq0xK_dung-cu-lam-bep.jpg', '<p>Bộ gia dụng bằng nhựa cao cấp được nhập khẩu từ Nhật Bản&nbsp;</p>', 0, '2019-11-17 00:13:30', '2019-11-17 00:13:30'),
(34, 'HH0034', 'Nước ép ổi', 25000, 25000, 1, 1, 9, 'vKpFE_25k-nuoc-ep-oi-330ml.jpg', '<p>Nguyên chất 100% từ ổi</p>', 0, '2019-11-17 00:17:33', '2019-11-17 00:17:33'),
(35, 'HH0035', 'Nước ép dâu tây', 65000, 65000, 1, 1, 9, '601Wv_nuoc-cot-dau-tay.jpg', '<p>100% nguyên chất từ dâu tây</p>', 0, '2019-11-17 00:19:26', '2019-11-17 00:19:26'),
(36, 'HH0036', 'Nước ép khóm', 35000, 30000, 1, 1, 9, 'Piobh_59792853_2036343193142579_4654207367183859712_o.jpg', '<p>100% từ khóm nguyên chất</p>', 0, '2019-11-17 00:21:34', '2019-11-17 00:21:34'),
(37, 'HH0037', 'Pessi', 12000, 10000, 1, 1, 10, 'Qj5Xp_pepsi-cola-sleek-lon-330ml-4-700x467-1.jpg', '<p>chưa cập nhật</p>', NULL, '2019-11-17 00:23:05', '2019-11-17 00:23:05'),
(38, 'HH0038', 'Coca cola', 13000, 11000, 1, 1, 10, 'cemLb_nuoc-ngot-coke-sleek-330ml-1-700x467-1.jpg', '<p>Nguyên chất</p>', NULL, '2019-11-17 00:24:46', '2019-11-17 00:24:46'),
(39, 'HH0039', 'Thức ăn chó meat jerky', 150000, 120000, 1, 1, 11, 'l5Aft_60.png', '<p>Được nhập khẩu từ Nhật</p><p>thành phần gồm: Thịt bò tươi, rau củ và dầu thực vật</p>', NULL, '2019-11-17 00:27:40', '2019-11-17 00:27:40'),
(40, 'HH0040', 'Royal canin', 90000, 75000, 1, 1, 11, 'LHCZA_ca8b9bffeffcb4cdd1ef40268087631c.jpg', '<p>Nguyên liệu chính là gà&nbsp;</p>', NULL, '2019-11-17 00:29:41', '2019-11-17 02:27:30'),
(41, 'HH0041', 'Pedigree', 670000, 590000, 1, 1, 11, 'TCONp_pedigree-puppy--thuc-an-cho-con-vi-ga,-trung,-sua-goi-1.5kg-1898.jpg', '<p>Thức ăn dạng hạt cho chó lớn</p><p>Bổ sung đầy đủ dinh dưỡng</p><p>Hỗ trợ phát triển não bộ và hệ xương</p><p>Giúp chú chó cưng của bạn luôn khỏe mạnh</p>', NULL, '2019-11-17 00:32:03', '2019-11-17 00:32:03'),
(42, 'HH0042', 'Bánh mì sandwich', 98000, 85000, 1, 1, 12, '1EhMM_pan-pasteles-y-saco-con-los-granos-11553044.jpg', '<p>Nguyên liệu chính là lúa mạch</p>', NULL, '2019-11-17 00:34:03', '2019-11-17 00:34:03'),
(43, 'HH0043', 'Bánh mì Handmake-french', 20000, 20000, 1, 1, 12, 'ZTXd9_Handmade-french-white-sugar-free-kosher-500g.jpg', '<p>Nguyên liệu chính lúa mì</p>', NULL, '2019-11-17 00:35:27', '2019-11-17 00:35:27'),
(44, 'HH0044', 'Bánh mì hogaza', 35000, 29000, 1, 5, 12, 'ghZoz_hogaza.jpg', '<p>Nguyên liệu chính từ lúa mạch&nbsp;</p><p>tốt cho sức khỏe</p>', NULL, '2019-11-17 00:37:42', '2019-11-21 08:03:21'),
(45, 'HH0045', 'bsanh mi 1', 13000, 9000, 5, 5, 12, 'tjZh5_40.png', '<p>512311231231</p>', NULL, '2019-11-18 22:00:24', '2019-11-18 22:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_17_211948_nhom_hang_hoa', 1),
(4, '2019_10_17_211949_hang_hoa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsleat`
--

CREATE TABLE `newsleat` (
  `id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsleat`
--

INSERT INTO `newsleat` (`id`, `email`) VALUES
(NULL, 'hghung151112@ggg');

-- --------------------------------------------------------

--
-- Table structure for table `nhom_hang_hoa`
--

CREATE TABLE `nhom_hang_hoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_nhom` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhom_hang_hoa`
--

INSERT INTO `nhom_hang_hoa` (`id`, `ten_nhom`, `created_at`, `updated_at`) VALUES
(5, 'Gia dụng', NULL, NULL),
(6, 'Rau củ', NULL, NULL),
(7, 'Trái cây', NULL, NULL),
(8, 'Nhà bếp', NULL, NULL),
(9, 'Nước ép', NULL, NULL),
(10, 'Nước ngọt', NULL, NULL),
(11, 'Thức ăn thú cưng', NULL, NULL),
(12, 'Tiệm bánh mì', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ms_kh` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ms_nv` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_user` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `trang_thai` int(11) DEFAULT NULL,
  `level` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create` datetime NOT NULL,
  `update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ms_kh`, `ms_nv`, `username`, `ten_user`, `password`, `email`, `dia_chi`, `phone`, `trang_thai`, `level`, `create`, `update`) VALUES
(3, NULL, NULL, 'mrbanhbao', 'Bánh Bao', '$2y$10$.BFTpXurSFjQl4jTJ3bUCewKPTgDCDwd.QG4RzfuhjeCXBDRoRJZ6', 'a@gamil.com', NULL, 762999994, 1, '1', '2019-10-20 00:23:40', '2019-10-20 00:23:40'),
(4, NULL, NULL, 'mrbanhbao2', NULL, '$2y$10$ZMUia4RAFBizWYUaONJWwOH1z4k31O.CrCwM7eAY/yat.Tdwk3a9O', 'b@gamil.com', NULL, 762999994, 0, '2', '2019-10-20 01:08:47', '2019-10-20 01:08:47'),
(5, NULL, NULL, 'mrbanhbao11', 'ádasdsa22', '$2y$10$sdsKb4ZK1./e3ozdlmEMjOPQ10mD2f4lebPAnPrmWPpwV6E.Zozgq', 'hghung1511122@gmail.com', NULL, 123456790, 0, '2', '2019-11-16 14:59:58', '2019-11-16 15:40:17'),
(6, NULL, NULL, 'giahung', 'Bánh Bao', '$2y$10$pMHy0bjTduKmcd0/ILYPUe.3UFBzTJv1.BFBYvDsMLZGOphm94Lb6', 'giahung@gmail.colm', NULL, 762999994, 1, '2', '2019-11-18 21:55:11', '2019-11-18 21:59:23'),
(7, NULL, NULL, NULL, 'Bánh Bao23', '$2y$10$MKLljMq.oLU0F92VdNrrNOtsje2/nVqsX6A.HQejVyCIWhOgAfd4.', 'abc@gamil.com', 'Vĩnh Long2222', 123456790, 1, '2', '2019-11-21 06:35:08', '2019-11-21 07:06:15'),
(8, NULL, NULL, NULL, 'Lì Thị Nhăn 2', '$2y$10$TjqkBwjTZrKfiFBSfhD04OdWedwTViN943MNDC21mVZABCPGEgdIS', 'illibaoilli2@gmail.com', 'dfgfdgfdg', 123456790, 1, '0', '2019-11-21 10:00:20', '2019-11-21 10:00:20'),
(9, NULL, NULL, NULL, 'Huỳnh Hương', '$2y$10$gIhNa2ZYft0vX.pDz3eyGOyx3PHTB.2S5dVUQYBdRLlZSU3iX8gJy', 'huynhhuong@gmail.com', 'Cần Thơ', 762999995, 1, '0', '2019-11-21 10:08:15', '2019-11-21 10:08:15'),
(10, NULL, NULL, 'hghung98', NULL, '$2y$10$ZL1ZL1a72LC4hNf1s8qm0OuvsS3870ytiuZf92MsEjH7pUnivh/x6', 'banhbao1nganmtocai@gmail.com', NULL, 762999994, 1, '1', '2020-05-03 21:36:22', '2020-05-03 21:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_user` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vai_tro`
--

CREATE TABLE `vai_tro` (
  `id` int(11) NOT NULL,
  `ten_vaitro` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vai_tro`
--

INSERT INTO `vai_tro` (`id`, `ten_vaitro`) VALUES
(1, 'Admin'),
(2, 'Khách hàng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ct_don_hang_id_donhang_foreign` (`id_donhang`),
  ADD KEY `ct_don_hang_id_hanghoa_foreign` (`id_hanghoa`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `don_hang_id_khachhang_foreign` (`id_khachhang`),
  ADD KEY `don_hang_nguoi_duyet_foreign` (`nguoi_duyet`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hang_hoa_ma_nhom_foreign` (`ma_nhom`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhom_hang_hoa`
--
ALTER TABLE `nhom_hang_hoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhom_hang_hoa`
--
ALTER TABLE `nhom_hang_hoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vai_tro`
--
ALTER TABLE `vai_tro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `ct_don_hang_id_donhang_foreign` FOREIGN KEY (`id_donhang`) REFERENCES `don_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_don_hang_id_hanghoa_foreign` FOREIGN KEY (`id_hanghoa`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_id_khachhang_foreign` FOREIGN KEY (`id_khachhang`) REFERENCES `tai_khoan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `don_hang_nguoi_duyet_foreign` FOREIGN KEY (`nguoi_duyet`) REFERENCES `tai_khoan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ma_nhom_foreign` FOREIGN KEY (`ma_nhom`) REFERENCES `nhom_hang_hoa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
