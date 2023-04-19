-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 05:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garments-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`USERNAME`, `PASSWORD`) VALUES
('admin', 'admin'),
('onik', '123');

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(10) NOT NULL,
  `Fathers_Name` varchar(20) NOT NULL,
  `Mothers_Name` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Religion` varchar(11) NOT NULL,
  `Marital_Status` varchar(11) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Division` varchar(15) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Level_of_Education` varchar(20) NOT NULL,
  `Degree_Title` varchar(11) NOT NULL,
  `Result` int(10) NOT NULL,
  `Passing_Year` date NOT NULL,
  `Skill` varchar(100) NOT NULL,
  `company_Name` varchar(20) NOT NULL,
  `Company_Business` varchar(20) NOT NULL,
  `Company_Location` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Responsibilities` varchar(20) NOT NULL,
  `Joining_From_Date` date NOT NULL,
  `Joining_To_Date` date NOT NULL,
  `Select_your_Position` varchar(20) NOT NULL,
  `Upload_File` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application_form`
--

INSERT INTO `application_form` (`id`, `First_Name`, `Last_Name`, `Fathers_Name`, `Mothers_Name`, `Date_of_Birth`, `Gender`, `Religion`, `Marital_Status`, `Blood_Group`, `Country`, `Division`, `District`, `Phone`, `Email`, `Level_of_Education`, `Degree_Title`, `Result`, `Passing_Year`, `Skill`, `company_Name`, `Company_Business`, `Company_Location`, `Designation`, `Department`, `Responsibilities`, `Joining_From_Date`, `Joining_To_Date`, `Select_your_Position`, `Upload_File`) VALUES
(1, 'onik', 'td', 'td', 'td', '2023-03-01', 'male', 'aa', 'aa', 'a', 'a', '', '', 0, '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(2, 'hasan', 'ali', '', '', '0000-00-00', '', '', '', '', '', '', '', 0, '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone_no`, `message`) VALUES
(5, 'loman', 'loman@gmail.com', 1835689587, 'tst'),
(6, 'test ', 'test', 1958988, 'test'),
(7, 'mamun ', 'mamun', 0, 'mamun'),
(13, 'testlllllllllllll ', 'mamun@gmail.com', 21564, ''),
(16, 'testlllllll666666666', 'mamun@gmail.com', 21564, 'fvdvhuihikl'),
(35, 'uhk ', 'jbjhbk@ggjh.hubk', 0, 'tft97vyubhnojkml'),
(38, 'onik ', 'onik@gmail.com', 1468410, 'test'),
(40, 'hasan ', 'hasan@gmail.com', 17951553, 'test'),
(48, 'masud ', 'onik@gmail.com', 1468410, 'test'),
(49, 'jahed ', 'jahed@gmail.com', 1598453213, 'test'),
(50, 'jahed ', 'jahed@gmail.com', 1598453213, 'test'),
(51, 'jahed ', 'jahed@gmail.com', 1598453213, 'test'),
(61, 'jahedgnvhm ', 'jahed@gmail.com', 1598453213, 'yrhdfjhkhk'),
(62, 'jahedgnvhm ', 'jahed@gmail.com', 1598453213, 'yrhdfjhkhk'),
(63, 'jahedgnvhm ', 'jahed@gmail.com', 1598453213, 'yrhdfjhkhk'),
(64, 'jahedgnvhm ', 'jahed@gmail.com', 1598453213, 'yrhdfjhkhk'),
(65, 'jahedgnvhm ', 'jahed@gmail.com', 1598453213, 'yrhdfjhkhk'),
(66, 'ddd ', 'd@gg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `COMPANY_NAME` varchar(20) NOT NULL,
  `COMPANY_ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `CONTACT_NUMBER`, `ADDRESS`, `COMPANY_NAME`, `COMPANY_ADDRESS`) VALUES
(4, 'Onik Td', '0179898289', 'Sirajganj, Rajshahi', 'Xxxxx', 'Dhaka , Bangladesh'),
(13, 'Sova', '0172236969', 'Rani Station', 'Dr Ramesh', 'Rani Station'),
(14, 'Shoaib', '0190285147', 'Pokhara-16, Dhikidada', 'Hari Bahadur', 'Matepani-12'),
(18, 'mamun', '0179856535', 'dhaka', 'ghjgsajhsjd', 'dhaka'),
(20, 'Trfdvdfvf', '0179898289', 'Tongi , Dhaka', 'Fsgfgg', '01798982899'),
(21, 'Lota', '0125469875', 'China, China', 'Djg', 'China, China'),
(22, 'masud', '0259875642', 'china, china', 'abedin', 'tongi,dhaka'),
(24, 'onik2', '0259875642', 'china, china', 'abedin', 'tongi,dhaka'),
(25, 'onik2', '0259875642', 'china, china', 'abedin', 'tongi,dhaka'),
(26, 'masud', '0259875642', 'china, china', 'abedin2 adasfdsg', 'tongi,dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`name`, `email`, `contact_number`, `address`) VALUES
('onik', 'onik@gmail.com', '01234567899', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `INVOICE_ID` int(11) NOT NULL,
  `NET_TOTAL` double NOT NULL DEFAULT 0,
  `INVOICE_DATE` date NOT NULL DEFAULT current_timestamp(),
  `CUSTOMER_ID` int(11) NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `TOTAL_DISCOUNT` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`INVOICE_ID`, `NET_TOTAL`, `INVOICE_DATE`, `CUSTOMER_ID`, `TOTAL_AMOUNT`, `TOTAL_DISCOUNT`) VALUES
(3, 2494.7, '2023-03-25', 6, 2626, 131.3),
(4, 24947, '2023-03-31', 4, 26260, 1313);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `PACKING` varchar(20) NOT NULL,
  `GENERIC_NAME` varchar(100) NOT NULL,
  `SUPPLIER_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`ID`, `NAME`, `PACKING`, `GENERIC_NAME`, `SUPPLIER_NAME`) VALUES
