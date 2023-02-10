-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 10, 2023 lúc 07:24 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_mvc_thiet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discount`, `short_desc`, `description`, `thumbnail`, `view`, `status`, `created_at`, `updated_at`) VALUES
(4, 'ÁO KHOÁC NỈ LOOSE ESSENTIAL LÓT LÔNG', 999000, 0, NULL, '<p>&Aacute;O KHO&Aacute;C NỈ LOOSE ESSENTIAL L&Oacute;T L&Ocirc;NG<br />\r\n- &Aacute;o kho&aacute;c form regular với 3 gam m&agrave;u basic: ghi, xanh t&iacute;m than, đen, th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- Dễ kết hợp c&ugrave;ng nhiều items kh&aacute;c nhau trong tủ đồ của bạn<br />\r\n- Mặt trong &aacute;o l&oacute;t l&ocirc;ng gi&uacute;p giữ ấm v&agrave; chắn gi&oacute; cực tốt<br />\r\n- Chất liệu: Nỉ l&oacute;t l&ocirc;ng<br />\r\n- Size mẫu mặc: M<br />\r\n- Số đo mẫu: Nữ: 1m67,48kg, Nam: 1m80,70kg</p>', 'productwH8WX.jpg', 0, 1, '2022-01-23 00:20:29', '2022-01-23 00:20:30'),
(5, 'ÁO KHOÁC NỮ BLAZER CROPTOP', 899000, 0, NULL, NULL, 'producthV3Ew.jpg', 0, 1, '2022-01-23 00:21:20', '2022-01-23 00:21:20'),
(6, 'ÁO KHOÁC BOMBER JEAN BOOLAAB', 1499000, 0, NULL, '<p>- &Aacute;o kho&aacute;c unisex thuộc thương hiệu BOOLAAB, th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- &Aacute;o được thiết kế d&aacute;ng bomber rộng, dễ mix match c&ugrave;ng nhiều items kh&aacute;c nhau<br />\r\n- Mặt trước đắp 2 t&uacute;i h&ocirc;ng v&agrave; logo AA trước ngực<br />\r\n- Sau lưng th&ecirc;u logo BOOLAAB<br />\r\n- Gấu &aacute;o phối bo chun<br />\r\n- Chất liệu: Jeans<br />\r\n- Số đo mẫu: Nam 1m75,65kg, Nữ 1m64,45kg<br />\r\n- Size mẫu mặc: M</p>', 'productuhg5s.jpg', 0, 1, '2022-01-23 00:32:40', '2022-01-23 00:32:40'),
(7, 'ÁO KHOÁC UN DENIM DẦN DẦN', 1499000, 50, NULL, '<p>&Aacute;o kho&aacute;c unisex denim thuộc BST Tết - DẦN DẦN<br />\r\n- &Aacute;o được thiết kế form varsity rộng th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- H&igrave;nh th&ecirc;u ở ngực v&agrave; 2 b&ecirc;n c&aacute;nh tay tạo điểm nhấn<br />\r\n- Sau lưng th&ecirc;u h&igrave;nh con hổ v&agrave; logo DẦN DẦN nổi bật, rất th&iacute;ch hợp để mặc dịp Tết<br />\r\n- Chất liệu: Jeans với độ bền cực cao, kh&ocirc;ng bị sờn r&aacute;ch, co d&atilde;n sau nhiều lần giặt giũ, kết cấu tho&aacute;ng kh&iacute; gi&uacute;p người mặc kh&ocirc;ng bị b&iacute; b&aacute;ch khi sử dụng<br />\r\n- Size mẫu mặc: L</p>', 'productiZcLD.jpg', 0, 1, '2022-01-23 00:35:16', '2022-01-23 00:35:17'),
(8, 'ÁO KHOÁC BOMBER BOOLAAB', 2000000, 25, NULL, '<p>- &Aacute;o kho&aacute;c bomber nằm trong BST Jump-in-novation đến từ thương hiệu BOOLAAB<br />\r\n- C&aacute;c sản phẩm đến từ thương hiệu BOOLAAB l&agrave; d&ograve;ng sản phẩm được sử dụng c&aacute;c chất liệu cao cấp, với nhiều thiết kế độc lạ, v&agrave; mang t&iacute;nh thử nghiệm cao<br />\r\n- Được lấy cảm hứng từ trang phục Military (l&iacute;nh nhảy d&ugrave;), &aacute;o được thiết kế chần b&ocirc;ng, với mặt trước trơn basic, v&agrave; h&igrave;nh th&ecirc;u nổi bật ph&iacute;a sau lưng gi&uacute;p set đồ th&ecirc;m c&aacute; t&iacute;nh, đậm chất bụi bặm, ph&aacute; c&aacute;ch<br />\r\n- Chất liệu: Cotton raw trần b&ocirc;ng (với phần trăm cotton cao), c&oacute; độ sần v&agrave; b&ocirc;ng để tạo hơi hướng retro. Với chết liệu n&agrave;y, BOO khuyến kh&iacute;ch kh&aacute;ch h&agrave;ng l&agrave;m sạch bằng c&aacute;ch giặt hấp để sản phẩm c&oacute; độ bền cao nhất.<br />\r\n- Số đo mẫu: 1m67-47kg - size L</p>', 'product9wwRJ.jpg', 0, 1, '2022-01-23 00:36:19', '2022-01-23 00:36:19'),
(9, 'ÁO SƠ MI NHUNG TĂM THÊU LOGO', 600000, 25, NULL, '<p>- &Aacute;o sơ mi d&aacute;ng oversize th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- Lưng &aacute;o in chữ: &quot;KIND OF BASIC BUT STILL MF COOL&quot;<br />\r\n- Chất liệu: nhung tăm<br />\r\n- Số đo mẫu: Nam 1m75,65kg, Nữ: 1m64,45kg<br />\r\n- Size mẫu mặc: Nam: L, Nữ: M</p>', 'producta1at2.jpg', 0, 1, '2022-01-23 00:39:09', '2022-01-23 00:39:09'),
(10, 'ÁO SƠ MI IN PATTERN BOOLAAB', 699000, 0, NULL, '<p>&Aacute;O SƠ MI IN PATTERN BOOLAAB<br />\r\n- &Aacute;o sơ mi BOOLAAB ngắn tay cổ vest<br />\r\n- &Aacute;o được in tr&agrave;n họa tiết logo BOOLAAB<br />\r\n- Chất liệu: Sơ mi<br />\r\n- Size mẫu mặc: Nam: M, Nữ: S<br />\r\n- Số đo mẫu: Nam: 1m75, 65kg, Nữ 1m64, 48kg</p>', 'productfXWEZ.jpg', 0, 1, '2022-01-23 00:39:58', '2022-01-23 00:39:58'),
(11, 'ÁO SƠ MI OVERSIZED PATTERN', 599000, 0, NULL, NULL, 'product2zLPm.jpg', 0, 1, '2022-01-23 00:41:16', '2022-01-23 00:41:16'),
(12, 'ÁO NỈ MŨ OVERSIZED BOOLAAB', 500000, 20, NULL, '<p>&Aacute;o nỉ mũ thuộc thương hiệu BOOLAAB<br />\r\n- &Aacute;o d&aacute;ng oversize th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- Sau lưng in logo AA đặc trưng của c&aacute;c sản phẩm đến từ BOOLAAB<br />\r\n- &Aacute;o được thiết kế xỏa gấu c&aacute; t&iacute;nh v&agrave; nổi bật<br />\r\n- Số đo mẫu: Nữ: 1m67,48kg, Nam: 1m80,70kg<br />\r\n- Size mẫu mặc: Nữ: S, Nam: M</p>', 'productV27R2.jpg', 0, 1, '2022-01-23 00:49:41', '2022-01-23 00:49:41'),
(13, 'ÁO NỈ MŨ OVERSIZED CAMO BOOLAAB', 1099000, 0, NULL, NULL, 'product4MOb8.jpg', 0, 1, '2022-01-23 00:51:08', '2022-01-23 00:51:08'),
(14, 'ÁO NỈ MŨ PHỐI OP ART BOOLAAB', 1099000, 0, NULL, NULL, 'productO8cBf.jpg', 0, 1, '2022-01-23 00:51:59', '2022-01-23 00:51:59'),
(15, 'ÁO NỈ MŨ TRÁI TIM BOOLAAB', 599000, 0, NULL, NULL, 'productdcxsz.jpg', 0, 1, '2022-01-23 00:53:18', '2022-01-23 00:53:18'),
(16, 'ÁO NỈ MŨ GRAPHIC INFINITEE 04 BOOLAAB', 899000, 0, NULL, NULL, 'productC4qqC.jpg', 0, 1, '2022-01-23 00:54:22', '2022-01-23 00:54:22'),
(17, 'ÁO NỈ MŨ PATTERN MARVEL BOOZILLA', 999000, 0, NULL, '<p>&Aacute;O NỈ MŨ PATTERN MARVEL BOOZILLA - ĐƯỢC MUA BẢN QUYỀN CH&Iacute;NH THỨC TỪ DISNEY<br />\r\n- &Aacute;o được thiết kế in tr&agrave;n họa tiết Marvel<br />\r\n- Ngực &aacute;o đ&iacute;nh patch logo Marvel cao su<br />\r\n- Với thiết kế oversize, với 3 gam m&agrave;u nổi bật, th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- Chất liệu: Nỉ da c&aacute;<br />\r\n- Size mẫu mặc: Nữ: 1m67,48kg, Nam: 1m80,70kg<br />\r\n- Số đo mẫu: Nữ S, Nam M</p>', 'productdrYvV.jpg', 0, 1, '2022-01-23 00:56:13', '2022-01-23 00:56:14'),
(18, 'ÁO PHÔNG UN OVERSIZED DẦN DẦN', 500000, 20, NULL, '<p>&Aacute;o ph&ocirc;ng thuộc BST Tết - DẦN DẦN<br />\r\n- &Aacute;o unisex d&aacute;ng oversize rộng th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- Mặt trước được in xốp nổi logo BALẦNCE hồng neon nổi bật, mặt sau in h&igrave;nh con hổ v&agrave; chữ DẦN DẦN, đảm bảo được yếu tố cool ngầu cho set đồ của bạn<br />\r\n- Chất liệu: USCB - đứng form, thấm h&uacute;t mồ h&ocirc;i, th&acirc;n thiện với l&agrave;n da v&agrave; m&ocirc;i trường<br />\r\n- T&iacute;nh ứng dụng cao, kh&ocirc;ng chỉ mặc dịp tết m&agrave; c&ograve;n sử dụng được đến m&ugrave;a Xu&acirc;n H&egrave;<br />\r\n- Size mẫu mặc: M</p>', 'productD0Nri.jpg', 0, 1, '2022-01-23 00:57:48', '2022-01-23 00:57:49'),
(19, 'ÁO PHÔNG UN OVERSIZED PATTERN DẦN DẦN', 599000, 0, NULL, '<p>&Aacute;o ph&ocirc;ng thuộc BST Tết - DẦN DẦN<br />\r\n- &Aacute;o unisex d&aacute;ng oversize th&iacute;ch hợp cho cả nam v&agrave; nữ<br />\r\n- Th&acirc;n &aacute;o được thiết kế in tr&agrave;n - ph&ugrave; hợp với xu hướng GenZ<br />\r\n- Mặt trước in h&igrave;nh con hổ v&agrave; chữ DẦN DẦN, rất th&iacute;ch hợp để mặc v&agrave;o dịp Tết cũng như m&ugrave;a Xu&acirc;n h&egrave;<br />\r\n- Chất liệu: USCB - đứng form, thấm h&uacute;t mồ h&ocirc;i, th&acirc;n thiện với l&agrave;n da v&agrave; m&ocirc;i trường<br />\r\n- Size mẫu mặc: Nữ: S, Nam: M</p>', 'productnpLss.jpg', 0, 1, '2022-01-23 01:00:28', '2022-01-23 01:00:28'),
(20, 'ÁO PHÔNG HIPPY TIEDYE BOOLAAB', 599000, 0, NULL, '<p>&Aacute;O PH&Ocirc;NG HIPPY TIEDYE BOOLAAB<br />\r\n- &Aacute;o ph&ocirc;ng d&aacute;ng oversize thuộc thương hiệu BOOLAAB<br />\r\n- Th&acirc;n &aacute;o in họa tiết tiedye trendy, gi&uacute;p set đồ th&ecirc;m nổi bật<br />\r\n- Ngực &aacute;o đ&iacute;nh patch nh&aacute;m logo BOOLAAB - signature của thương hiệu<br />\r\n- Chất liệu: Cotton USA<br />\r\n- Size mẫu mặc: Nam: M, Nữ: S<br />\r\n- Số đo mẫu: Nam: 1m75, 65kg, Nữ: 1m64, 48kg</p>', 'productRqKK5.jpg', 0, 1, '2022-01-23 01:01:43', '2022-01-23 01:01:44'),
(21, 'ÁO PHÔNG OVERSIZED BOOLAAB', 499000, 0, NULL, '<p>&Aacute;O PH&Ocirc;NG OVERSIZED BOOLAAB<br />\r\n- &Aacute;o ph&ocirc;ng BOOLAAB d&aacute;ng oversize, rộng r&atilde;i thoải m&aacute;i, dễ kết hợp c&ugrave;ng nhiều items kh&aacute;c nhau trong tủ đồ của bạn<br />\r\n- &Aacute;o được thiết kế basic với logo BOOLAAB trước ngực<br />\r\n- Chất liệu: Cotton USA<br />\r\n- Size mẫu mặc: Nam: M, Nữ: S<br />\r\n- Số đo mẫu: Nam: 1m75, 65kg, Nữ: 1m64, 48kg</p>', 'productsttHt.jpg', 0, 1, '2022-01-23 01:03:53', '2022-01-23 01:03:53'),
(22, 'ÁO PHÔNG IN PATTERN AA BOOLAAB', 599000, 0, NULL, '<p>&Aacute;O PH&Ocirc;NG IN PATTERN AA BOOLAAB<br />\r\n- &Aacute;o được in tr&agrave;n họa tiết AA - họa tiết signature của thương hiệu BOOLAAB<br />\r\n- Họa tiết AA được in m&agrave;u tiedye gi&uacute;p outfit th&ecirc;m nổi bật v&agrave; lạ mắt<br />\r\n- Trước ngực in logo BOOLAAB<br />\r\n- Chất liệu: Cotton USA<br />\r\n- Size mẫu mặc: Nam: M, Nữ: S<br />\r\n- Số đo mẫu: Nam: 1m75, 65kg, Nữ 1m64, 48kg</p>', 'product38jrs.jpg', 0, 1, '2022-01-23 01:05:09', '2022-01-23 01:05:09'),
(23, 'ÁO PHÔNG OVERSIZED ESSENTIAL2', 399000, 0, NULL, '<p>&Aacute;O PH&Ocirc;NG OVERSIZED ESSENTIAL2<br />\r\n- &Aacute;o được in logo BOO basic c&ugrave;ng với h&igrave;nh in sau lưng: KIND OF BASIC BUT STILL MF COOL<br />\r\n- &Aacute;o thun unisex th&iacute;ch hợp với cả nam v&agrave; nữ. Mặc l&agrave;m &aacute;o thun cặp, &aacute;o nh&oacute;m rất ph&ugrave; hợp.<br />\r\n- Sản phẩm 100% cotton, đường may tinh tế chắc chắn với bề mặt vải mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt tạo cảm gi&aacute;c tho&aacute;ng m&aacute;t cho người mặc.<br />\r\n- Form &aacute;o cơ bản, vừa vặn cơ thể, thoải m&aacute;i theo từng cử động.<br />\r\n- Kh&ocirc;ng ra m&agrave;u, kh&ocirc;ng bai, kh&ocirc;ng x&ugrave;, kh&ocirc;ng b&aacute;m d&iacute;nh.<br />\r\n- Size mẫu mặc: M<br />\r\n- Số đo mẫu: 165cm, 45kg</p>', 'productGrWry.jpg', 0, 1, '2022-01-23 01:08:11', '2022-01-23 01:08:12'),
(24, 'Nguyễn Đăng Nhật', 10000, 0, 'aaaaaaaa', NULL, '', 0, 0, '2023-02-10 12:08:28', '2023-02-10 12:08:28'),
(25, 'Nguyễn Đăng Nhậtttt', 10000, 10, 'aaaaaaaa', '<p>aaaaaaa</p>\r\n', '3055581cff0526602142cbb0bfba9fca.png', 0, 1, '2023-02-10 12:09:42', '2023-02-10 12:23:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
