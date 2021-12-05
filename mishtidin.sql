-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 10:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mishtidin`
--
CREATE DATABASE IF NOT EXISTS `mishtidin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mishtidin`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `password` varchar(255) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `emailID` varchar(255) NOT NULL,
  `phoneNo` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `customer`:
--

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`password`, `Name`, `emailID`, `phoneNo`) VALUES
('$2y$10$lwbGt0gYWhlKnwV9Lv0qquJHUkRn.yG5cxrI2c56f46HiKjFzA6ti', 'Developer', '7shreyade@gmail.com', 9147485000),
('$2y$10$GKQqoLBDC.srK3CeL/lBu.C5mJQ9gjG3ZID7CSbBNT8ocGmmx4UPm', 'admin', 'admin@mishtidin.com', 9999900000),
('$2y$10$GgOzWFDmboJ4Rav2vZnE1OlKtlxSefduDTzPKW61oQVggg4FNye3a', 'Shreya', 'shreyade@hello123.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `item_id` varchar(5) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `ingredients` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `items`:
--

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `Category`, `item_img`, `item_name`, `price`, `weight`, `about`, `ingredients`) VALUES
('i01', 'sweets', 'gulab-jamun.jpg', 'Gulab Jamun', '300.00', '1kg', 'Gulab Jamun is a popular North Indian mithai or sweet, commonly served as a dessert after a meal. This classic small sweet balls or sweet dumplings are made from flour, sugar and chhena an cottage cheese) and fried before they are dipped luxuriously in sweetened sugary syrup.', 'Gulab Jamuns are made of sugar, water, khoya, chhena, wheat flour, ghee, rose water & cardamom. This is a vegetarian sweet and liked by people of all ages.'),
('i02', 'sweets', 'kaju_katli.jpg', 'Kaju Katli', '275.00', '250gm', 'Kaju katli, also known as kaju barfi, is a traditional North Indian sweet. This festive favourite is an indulgent treat made to share with your loved ones. Smooth and creamy diamond-shaped slices of royal cashew goodness.', 'Kaju Katli is made with quality cashews, thick milk and edible silver foil. \r\n'),
('i03', 'baked', 'fruitcakes.jpg', 'Fruit Cake', '550.00', '500gm', 'Fruitcakes are typically served in celebration of weddings and Christmas.In the United Kingdom, certain rich versions may be iced and decorated. ', 'Fruitcake is a cake made with candied or dried fruit, nuts, and spices, and optionally soaked in spirits.'),
('i04', 'baked', 'ChocoCookies.jpg', 'Choco Chip Cookies', '400.00', '250gm', 'A \'batch\' made in heaven, our Chocolate Chip Cookies are made with a vanilla flavoured cookie dough and dark chocolate chunks, baked to give you a soft, melt-in-your-mouth cookie. These bite-sized cookies are perfect for a mid-day treat. Dunk them in some milk, or crumble them over ice cream, or enjoy them as is.', 'Wheat flour, sugar, dark chocolate, butter, eggs\r\nAllergens: Egg, gluten, dairy and chocolate contains soya'),
('i05', 'chocolates', 'cadbury-celebration-chocolate1.jpg', 'Cadbury Celebrations', '100.00', '186.6gm', 'A special collection of delicious Cadbury chocolates to surprise your loved ones.\r\nCadbury celebrations is packed and delivered with frozen gel packs (reusable) to maintain temperature & quality during transit\r\nHurry up! Celebrate this Diwali by gifting Cadbury celebrations to your loved ones\r\nItem Form: Bar', 'This assorted pack contains 3 unit of Cadbury dairy milk -23g, 2 units of 5 star-22.4g, 3 units of Gems-7.9g, 3 units of Cadbury dairy milk -12g, 1 unit of 5 star-10g'),
('i06', 'chocolates', 'candies.jpg', 'Christmas Chocolate Candies', '200.00', '250gm', 'Each delectable milk chocolate candy is wrapped in holiday color foil for a Christmas treat sure to fill you with comfort and good cheer! They are always a welcome treat at Christmas parties, as stocking stuffers or just put out in a candy dish for family and friends to enjoy all season long! Individually wrapped. ', 'These are made of cane sugar, milk, chocolate, cocoa butter, milk fat, lecithin, and natural flavor. ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `no_of_items` int(11) NOT NULL,
  `list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`list`)),
  `tot_amt` decimal(10,2) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `status` enum('Confirmed','Shipped','Delivered','Cancelled') NOT NULL,
  `order_date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_name` varchar(255) NOT NULL,
  `customer_emailID` varchar(255) NOT NULL,
  `customer_phoneNo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `orders`:
--

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `no_of_items`, `list`, `tot_amt`, `delivery_address`, `status`, `order_date_time`, `customer_name`, `customer_emailID`, `customer_phoneNo`) VALUES
(1, 6, '[{\"Name\":\"Kaju Katli\",\"Price\":\"275.00\",\"Img\":\"kaju_katli.jpg\",\"Wt\":\"250gm\",\"Quantity\":\"1\"},{\"Name\":\"Gulab Jamun\",\"Price\":\"300.00\",\"Img\":\"gulab-jamun.jpg\",\"Wt\":\"1kg\",\"Quantity\":\"1\"},{\"Name\":\"Christmas Chocolate Candies\",\"Price\":\"200.00\",\"Img\":\"candies.jpg\",\"Wt\":\"250gm\",\"Quantity\":\"1\"},{\"Name\":\"Cadbury Celebrations\",\"Price\":\"100.00\",\"Img\":\"cadbury-celebration-chocolate1.jpg\",\"Wt\":\"186.6gm\",\"Quantity\":\"1\"},{\"Name\":\"Choco Chip Cookies\",\"Price\":\"400.00\",\"Img\":\"ChocoCookies.jpg\",\"Wt\":\"250gm\",\"Quantity\":\"1\"},{\"Name\":\"Fruit Cake\",\"Price\":\"550.00\",\"Img\":\"fruitcakes.jpg\",\"Wt\":\"500gm\",\"Quantity\":\"1\"}]', '1825.00', 'AF Stn, Maharajpura, Gwalior(MP)\r\n474020', 'Shipped', '2021-12-05 14:32:46', 'admin', 'admin@mishtidin.com', 9999900000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `payment_id` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `payment`:
--

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `emailID` varchar(255) NOT NULL,
  `CartID` int(11) NOT NULL,
  `CreatedOn` date NOT NULL DEFAULT current_timestamp(),
  `CreatedAt` time NOT NULL DEFAULT current_timestamp(),
  `no_of_items` int(11) NOT NULL,
  `list_of_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`list_of_items`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `shoppingcart`:
--

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`emailID`, `CartID`, `CreatedOn`, `CreatedAt`, `no_of_items`, `list_of_items`) VALUES
('admin@mishtidin.com', 1, '2021-12-04', '21:58:21', 1, '[{\"Name\":\"Gulab Jamun\",\"Price\":\"300.00\",\"Img\":\"gulab-jamun.jpg\",\"Wt\":\"1kg\",\"Quantity\":\"1\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`emailID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`CartID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table customer
--

--
-- Metadata for table items
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'mishtidin', 'items', '[]', '2021-12-01 15:49:37');

--
-- Metadata for table orders
--

--
-- Metadata for table payment
--

--
-- Metadata for table shoppingcart
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'mishtidin', 'shoppingcart', '[]', '2021-12-04 16:25:40');

--
-- Metadata for database mishtidin
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
