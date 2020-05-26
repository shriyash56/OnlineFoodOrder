-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 10:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('BIRJU KUMAR', 'ckj40856@gmail.com', '8903079750', 'asd', 'asdasdasd'),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'asd', 'hfgdsfsx');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('ADp', 'shriyash', 'q@gmail.com', '9834171486', 'cidco', '123'),
('birju', 'BIRJU KUMAR', 'bkm123r@gmail.com', '8903079750', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Birju123@'),
('ckumar', 'CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Ckumar123@'),
('tanu15', 'Tanmay', 'tanmay15balshetwar@gmail.com', '9834171486', 'Sambhaji Chowk', 'tanu15');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(58, 'Butter Chiken', 150, 'Butter chicken was born in the kitchens of the Moti Mahal hotel in Delhi in the 1950s. Today, it is among Indias best-known foods the world over.', 1, 'img/butter_chiken.png', 'ENABLE'),
(59, 'Daal Tadka', 80, 'This tasty yet easy-to-cook Daal dish is hugely popular in India. There are as many versions of it as there are cooks in India!', 2, 'img/daal_tadka.png', 'ENABLE'),
(60, 'Malai Kofta', 100, 'A dish for special occasions, Malai kofta is the delicious vegetarian alternative to meatballs (in Indian cuisine, koftas are meatballs).', 3, 'img/malai_kofta.png', 'ENABLE'),
(61, 'Mutter Panner', 120, 'Mutter means peas, and paneer is a solid cottage cheese, so this mutter paneer dish combines the two in a rich tomato-based gravy.', 1, 'img/mutter_panner.png', 'ENABLE'),
(62, 'Chiken Curry', 140, 'This most basic of chicken recipes is also one of the tastiest, Indian chicken curry can vary from region to region, even the most basic recipe.', 2, 'img/chiken_curry.png', 'ENABLE'),
(63, 'Baahubali Thali', 120, 'Baahubali Thali is accompanied by Kattapa Biriyani, Devasena Paratha, Bhalladeva Patiala Lassi', 3, 'img/Baahubali_Thali.jpg', 'ENABLE'),
(65, 'Aloo Paratha', 40, 'Extremely popular with North Indians, these are best eaten with chilled yogurt and your favorite pickle or chutney.', 4, 'img/aloo_paratha.png', 'ENABLE'),
(66, 'Tea', 20, 'The simple elixir of tea is of our natural world.', 4, 'img/tea.jpg', 'DISABLE'),
(68, 'Rajma Dal', 85, 'Rajma dal is a red kidney bean curry that is a popular dish in northern India, though its enjoyed throughout the country.', 6, 'img/rajma.png', 'DISABLE'),
(69, 'Coffee', 25, 'concentrated coffee made by forcing pressurized water through finely ground coffee beans.', 2, 'img/coffee.jpg\r\n', 'ENABLE'),
(70, 'Naan', 25, 'Naan is traditionally cooked in a tandoor or earthen oven, but can also be made in your oven at home.', 2, 'img/naan.png', 'ENABLE'),
(71, 'Samosa', 40, 'Cocktail Crispy Samosa..', 2, 'img/samosa.jpg', 'ENABLE'),
(72, 'Paneer Pakora', 45, 'it gives whole new dimension even to the most boring or dull vegetable', 2, 'img/paneer pakora.jpg', 'DISABLE'),
(73, 'Puff', 35, 'Vegetable Puff, a snack with crisp-n-flaky outer layer and mixed vegetables stuffing', 2, 'img/puff.jpg', 'ENABLE'),
(74, 'Pizza', 200, 'Good and Tasty ', 2, 'Pizza.jpg', 'DISABLE'),
(75, 'French Fries', 60, 'Pure Veg and Tasty.', 2, 'img/frenchfries.jpg', 'DISABLE'),
(76, 'Pakora', 35, 'Pure Vegetable and Tasty.', 2, 'img/Pakora.jpg', 'DISABLE'),
(77, 'Pizza', 200, 'Pure Vegetable and Tasty.', 2, 'img/Pizza.jpg', 'DISABLE'),
(78, 'French Fries', 75, 'Pure Veg and Tasty.', 2, 'img/frenchfries.jpg', 'DISABLE'),
(79, 'Pakora', 45, 'Pakora are a delicious Indian crisp fried snack made with gram flour, spices & any main ingredient like onion, paneer or veggies.', 2, 'img/Pakora.jpg\r\n', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('aditi068', 'Aditi Naik', 'aditi@gmail.com', '8654751259', 'Goa', 'aditi'),
('aminnikhil073', 'Nikhil Amin', 'aminnikhil073@gmail.com', '9632587412', 'Karnataka', 'nikhil'),
('ckumar', 'Chandan Kumar', 'ckj40856@gmail.com', '9487810674', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Ckumar123'),
('dhiraj', 'DHIRAJ kUMAR', 'dk123@gmail.com', '8903079750', 'Pondicherry. Le cafe', 'Dhiraj'),
('roshanraj07', 'Roshan Raj', 'roshan@gmail.com', '9541258761', 'Bihar', 'roshan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(1, 58, 'Butter Chicken', 150, 1, '2019-03-03', 'ckumar', 1),
(2, 61, 'Mutter Panner', 120, 2, '2019-03-03', 'ckumar', 1),
(3, 61, 'Mutter Panner', 120, 2, '2019-03-03', 'ckumar', 1),
(4, 65, 'Aloo Paratha', 40, 4, '2019-03-03', 'ckumar', 4),
(5, 58, 'Butter Chicken', 150, 7, '2019-03-03', 'ckumar', 1),
(6, 65, 'Aloo Paratha', 40, 2, '2019-03-03', 'ckumar', 4),
(7, 58, 'Butter Chicken', 150, 7, '2019-03-03', 'ckumar', 1),
(8, 65, 'Aloo Paratha', 40, 2, '2019-03-03', 'ckumar', 4),
(9, 60, 'Malai Kofta', 100, 1, '2019-03-03', 'ckumar', 3),
(10, 59, 'Daal Tadka', 80, 1, '2019-03-05', 'ckumar', 2),
(11, 60, 'Malai Kofta', 100, 1, '2019-03-05', 'ckumar', 3),
(12, 65, 'Aloo Paratha', 40, 1, '2019-03-05', 'ckumar', 4),
(13, 59, 'Daal Tadka', 80, 4, '2019-03-05', 'ckumar', 2),
(14, 58, 'Butter Chicken', 150, 1, '2019-03-05', 'ckumar', 1),
(15, 60, 'Malai Kofta', 100, 4, '2019-03-05', 'ckumar', 3),
(16, 65, 'Aloo Paratha', 40, 1, '2019-03-05', 'ckumar', 4),
(17, 66, 'Tea', 20, 7, '2019-03-05', 'ckumar', 4),
(18, 59, 'Daal Tadka', 80, 5, '2019-03-05', 'birju', 2),
(19, 63, 'Baahubali Thali', 120, 1, '2019-03-05', 'birju', 3),
(20, 68, 'Rajma Dal', 85, 1, '2019-03-05', 'birju', 6),
(21, 62, 'Chiken Curry', 140, 1, '2019-03-05', 'birju', 2),
(22, 68, 'Rajma Dal', 85, 1, '2019-03-05', 'birju', 6),
(23, 62, 'Chiken Curry', 140, 1, '2019-03-05', 'birju', 2),
(24, 65, 'Aloo Paratha', 40, 1, '2019-03-05', 'birju', 4),
(25, 68, 'Rajma Dal', 85, 1, '2019-03-05', 'birju', 6),
(26, 59, 'Daal Tadka', 80, 6, '2019-03-05', 'birju', 2),
(27, 58, 'Butter Chicken', 150, 1, '2019-03-05', 'birju', 1),
(28, 59, 'Daal Tadka', 80, 1, '2019-03-05', 'birju', 2),
(29, 58, 'Butter Chicken', 150, 1, '2019-03-05', 'birju', 1),
(30, 60, 'Malai Kofta', 100, 1, '2019-03-15', 'ckumar', 3),
(31, 59, 'Daal Tadka', 80, 1, '2019-03-15', 'ckumar', 2),
(32, 61, 'Mutter Panner', 120, 1, '2019-03-15', 'ckumar', 1),
(33, 60, 'Malai Kofta', 100, 1, '2019-03-15', 'ckumar', 3),
(34, 59, 'Daal Tadka', 80, 1, '2019-03-15', 'ckumar', 2),
(35, 61, 'Mutter Panner', 120, 1, '2019-03-15', 'ckumar', 1),
(36, 62, 'Chiken Curry', 140, 1, '2019-03-15', 'ckumar', 2),
(37, 72, 'Paneer Pakora', 45, 6, '2019-03-15', 'ckumar', 2),
(38, 78, 'French Fries', 75, 7, '2019-03-15', 'ckumar', 2),
(39, 78, 'French Fries', 75, 1, '2019-03-15', 'ckumar', 2),
(40, 73, 'Puff', 35, 1, '2019-03-15', 'ckumar', 2),
(41, 77, 'Pizza', 200, 2, '2019-03-16', 'ckumar', 2),
(42, 70, 'Naan', 25, 1, '2019-03-16', 'ckumar', 2),
(43, 60, 'Malai Kofta', 100, 2, '2019-03-16', 'ckumar', 3),
(44, 70, 'Naan', 25, 1, '2019-03-16', 'ckumar', 2),
(45, 60, 'Malai Kofta', 100, 2, '2019-03-16', 'ckumar', 3),
(46, 70, 'Naan', 25, 1, '2019-03-16', 'ckumar', 2),
(47, 60, 'Malai Kofta', 100, 2, '2019-03-16', 'ckumar', 3),
(48, 60, 'Malai Kofta', 100, 4, '2019-03-25', 'ckumar', 3),
(49, 62, 'Chiken Curry', 140, 6, '2019-03-25', 'ckumar', 2),
(50, 70, 'Naan', 25, 5, '2019-03-25', 'ckumar', 2),
(51, 73, 'Puff', 35, 3, '2019-03-25', 'ckumar', 2),
(52, 70, 'Naan', 25, 1, '2019-03-30', 'ckumar', 2),
(53, 60, 'Malai Kofta', 100, 5, '2019-03-30', 'ckumar', 3),
(54, 69, 'Coffee', 25, 7, '2019-03-30', 'ckumar', 2),
(55, 62, 'Chiken Curry', 140, 1, '2019-04-01', 'ckumar', 2),
(56, 70, 'Naan', 25, 4, '2019-04-01', 'ckumar', 2),
(57, 70, 'Naan', 25, 1, '2019-04-01', 'ckumar', 2),
(58, 60, 'Malai Kofta', 100, 1, '2019-04-01', 'ckumar', 3),
(59, 59, 'Daal Tadka', 80, 6, '2019-04-02', 'ckumar', 2),
(60, 61, 'Mutter Panner', 120, 1, '2019-04-02', 'ckumar', 1),
(61, 71, 'Samosa', 40, 3, '2019-04-17', 'ckumar', 2),
(62, 70, 'Naan', 25, 4, '2019-04-17', 'ckumar', 2),
(63, 72, 'Paneer Pakora', 45, 2, '2019-04-17', 'ckumar', 2),
(64, 71, 'Samosa', 40, 3, '2019-04-17', 'ckumar', 2),
(65, 70, 'Naan', 25, 4, '2019-04-17', 'ckumar', 2),
(66, 72, 'Paneer Pakora', 45, 2, '2019-04-17', 'ckumar', 2),
(67, 60, 'Malai Kofta', 100, 1, '2019-04-18', 'ckumar', 3),
(68, 71, 'Samosa', 40, 1, '2019-04-18', 'ckumar', 2),
(69, 59, 'Daal Tadka', 80, 1, '2020-05-17', 'tanu15', 2),
(70, 59, 'Daal Tadka', 80, 1, '2020-05-17', 'tanu15', 2),
(71, 59, 'Daal Tadka', 80, 1, '2020-05-17', 'tanu15', 2),
(72, 71, 'Samosa', 40, 1, '2020-05-17', 'tanu15', 2),
(73, 71, 'Samosa', 40, 1, '2020-05-17', 'tanu15', 2),
(74, 63, 'Baahubali Thali', 120, 1, '2020-05-17', 'tanu15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Nikhil\'s Restaurant', 'nikhil@restaurant.com', '7998562145', 'Karnataka', 'aminnikhil073'),
(2, 'Roshan\'s Restaurant', 'roshan@restaurant.com', '9887546821', 'Bihar', 'roshanraj07'),
(3, 'Aditi\'s Restaurant', 'aditi@restaurant.com', '7778564231', 'Goa', 'aditi068'),
(4, 'Food Exploria', 'ckj40856@gmail.com', '09487810674', 'C:\\xampp\\htdocs\\FoodExploria-master\\images/coffee.', 'ckumar'),
(6, 'Le Cafe', 'lecafepondi234@gmail.com', '9443369040', 'Pondicherry,rock beach Near,Le cafe', 'dhiraj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
