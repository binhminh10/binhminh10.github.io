-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 08, 2018 lúc 03:09 AM
-- Phiên bản máy phục vụ: 5.7.21-log
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerce`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`, `name`) VALUES
(6, 'admin', '123456', 'Nguyễn Bình Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ordertable`
--

CREATE TABLE `ordertable` (
  `order_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `ordertable`
--

INSERT INTO `ordertable` (`order_id`, `transaction_id`, `product_id`, `quantity`, `status`) VALUES
(1, 1, 7, 3, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `company` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `intro` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `company`, `category_id`, `price`, `discount`, `image`, `intro`, `quantity`) VALUES
(6, 'Nồi cơm SHD8601', 'Sun House', 9, 400000, 3, 'Fileupload/product/CookSunhouse.jpg', 'Mặt hàng bán chạy nhất cho sinh viên', 34),
(7, 'Bếp nướng không khói thông minh', 'Sun House', 10, 1000000, 2, 'Fileupload/product/29462_19881_lau-nuong-dien-sunhouse-shd4650.jpg', 'Mặt hàng bán chạy nhất cho các căn hộ cao cấp', 34),
(8, 'Bếp nướng SHD4607', 'Kangaru', 6, 2000000, 10, 'Fileupload/product/bep-nuong-khong-khoi-Electric-barbecue-grill-2000W-1.jpg', 'Mặt hàng bán chạy nhất cho các gia đình', 54),
(9, 'Bếp nướng điện KG189G', 'Kangaru', 6, 2000000, 3, 'Fileupload/product/Bep-nuong-than-hoa-10.jpg', 'Mặt hàng bán chạy nhất cho các khu trọ', 23),
(10, 'Bếp nướng không khói thông minh', 'Eton', 5, 1000000, 4, 'Fileupload/product/chien-thuc-an-2.jpg', 'Mặt hàng bán chạy nhất cho các khu trọ', 34),
(11, 'Ấm điện SK-1800', 'Eton', 10, 1000000, 2, 'Fileupload/product/d794dc5757847671e156e622af8eb4b6.jpg', 'Mặt hàng bán chạy nhất cho các khu trọ', 23),
(12, 'Nồi chiên không khói NC-1234', 'Magic', 10, 5000000, 4, 'Fileupload/product/noi-chien-khong-dau-perfect-usa-3l-new-den-4405-4920505-d13eb84e1c1cc1a04a254fd6fae60961-catalog_233.jpg', 'Mặt hàng bán chạy nhất cho các gia đình', 34),
(13, 'Bộ nồi chống dính N-2325', 'Aoran', 5, 1000000, 3, 'Fileupload/product/b1-0.jpg', 'Mặt hàng bán chạy nhất cho các nhà hàng', 23),
(14, 'Bếp chiên BC-23832', 'Aoran', 6, 5000000, 2, 'Fileupload/product/6d04ff5e665106e34fa47ba22af4da60.jpg', 'Mặt hàng bán chạy nhất cho các nhà hàng', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`category_id`, `category_name`, `parent_id`) VALUES
(1, 'Điện gia dụng nhà bếp', 0),
(4, 'Chảo', 1),
(5, 'Đồ dùng nhà bếp', 1),
(6, 'Đồ nướng', 1),
(7, 'Máy say, trộn, nghiền', 1),
(8, 'Bát, đĩa', 1),
(9, 'Nồi cơm điện', 1),
(10, 'Thiết bị nấu ăn gia đình', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `money_amount` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id`, `money_amount`, `create_date`, `status`) VALUES
(1, 3, 500000, '2018-05-07', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `phone_number`, `address`) VALUES
(3, 'BinhMinhs10', '123456', 'nguyenbinhminh07101997@gmail.com', '01667351997', 'Bách khoa , Hà Nội'),
(4, 'admin', '1234', '20152452@student.hust.edu.vn', '0166735345', 'Bách khoa , Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Chỉ mục cho bảng `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordertable_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `productcategory` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
