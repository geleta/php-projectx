-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2018 at 01:49 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(123) NOT NULL,
  `Discription` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`, `Discription`, `Picture`) VALUES
(42, 'jeans', 'Thailands', ''),
(43, 'Dress', 'girls', 'dress (6).jpg'),
(44, 'Childs', 'childs', 'baby.png'),
(45, 'T-shirts', 'turkey shirt ', '17.png'),
(46, 'shoes', 'brand', 'brand-img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(29) NOT NULL,
  `Phone` varchar(29) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `Name`, `Email`, `Phone`, `Subject`) VALUES
(7, 'Mustafa', 'muste1@gmail.com', '0922702972', ' i like this Shopping site '),
(8, 'Abebe', 'abebe20@gmail.com', '0936700885', ' What a nice shopping site'),
(10, 'galo k yesus', 'geletabegna@gmail.com', '0925922030', ' nice look');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cust_Id` int(15) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(25) NOT NULL DEFAULT '',
  `UserName` varchar(255) NOT NULL DEFAULT '',
  `Phone` varchar(25) NOT NULL DEFAULT '',
  `Email` varchar(55) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `Re_Password` varchar(20) NOT NULL DEFAULT '',
  `Country` varchar(25) NOT NULL DEFAULT '',
  `City` varchar(25) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`Cust_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Id`, `FullName`, `UserName`, `Phone`, `Email`, `Password`, `Re_Password`, `Country`, `City`, `Adress`, `PostalCode`) VALUES
