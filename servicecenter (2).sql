-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 11:39 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `servicecenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookorder`
--

CREATE TABLE IF NOT EXISTS `bookorder` (
  `userid` int(8) NOT NULL,
  `devid` int(8) NOT NULL,
  `problemtype` varchar(32) NOT NULL,
  `problem` varchar(32) NOT NULL,
  `problemdes` varchar(64) NOT NULL,
  `value` int(4) NOT NULL,
  `message` longtext NOT NULL,
  `amount` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookorder`
--

INSERT INTO `bookorder` (`userid`, `devid`, `problemtype`, `problem`, `problemdes`, `value`, `message`, `amount`) VALUES
(7832, 523, 'Camera', 'Functioning', 'Not working', 5, 'total replacement valurRs2000', ''),
(7832, 890, 'Wifi', 'Connecting', 'Shutting down', 11, '', ''),
(7832, 120, 'Screen', 'Touch', 'Not responding', 4, '', ''),
(5234, 782, 'Keypad', 'not working', 'keypad need replacement', 1, '', ''),
(7832, 510, 'Standby', 'Switchoff', 'poweroff', -1, '', ''),
(2412, 520, 'Touch Screen', 'Not responding', 'Broken', 1, '', ''),
(9195, 120, 'Poweroff', 'Poweroff button', 'Not responding', 4, '', ''),
(2412, 100, 'Not Switching off', 'powerbutton', 'poweroff', 2, '', ''),
(2412, 2003, 'Start', 'Poweron', 'Not working', 4, 'Sir\r\nOrder is under processing\r\nTotal cost for replacement is 200Rs\r\nThankyou\r\nApprove if you wish', ''),
(2412, 12704, 'Keypad Broken', 'broken keypad', 'not working properly', 2, '', ''),
(9325, 30661, 'scrn', 'broken', 'poyiiii', 3, '', ''),
(9325, 30661, 'DDFFFFGGGDF', 'broken keypad', 'PATTUVO?', 3, '', ''),
(7832, 34616, 'Camera malfunctioning', 'Not opening', 'Sutter problem', 4, 'Needs replacement of board\r\nTotal Rs2000\r\nApprove if satisfied', ''),
(7832, 1, '55', '55', '55', 0, '', ''),
(7832, 1, '55', '55', '55', 0, '', ''),
(7832, 0, 'dd', 'dd', 'dd', 0, '', ''),
(7832, 34616, 'call working not properly', 'phone hanging', 'phone hangs when making call', 4, 'Needs replacement of board\r\nTotal Rs2000\r\nApprove if satisfied', ''),
(7832, 59536, 'Software', 'Softwarebug', 'Crashing all the time', 11, 'Software flashing', 'Rs200'),
(7832, 40200, 'Qwerty keypad', 'Not working', 'Broken keypad', 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `userid` int(8) NOT NULL,
  `username` varchar(16) NOT NULL,
  `custname` varchar(16) NOT NULL,
  `custadd1` varchar(16) NOT NULL,
  `custadd2` varchar(16) NOT NULL,
  `custadd3` varchar(16) NOT NULL,
  `custemail` varchar(16) NOT NULL,
  `custphno` int(16) NOT NULL,
  `custlocation` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `username`, `custname`, `custadd1`, `custadd2`, `custadd3`, `custemail`, `custphno`, `custlocation`) VALUES
(2412, 'aiswarya', 'Aiswarya', 'lh', 'chengannur', 'alappuzha', 'aiswarya@gmail.c', 2147483647, 'ekm'),
(9195, 'vishnu', 'Vishnu K P', 'mh', 'chengannur', 'Alappuzha', 'vishnu@gmail.com', 996996323, 'tsr'),
(3941, '', '7854213356989', '', '', '', '', 0, ''),
(4155, '', '7854213356989', '', '', '', '', 0, ''),
(814, '', '7854213356989', '', '', '', '', 0, ''),
(9325, 'tmt', 'thomas george', 'tdpha', 'home<', 'knajar', 'thdjshh@', 24464623, 'tsr'),
(6705, '12321', '123321', '1321321', '321321', '321321', '1321321', 0, 'ekm'),
(7832, 'eldho', 'Eldho', 'MH', 'Cherrathara', 'Chengannur', 'eldho@gmail.com', 456789, 'ekm'),
(5819, '11', '1234', '6', '5', '9', '999', 8888, 'ekm'),
(7763, '5555', '124', '4444', '555', '555', '555', 444, 'ekm'),
(7860, '555', '555', '555', '555', '555', '555', 555, 'ekm'),
(9800, '44', '1234', '55', '5', '55', '55', 55, 'ekm'),
(9217, '55', 'gg', '55', '55', '55', '12a', 55, 'ekm'),
(230, '55', 'gg', '55', '55', '55', '12a', 55, 'ekm'),
(4309, '55', 'jjj', '55', '55', '55', '45', 55, 'ekm'),
(3334, '55', 'jjj', '55', '55', '55', '45', 55, 'ekm'),
(1144, '55', 'jjj', '55', '55', '55', '45', 55, 'ekm'),
(6700, '55', 'jjj', '55', '55', '55', '45', 55, 'ekm'),
(6757, '555', '555', '55', '55', '55', '1234', 55, 'ekm'),
(368, '555', '555', '55', '55', '55', '1234', 55, 'ekm'),
(2363, '55', '124', '5', '5', '5', '5', 5, 'ekm'),
(1365, '55', '124', '5', '5', '5', '5', 5, 'ekm'),
(1327, '55', '124', '5', '5', '5', '5', 5, 'ekm'),
(9901, '555', '124', '555', '555', '55', 'vishnukp321@gmai', 22, 'ekm'),
(6278, '55', 'Vishnu K P', '55', '55', '55', 'vishnu@gmail.com', 0, 'ekm'),
(7083, '55', '12', '55', '55', '55', '22', 55, 'ekm'),
(7524, '5555', '456', '55', '55', '55', '55', 55, 'ekm'),
(7376, 'sa', '2323', 'sa', 'sa', 'sa', 'as', 0, 'ekm'),
(4006, 'asdf123', 'asd123', 'asdfghj', 'asdfghj', 'asdfghj', '1234', 0, 'ekm');

-- --------------------------------------------------------

--
-- Table structure for table `devicelist`
--

CREATE TABLE IF NOT EXISTS `devicelist` (
  `userid` int(8) NOT NULL,
  `devid` int(16) NOT NULL,
  `devbrand` varchar(16) NOT NULL,
  `devproduct` varchar(16) NOT NULL,
  `devos` varchar(16) NOT NULL,
  `devimei` bigint(64) NOT NULL,
  `devlost` int(4) NOT NULL,
  `devwarranty` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devicelist`
--

INSERT INTO `devicelist` (`userid`, `devid`, `devbrand`, `devproduct`, `devos`, `devimei`, `devlost`, `devwarranty`) VALUES
(7832, 0, 'Apple', 'Tablet', 'iOS', 0, 1, 0),
(7832, 0, 'Samsung', 'Phone', 'Android', 0, 1, 0),
(7832, 0, 'Sony', 'Tablet', 'Windows', 0, 1, 0),
(7832, 0, 'Ipad', 'Apple', 'iOS', 2147483647, 1, 0),
(7832, 0, 'My pad', 'Allpe', 'android', 7894561230123654, 1, 0),
(7832, 0, '', '', '', 0, 1, 0),
(7832, 0, '', '', '', 0, 1, 0),
(2412, 360, 'Apple', 'Iphone', 'iOS', 12345678912345678, 1, 20),
(2412, 0, 'Apple Sam', 'Tablet', 'Windows', 998998998, 1, 0),
(2412, 12704, 'Asus', 'Zenphone', 'Android', 12345, 1, 6),
(7832, 34616, 'nokia', 'fone', 'antroid', 123456789, 0, 0),
(9325, 30661, 'htc', 'fone', 'antro', 789456, 1, 24),
(7832, 55892, 'apple 12', 'apple 12', 'apple', 123, 0, 0),
(7832, 317, 'apple 123', 'apple 123', 'apple 123', 123455, 0, 0),
(7832, 40200, 'hp', 'Apple', 'apple', 0, 0, 0),
(7832, 53015, 'Asus', 'Senui', 'Zenui', 123456, 0, 0),
(7832, 59536, 'Lenovo', 'K3 Note', 'Android', 789456, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(8) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `usertype`) VALUES
(7832, 'eldho', '5f4dcc3b5aa765d61d8327deb882cf99', 0),
(5534, 'edrin', 'a578ac77c19ec15b13422391e196c4a5', 0),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'worker', 'b61822e8357dcaff77eaaccf348d9134', 2),
(3, 'deliverer', 'c5548e74ec3c08a867e8eac9cc6cf90e', 3),
(2412, 'aiswarya', '32250170a0dca92d53ec9624f336ca24', 0),
(9195, 'vishnu', '96b33694c4bb7dbd07391e0be54745fb', 0),
(3941, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(4155, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(814, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(9325, 'tmt', '202cb962ac59075b964b07152d234b70', 0),
(6705, '12321', '7815696ecbf1c96e6894b779456d330e', 0),
(5819, '11', '15de21c670ae7c3f6f3f1f37029303c9', 0),
(7763, '5555', '15de21c670ae7c3f6f3f1f37029303c9', 0),
(7860, '555', '15de21c670ae7c3f6f3f1f37029303c9', 0),
(9800, '44', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(9217, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(230, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(4309, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(3334, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(1144, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(6700, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(6757, '555', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(368, '555', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(2363, '55', 'e4da3b7fbbce2345d7772b0674a318d5', 0),
(1365, '55', 'e4da3b7fbbce2345d7772b0674a318d5', 0),
(1327, '55', 'e4da3b7fbbce2345d7772b0674a318d5', 0),
(9901, '555', 'b6d767d2f8ed5d21a44b0e5886680cb9', 0),
(6278, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(7083, '55', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(7524, '5555', 'b53b3a3d6ab90ce0268229151c9bde11', 0),
(7376, 'sa', 'f970e2767d0cfe75876ea857f92e319b', 0),
(4006, 'asdf123', '7815696ecbf1c96e6894b779456d330e', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