(1, 'Nicip Plus', '10tab', 'Paracetamole', 'BDPL PHARMA'),
(2, 'Crosin', '10tab', 'Hdsgvkvajkcbja', 'Kiran Pharma'),
(4, 'Dolo 650', '15tab', 'paracetamole', 'BDPL PHARMA'),
(5, 'Gelusil', '10tab', 'mint fla', 'Desai Pharma'),
(6, 'Test', '10', 'Test', 'Rsrnrnrndnn');

-- --------------------------------------------------------

--
-- Table structure for table `medicines_stock`
--

CREATE TABLE `medicines_stock` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `BATCH_ID` varchar(20) NOT NULL,
  `EXPIRY_DATE` varchar(10) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `RATE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `medicines_stock`
--

INSERT INTO `medicines_stock` (`ID`, `NAME`, `BATCH_ID`, `EXPIRY_DATE`, `QUANTITY`, `MRP`, `RATE`) VALUES
(1, 'Crosin', 'CROS12', '12/34', 189, 2626, 26),
(2, 'Gelusil', 'G327', '12/42', 0, 15, 12),
(3, 'Dolo 650', 'DOLO327', '01/23', 3, 30, 24),
(4, 'Nicip Plus', 'NI325', '05/22', 3, 32.65, 28);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `PACKING` varchar(20) NOT NULL,
  `GENERIC_NAME` varchar(100) NOT NULL,
  `SUPPLIER_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `NAME`, `PACKING`, `GENERIC_NAME`, `SUPPLIER_NAME`) VALUES
(1, 'Nicip Plus', '10tab', 'Paracetamole', 'BDPL PHARMA'),
(2, 'Crosin', '10tab', 'Hdsgvkvajkcbja', 'Kiran Pharma'),
(4, 'Dolo 650', '15tab', 'paracetamole', 'BDPL PHARMA'),
(5, 'Gelusil', '10tab', 'mint fla', 'Desai Pharma');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `SUPPLIER_NAME` varchar(100) NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `VOUCHER_NUMBER` int(11) NOT NULL,
  `PURCHASE_DATE` varchar(10) NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `PAYMENT_STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `pass`) VALUES
('onik', '1234'),
('soayeb', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `NAME`, `EMAIL`, `CONTACT_NUMBER`, `ADDRESS`) VALUES
(31, 'Soayeb', 'soayeb@gmail.com', '0123558655', 'Dhaka,bangladesh'),
(32, 'Onik', 'onik@gmail.com', '0179898289', 'Test, Test'),
(33, 'Hasan', 'hasan@gmail.com', '0178898645', 'Dhaka,Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `application_form`
--
ALTER TABLE `application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`INVOICE_ID`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicines_stock`
--
ALTER TABLE `medicines_stock`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `BATCH_ID` (`BATCH_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`VOUCHER_NUMBER`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_form`
--
ALTER TABLE `application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `INVOICE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicines_stock`
--
ALTER TABLE `medicines_stock`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `VOUCHER_NUMBER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