(1, 'geleta', 'galoo', '09-2592-2030', '', '123', '123', 'Ethiopia', 'Oromiya', 'bale,robe', ''),
(2, 'odaa', 'oda', '09-2592-2030', 'geletabegna@gmail.com', '1234', '1234', 'Ethiopia', 'Oromiya', 'bale,robe', '247');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_ID` int(95) NOT NULL AUTO_INCREMENT,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Employee_Name`, `Username`, `Password`, `Picture`) VALUES
(1, 'galata begna', 'Galata', 'success', '29.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_ID` int(15) NOT NULL AUTO_INCREMENT,
  `Date_product_ordered_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Postal_Code` varchar(55) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Kebele` varchar(55) NOT NULL,
  `Phone_number` varchar(55) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Dilivery_Address` varchar(75) NOT NULL,
  `Delivery_time` varchar(50) NOT NULL,
  `Delivery_date` varchar(10) NOT NULL,
  `Total_Amount` varchar(50) NOT NULL,
  PRIMARY KEY (`order_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `Date_product_ordered_`, `Full_Name`, `Email`, `Postal_Code`, `Country`, `City`, `Kebele`, `Phone_number`, `Warehouse_ID`, `Dilivery_Address`, `Delivery_time`, `Delivery_date`, `Total_Amount`) VALUES
(1, '2018-06-11 05:33:39', 'galo', '', '', 'ET', 'roba', 'wer', '09-2592-2030', 12, 'derede', '5:15pm', 'Wednesday', '650'),
(2, '2018-06-11 05:42:11', 'galax', '', '', 'ET', 'sdfs', 'sfdd', '09-2592-2030', 12, 'sdfsf', '5:15pm', 'Tuesday', '600');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `order_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Account_number` int(55) NOT NULL,
  `pin` int(55) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL,
  PRIMARY KEY (`order_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`order_ID`, `Name`, `Account_number`, `pin`, `Total_Amount`) VALUES
(17, '', 2147483647, 1325, ''),
(20, '', 444444444, 4445, ''),
(22, 'dfg', 45465454, 5655, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_ID` int(255) NOT NULL AUTO_INCREMENT,
  `productName` varchar(77) NOT NULL,
  `Category_ID` int(255) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `quantity` int(50) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Product_ID`),
  UNIQUE KEY `Product_ID` (`Product_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `productName`, `Category_ID`, `Model`, `Type`, `Warehouse_ID`, `Description`, `Price`, `quantity`, `Picture`) VALUES
(1, 'Thailand jeans', 42, '32', 'kara jeans', 7, 'new brand,Thailand jeans', '650', 6, 'men jeans (14).jpg'),
(2, 'China jeans', 42, '31', 'kara', 7, 'nice look, color black', '600', 10, '10-jeans-png-image-thumb.png'),
(3, 'Denim jeans', 42, '33', 'qara', 7, 'color blue', '450', 12, 'men jeans (9).jpg'),
(4, 'Stretch Jeans', 42, '33', 'jeans', 7, 'Stretch Denim Grey Jeans', '480', 10, 'jeans_PNG5775.png'),
(5, 'Skinny Fit Jeans', 42, '30', 'jeans', 7, 'Skinny Fit Denim Jeans', '340', 5, 'jeans_PNG5770.png'),
(6, 'Stretch Denim Grey Jeans', 42, '31', 'jeans', 7, 'Skinny Fit Denim Jeans', '500', 4, 'mzz68686_blue_xl.jpg'),
(7, 'Stretch Jeans', 42, '32', 'jeans', 7, 'Skinny Fit Denim Jeans', '550', 6, 'mzz68992_blue_xl.jpg'),
(8, 'Skinny Jeans', 42, '30', 'jeans', 7, 'Skinny Fit Coloured Bottoms', '550', 4, 'mzz84162_black_xl.jpg'),
(9, 'Stretch Jeans', 42, '33', 'jeans', 7, 'Stretch Skinny Fit Washed Jean', '480', 3, 'mzz65788_blue_xl.jpg'),
(10, 'Skinny Fit Jeans', 42, '31', 'jeans', 7, 'Mid Blue Biker Detail Skinny Fit Jeans', '520', 5, 'mzz77312_indigo_xl.jpg'),
(12, 'dress', 45, 'S', 'dressss', 15, 'w dress', '447', 3, '7-2-dress-transparent-thumb.png'),
(13, 'dress', 45, 'L', 'bashashi', 15, 'High Low Midi Dress', '1514', 15, '31269-2-dress-transparent-thumb.png'),
(14, 'dress', 42, 'M', 'mens', 9, 'nice look', '1000', 5, '16-jacket-png-image-thumb.png'),
(15, 'shirt', 43, 'L', 'women shirt', 13, 'nice body', '250', 9, 'women shirt (13).jpg'),
(17, 'dress', 42, 'S', 'dress', 12, 'nice', '5000', 5, 'b4.jpg'),
(18, 'dress', 43, 'M', 'old', 9, 'dress for cold', '900', 6, '41.png'),
(19, 'Jeans', 42, '32', 'kara', 7, 'kara', '500', 3, '58.png'),
(20, 'jeans', 42, '30', 'women kara jeans', 11, 'womens kara jeans', '400', 8, '52.png'),
(21, 'coat', 46, 'L', 'child dress', 12, 'child coat', '350', 2, 'child dress (11).jpg'),
(23, 'women dress', 44, 'S', 'dress', 15, 'Shoulder Tea Dress', '1000', 10, 'w dress.jpg'),
(24, 'body', 43, 'M', 'body t shirt', 8, 'Beverly Hills', '340', 14, 'women shirt (9).jpg'),
(25, 'Denim', 42, '31', 'kara', 7, 'Spray On Skinny Jea', '500', 3, 'mzz73014_grey_xl_2.jpg'),
(26, 'Crew Neck T-Shirt', 43, 'M', 'Shirt', 8, 'Beverly Hills Crew Neck T-Shirt', '340', 4, '2 (2).png'),
(27, 'Body t-shirt', 42, 'L', 'T-Shirt', 8, 'best V shape body', '300', 20, '16-t-shirt-png-image-thumb.png'),
(29, 'T-Shirt', 43, 'M', 'shoes', 13, 'Embossed Vamp Smart', '400', 4, 'women shirt (16).jpg'),
(30, 'shoe', 45, '40', 'low', 10, 'Faux Suede Tassel D', '1000', 4, 'mzz66349_sand_xl.jpg'),
(31, 'shoe', 45, '39', 'low', 10, 'Embossed Vamp Smart', '500', 7, 'mzz65882_tan_xl.jpg'),
(32, 'shoe', 45, '40', 'shoes', 10, 'Faux Suede Tassel L', '1200', 9, 'mzz65862_grey_xl.jpg'),
(33, 'shoe', 45, '33', 'men shoes', 10, 'Sarah Double Buckle', '500', 7, 'mzz65876_tan_xl.jpg'),
(34, 'shoe', 44, '42', 'men shoes', 10, 'men shoes', '1000', 7, 'mzz65884_black_xl.jpg'),
(35, 'Boys Short Shirt', 46, 'M', 'childs', 12, 'Boys Short Sleeved ', '500', 4, 'kzz97714_black_xl_2.jpg'),
(36, 'childs coat', 44, 'M', 'dress', 12, 'Low Hem Dress, Big Girls', '340', 5, 'bb1.jpg'),
(37, 'childs', 44, 'L', 'dress', 12, 'Skinny Fit Denim Jeans', '550', 5, 'bb2.jpg'),
(38, 'childs half', 44, 'M', 'dress', 12, 'Univibe Gunther Cotton Shorts', '340', 5, '9337028_fpx.jpg'),
(39, 'Big Girls', 44, 'M', 'dress', 12, 'Glitter Lace Bodice Dress', '200', 10, '9439669_fpx.jpg'),
(40, 'childs', 44, 'M', 'dress', 12, 'Lightning Hoodie & Jogger Pants', '550', 3, 'child dress (13).jpg'),
(41, 'Kids Girls', 44, 'M', 'dress', 12, 'Kids Girls-1', '340', 3, 'kids-girls01-268x322.jpg'),
(42, 'T-Shirt My Dad', 46, 'M', 'Shirt', 12, 'Awesome  Cotton', '340', 5, 'kids-boys08-268x322.jpg'),
(43, 'kids', 46, 'L', 'dress', 12, 'Kids Boys-6', '210', 3, 'kids-boys06-268x322.jpg'),
(44, 'Summery Dress', 45, 'M', 'dress', 15, 'Ladies’ Summery Dress', '1500', 7, '12-1-300x360.jpg'),
(45, 'Ladies Black Dress', 45, 'S', 'dress', 15, 'Ladiesâ€™ Little Blac', '1000', 4, '1-3-268x322.jpg'),
(46, 'Ladies Little Green Dress', 45, 'L', 'dress', 15, 'Ladiesâ€™ Little Gree', '1000', 10, '9-3-268x322.jpg'),
(47, 'Ladies Olive Green', 45, 'M', 'dress', 15, 'Ladiesâ€™ Olive Green', '500', 7, '5-3-268x322.jpg'),
(48, 'Casual T-Shirt', 45, 'M', 'dress', 15, 'Womenï¿½s Casual Shirt', '340', 3, '1.3-268x322.jpg'),
(49, 'Ladies', 45, 'M', 'dress', 15, 'Ladiesï¿½ Floral Shalwar', '550', 5, '1-3-268x322.jpg'),
(51, 'Nike free', 45, '42', 'shoes', 10, 'nike-free-rn-2018', '1200', 7, 'N.nike-free-rn-2018.jpg'),
(52, 'nike-zoom', 45, '41', 'shoes', 10, 'nike-zoom-live-ii', '3000', 6, 'N.nike-zoom-live-ii.jpg'),
(53, 'N.wmns-nike-odyssey-react', 45, '42', 'shoes', 10, 'N.wmns-nike-odyssey-react', '2400', 4, 'N.wmns-nike-odyssey-react.jpg'),
(54, 'nike-dualtone-racer', 45, '39', 'shoes', 10, 'w-nike-dualtone-racer', '1300', 10, 'N.w-nike-dualtone-racer.jpg'),
(55, 'NB.574-classic-overcast', 45, '42', 'shoes', 10, 'classic-overcast', '2000', 10, 'NB.574-classic-overcast.jpg'),
(56, 'women''s Red shoe', 45, '38', 'shoes', 17, 'Red dinner women''s shoe', '700', 5, 'women''s shoe (1).jpg'),
(57, 'women''s shoe', 45, '40', 'shoes', 17, 'women''s shoe', '800', 2, 'women''s shoe (13).jpg'),
(58, 'women''s shoe', 45, '37', 'shoes', 17, 'women''s scandal shoe', '400', 6, 'women''s shoe (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `product_id`, `rating`) VALUES
(1, 1, 4),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE IF NOT EXISTS `warehouse` (
  `Warehouse_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Country` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `PostalCode` varchar(55) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Warehouse` varchar(55) NOT NULL,
  PRIMARY KEY (`Warehouse_ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `PostalCode` (`PostalCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`Warehouse_ID`, `Country`, `City`, `Address`, `PostalCode`, `Email`, `Warehouse`) VALUES
(7, 'ET', 'Robe', 'Robe', '251', 'robestore@gmail.com', 'jean'),
(8, 'ET', 'Robe', 'Robe', '254', 'robestore@store8.com', 'shirts'),
(9, 'ET', 'Robe', 'Robe', '253', 'robestore@store.com', 'Dress'),
(10, 'ET', 'Robe', 'Robe', '255', 'robestore@storee.com', 'Shoes'),
(11, 'ET', 'robe', 'robe', '245', 'robsan@gmail.com', 'women jeans'),
(12, 'ET', 'robe', 'robe', '855', 'gelo@gmail.com', 'childs'),
(13, 'ET', 'robe', 'robe', '247', 'galo@gvhg.com', 'women tshirt'),
(15, 'ET', 'robe', 'robe', '215', 'gelee@gmail.com', 'women dress'),
(17, 'ET', 'robe', 'robe', '248', 'galebebu@gmail.com', 'women shoes');
