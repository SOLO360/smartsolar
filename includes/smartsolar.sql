-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2020 at 08:21 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartsolar`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `addres` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_card_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_card_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bulb_no` int(50) NOT NULL,
  `charger` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `clerk_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reg_date` date DEFAULT NULL,
  `s_date` date NOT NULL,
  `service_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cont_end` date DEFAULT NULL,
  `amount` int(10) NOT NULL,
  `c_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `mname`, `lname`, `addres`, `dob`, `phone`, `gender`, `id_card_type`, `id_card_no`, `bulb_no`, `charger`, `clerk_name`, `reg_date`, `s_date`, `service_type`, `status`, `image`, `cont_end`, `amount`, `c_no`) VALUES
(1, 'Farida', 'Omary', 'Omary', 'Muriet-Kitonga', '1985-04-20', '0762069830', 'female', 'Voter Id', 'T-100632745731', 1, 'charger', 'Habibu', '2019-05-19', '2019-05-19', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-04-02', 6000, '0'),
(2, 'Hawa', 'Maulid', 'Maulid', 'Muriet-Kitonga', '1983-12-08', '0758756449', 'female', 'Voter Id', 'T-100659215793', 1, 'charger', 'Habibu', '2019-05-19', '2019-05-19', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-13', 6000, '0'),
(3, 'Evector', 'Boniface', 'Karia', 'Muriet-Kitonga', '1972-04-22', '0756975842', 'female', 'Voter Id', 'T-100670391021', 1, 'charger', 'Habibu', '2019-05-04', '2019-05-04', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2070-03-12', 6000, '0'),
(4, 'Fina', 'Joseph', 'Mugembe', 'Muriet-Kitonga', '1990-01-08', '0765377496', 'female', 'Id-card Type', '', 1, 'charger', 'Habibu', '2019-05-04', '2019-05-04', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-13', 6000, '0'),
(5, 'Ramadhan', 'Ibrahim', 'Hamis', 'Njiro-msola', '1990-07-09', '0758567421', 'female', 'Driving Licence', '4001821997', 2, 'charger', 'Habibu', '2019-08-10', '2019-08-10', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2070-03-12', 8000, '0'),
(6, 'Fatina', 'Saidi', 'Saidi', 'Njiro-msola', '1969-07-01', '0764432025', 'female', 'Voter Id', 'T-100696173936', 2, 'no-charger', 'Habibu', '2019-06-10', '2019-06-10', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-10-16', 6000, '0'),
(7, 'Rama', 'Hamisi', 'Hussein', 'Sakina-charity', '1994-04-04', '0743094561', 'male', 'Id-card Type', '', 2, 'charger', 'Habibu', '2019-05-28', '2019-05-28', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2070-03-12', 6000, '0'),
(8, 'Lucia', 'Peter', 'Peter', 'Muriet', '1982-11-06', '0763283894', 'female', 'Voter Id', 'T-100316464631', 3, 'no-charger', 'Habibu', '2019-03-09', '2019-03-09', 'Contract', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2020-09-07', 10000, '0'),
(9, 'Mwaje', 'Awadhi', 'Mfinanga', 'Muriet', '1989-08-20', '0754802170', 'female', 'Voter Id', 'T-100629919893', 2, 'charger', 'Habibu', '2019-03-09', '2019-03-09', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2070-03-12', 8000, '0'),
(10, 'Bernadeta', 'Kileo', 'Kileo', 'Sakina-charity', '1976-03-04', '0742468672', 'female', 'Voter Id', 'T-100671445923', 1, 'no-charger', 'Habibu', '2018-04-04', '2018-04-04', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-23', 4000, '0'),
(11, 'Tolendake', 'Sanga', 'Sanga', 'Ngarenaro', '1975-10-10', '0688102324', 'female', 'Voter Id', 'T-100696797867', 2, 'charger', 'Habibu', '2019-01-26', '2019-01-26', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2070-03-12', 6000, '0'),
(12, 'Mwajuma', 'Rajabu', 'Kiemmi', 'Murombo', '1984-06-26', '0673700369', 'female', 'Id-card Type', '', 5, 'no-charger', 'Habibu', '2019-01-24', '2019-01-24', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-23', 10000, '0'),
(13, 'Twaha', 'Salimu', 'Amour', 'Matejo', '1957-08-11', '0785616195', 'male', 'Driving Licence', '', 4, 'charger', 'Habibu', '2019-01-23', '2019-01-23', 'Company', 'on-service', 'WhatsApp Image 2020-03-12 at 00.33.05.jpeg', '2070-03-12', 8000, '0'),
(14, 'Sophia', 'Josephat', 'Ama', 'Ngarenaro-njia ngombe', '1977-08-18', '0752286566', 'female', 'Voter Id', 'T-100602820755', 1, 'no-charger', 'Habibu', '2018-02-10', '2018-02-10', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-23', 4000, '0'),
(15, 'Shabani', 'I', 'Choki', 'Ol Matejo A- Magogoni', '1941-05-15', '0786478131', 'male', 'Voter Id', 'T-1002234561604', 1, 'no-charger', 'Habibu', '2019-01-21', '2019-01-21', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-24', 4000, '0'),
(16, 'Rose', 'Solomon', 'Lesironga', 'Kambi ya fisi njia ngombe', '1966-01-29', '0769295491', 'female', 'Voter Id', '', 1, 'no-charger', 'Habibu', '2018-10-13', '2018-10-13', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-23', 4000, '0'),
(17, 'Rogers', 'Nicolous', 'Lema', 'Sakina-charity', '1967-05-23', '0766688915', 'male', 'Voter Id', 'T-100645657823', 1, 'no-charger', 'Habibu', '2019-01-02', '2019-01-02', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-23', 4000, '0'),
(18, 'Joseph', 'Yohane', 'Mbaga', 'Dar es Salaam', '1996-02-02', '0674370112', 'male', '', '', 9, 'charger', 'Habibu', '2019-12-05', '2019-12-05', 'Company', 'on-service', '', '2024-12-25', 10000, ''),
(19, 'Jofrey', 'John', 'Mwamnyange', 'Majengo', '1987-01-03', '0653399621', 'male', 'Id-card Type', '', 1, 'charger', 'Habibu', '2019-01-22', '2019-01-22', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-12', 6000, '0'),
(20, 'Fatuma', 'Hamisi', 'Kisagase', 'Njiro-ndogo', '1983-07-13', '0767689455', 'female', 'Voter Id', 'T-100240875408', 2, 'charger', 'Habibu', '2018-12-08', '2018-12-08', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2070-03-14', 8000, '0'),
(21, 'Justo', 'A', 'Mbaga', 'Muriet-intec', '1982-02-06', '0763580215', 'male', 'Voter Id', 'T-100303718243', 2, 'no-charger', 'Habibu', '2018-03-12', '2018-03-12', 'Contract', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 20000, '0'),
(22, 'Hawa', 'Hussein', 'Mwashi', 'Njiro-ndogo', '1974-12-01', '0769504585', 'female', 'Id-card Type', '', 3, 'charger', 'Habibu', '2018-11-22', '2018-11-22', 'Company', 'Pending', 'WhatsApp Image 2020-03-12 at 00.33.05.jpeg', '2070-03-13', 6000, '0'),
(23, 'Lilian', 'E', 'Mollel', 'Ol Matejo A mashine mbili', '1981-10-07', '0764545468', 'female', 'Voter Id', 'T-100247391740', 3, 'charger', 'Habibu', '2018-11-03', '2018-11-03', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2070-03-13', 8000, '0'),
(24, 'Happiness', 'Nicolous', 'Nicolous', 'Njiro-ndogo', '1988-11-25', '0763850265', 'female', 'Id-card Type', '', 3, 'charger', 'Habibu', '2018-11-10', '2018-11-10', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-13', 8000, '0'),
(25, 'Mahmoud', 'Ngwese', 'Ngwese', 'Njiro-ndogo', '1952-05-05', '0654423657', 'male', 'Voter Id', 'T-100069212926', 3, 'charger', 'Habibu', '2018-10-20', '2018-10-20', 'Company', 'on-service', 'WhatsApp Image 2020-03-12 at 00.33.05.jpeg', '2070-03-13', 8000, '0'),
(26, 'Idd', 'Selemani', 'Fundi', 'Kambi ya fisi ', '1952-03-11', '0754310538', 'male', 'Voter Id', 'T-100602815387', 1, 'no-charger', 'Habibu', '2018-10-21', '2018-10-21', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-24', 4000, '0'),
(27, 'Ally', 'Shaban', 'Iddy', 'Ol Matejo B', '1983-12-12', '0746366316', 'male', 'Voter Id', 'T-100248094413', 1, 'charger', 'Habibu', '2018-11-02', '2018-11-02', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2070-03-13', 6000, '0'),
(28, 'Francis', 'M', 'Ailale', 'Ngarenaro darajani', '1960-07-01', '0766182504', 'male', 'Voter Id', 'T-100316563486', 2, 'no-charger', 'Habibu', '2018-12-27', '2018-12-27', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 6000, '0'),
(29, 'Shabani', 'Iddy', 'Sadala', 'Ol Matejo A- Magogoni', '1965-10-19', '0759049506', 'male', 'Voter Id', 'T-100572004850', 2, 'no-charger', 'Habibu', '2018-09-10', '2018-09-10', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-24', 6000, '0'),
(30, 'Mary', 'Melkizedeki', 'Kessy', 'Ol Matejo A- Magogoni', '1988-08-07', '0754675957', 'female', 'Voter Id', 'T-100257689268', 1, 'no-charger', 'Habibu', '2018-09-09', '2018-09-09', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-24', 4000, '0'),
(31, 'Amran', 'Hemed', 'Shemlugu', 'Ngarenaro darajani', '1950-07-01', '0656791340', 'male', 'Voter Id', 'T-100654222554', 1, 'no-charger', 'Habibu', '2018-08-27', '2018-08-27', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-29', 4000, '0'),
(32, 'Josia', 'Nason', 'Mrisho', 'Sakina', '1993-04-26', '0759189544', 'female', 'Voter Id', 'T-10064937291', 1, 'no-charger', 'Habibu', '2018-08-26', '2018-08-26', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-24', 4000, '0'),
(33, 'Janefer', 'Jackson', 'Fotte', 'Ol Matejo B mti wa mila', '1956-09-27', '0768520300', 'female', 'Voter Id', 'T-100215287462', 2, 'no-charger', 'Habibu', '2018-08-25', '2018-08-25', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-24', 6000, '0'),
(34, 'Charles', 'K', 'Kussaga', 'Ol Matejo mbaude', '1999-02-16', '0746022370', 'male', 'Voter Id', 'T-100317877182', 1, 'no-charger', 'Habibu', '2018-10-03', '2018-10-03', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-24', 4000, '0'),
(35, 'Anna', 'Josephat', 'Maunga', 'Sakina', '1687-11-01', '0765421618', 'female', 'Voter Id', 'T-100696007521', 1, 'no-charger', 'Habibu', '2018-08-18', '2018-08-18', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-25', 4000, '0'),
(36, 'Bibiana', 'Dismas', 'Minja', 'Sakina', '1978-08-18', '0748309916', 'female', 'Voter Id', 'T-100322894176', 1, 'no-charger', 'Habibu', '2018-08-18', '2018-08-18', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-25', 4000, '0'),
(37, 'Onesmo', 'Mussa', 'Maboyi', 'Matejo b', '1986-03-13', '0754876672', 'male', 'Voter Id', 'T-100248101444', 1, 'no-charger', 'Habibu', '2018-08-12', '2018-08-12', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-24', 4000, '0'),
(38, 'Samwel', 'Geofrey', 'Kivuyo', 'Ol Matejo B', '1991-01-03', '0788597161', 'male', 'National Id', 'T-100627479985', 3, 'no-charger', 'Habibu', '2018-08-12', '2018-08-12', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-24', 8000, '0'),
(39, 'Elinipa', 'M', 'Abraham', 'Ol Matejo B mbaude', '1979-08-16', '0755109285', 'female', 'Voter Id', 'T-100614173459', 1, 'no-charger', 'Habibu', '2018-07-29', '2018-07-29', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-24', 4000, '0'),
(40, 'Paulo', 'Emmanuel', 'Tluway', 'Marera karatu', '1987-05-01', '0767689591', 'male', 'Voter Id', 'T-100072035504', 4, 'charger', 'Habibu', '2018-07-29', '2018-07-29', 'Contract', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-24', 10000, '0'),
(41, 'Zuhura', 'Iddy', 'Soya', 'Kambi ya fisi', '1969-04-19', '0753871235', 'female', 'Id-card Type', '', 2, 'charger', 'Habibu', '2018-07-27', '2018-07-27', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2070-03-13', 8000, '0'),
(42, 'Fatuma', 'Abdi', 'Nyange', 'Ol Matejo B', '1986-04-28', '0744648078', 'female', 'Voter Id', 'T-100674357952', 3, 'charger', 'Habibu', '2018-06-15', '2018-06-15', 'Contract', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-06-14', 10000, '0'),
(43, 'Salma', 'M', 'Mdoe', 'Ngarenaro darajani', '1966-10-15', '0653965449', 'female', 'Voter Id', 'T-100696803565', 1, 'no-charger', 'Habibu', '2018-07-23', '2018-07-23', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0'),
(44, 'Fatuma', 'Pazi', 'Selemani', 'Ngarenaro darajani', '1993-10-04', '0745444064', 'female', 'Voter Id', 'T-100570701090', 1, 'no-charger', 'Habibu', '2018-07-22', '2018-07-22', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-29', 4000, '0'),
(45, 'Abdallah', 'Hassan', 'Maogola', 'Ngarenaro darajani', '1984-06-12', '0756841050', 'male', 'Voter Id', 'T-100638005357', 1, 'no-charger', 'Habibu', '2017-07-22', '2017-07-22', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-24', 4000, '0'),
(46, 'Nazarina', 'Ayubu', 'Lula', 'Ngarenaro darajani', '1993-05-23', '0744684583', 'female', 'Voter Id', 'T-100261113702', 1, 'no-charger', 'Habibu', '2018-07-22', '2018-07-22', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-24', 4000, '0'),
(47, 'Mary', 'W', 'Abneri', 'Ngarenaro darajani', '1987-05-09', '0759306873', 'female', 'Voter Id', 'T-100696804723', 1, 'no-charger', 'Habibu', '2018-07-22', '2018-07-22', 'Company', 'Pending', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-29', 4000, '0'),
(48, 'Stella', 'Joseph', 'Ndanu', 'Sanawari', '1968-07-07', '0767859271', 'female', 'Voter Id', 'T-100681001209', 2, 'charger', 'Habibu', '2018-07-20', '2018-07-20', 'Contract', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-10-01', 10000, '0'),
(49, 'Janeth', 'Lucas', 'Haidu', 'Ol Matejo A- Magogoni', '1979-01-02', '0753238473', 'female', 'Id-card Type', '', 2, 'charger', 'Habibu', '2018-07-08', '2018-07-08', 'Company', 'off-service', 'WhatsApp Image 2020-03-12 at 00.33.05.jpeg', '2070-03-13', 8000, '0'),
(50, 'Fellista', 'Boniface', 'Alute', 'Ol Matejo A- Magogoni', '1979-07-20', '0765294292', 'female', 'Voter Id', 'T-100647255706', 2, 'no-charger', 'Habibu', '2018-07-08', '2018-07-08', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-24', 6000, '0'),
(51, 'Christina', 'Paul', 'Mollel', 'Ol Matejo B mbaude', '1988-03-05', '0755674597', 'female', 'Voter Id', 'T-100248100782', 1, 'no-charger', 'Habibu', '2020-01-11', '2020-01-11', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', NULL, 4000, NULL),
(52, 'Ramadhan', 'Maulid', 'Athumani', 'Ol Matejo B tazan', '1990-03-14', '0764154971', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-06-17', '2018-06-17', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-24', 4000, '0'),
(53, 'Izack', 'Godfrey', 'Kisamo', 'Ol Matejo B tazan', '1996-07-13', '0745617198', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-06-12', '2018-06-12', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-24', 4000, '0'),
(54, 'Jamila', 'Muhidini', 'Juma', 'Ol Matejo B tazan', '1997-03-26', '0764558831', 'female', 'Voter Id', 'T-100236667809', 1, 'no-charger', 'Habibu', '2018-03-12', '2018-03-12', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-24', 4000, '0'),
(55, 'Paskalina', 'A', 'Bayo', 'Ol Matejo B mbaude', '1984-04-10', '0759333314', 'female', 'Voter Id', 'T-100248097153', 2, 'no-charger', 'Habibu', '2018-06-05', '2018-06-05', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 6000, '0'),
(56, 'Ally', 'Ayubu', 'Saidi', 'Ol Matejo B mbaude', '1992-04-10', '0782632415', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-05-05', '2018-05-05', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 4000, '0'),
(57, 'Salehe', 'Mohamed', 'Mohamed', 'Ol Matejo B mbaude', '1995-05-01', '0769456346', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-04-22', '2018-04-22', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-29', 4000, '0'),
(58, 'Grace', 'Michael', 'Tarimo', 'Ol Matejo B mbaude', '1997-05-20', '0766807038', 'male', 'Id-card Type', '', 2, 'no-charger', 'Habibu', '2018-04-24', '2018-04-24', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-29', 6000, '0'),
(59, 'Lucy', 'Daudi', 'Tunda', 'Ol Matejo B mbaude', '1985-02-11', '0765367878', 'female', 'Voter Id', 'T-100643825141', 1, 'no-charger', 'Habibu', '2018-04-24', '2018-04-24', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0'),
(60, 'Paulina', 'Hasani', 'Gao', 'Ol Matejo B mbaude', '1979-12-12', '0763500627', 'female', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-04-25', '2018-04-25', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 4000, '0'),
(61, 'Caren', 'Mohamed', 'Dule', 'Ol Matejo B mbaude', '1995-12-01', '0765807980', 'female', 'Voter Id', 'T-100248096939', 1, 'no-charger', 'Habibu', '2018-04-25', '2018-04-25', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-29', 4000, '0'),
(62, 'Kitia', 'Juma', 'Kitia', 'Ol Matejo B mbaude', '1977-01-05', '0768084507', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-04-25', '2018-04-25', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0'),
(63, 'Rehema', 'Uforo', 'Tilya', 'Sakina-charity', '1972-11-09', '0756800749', 'female', 'Voter Id', 'T-100695919896', 1, 'no-charger', 'Habibu', '2018-04-21', '2018-04-21', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2021-09-29', 4000, '0'),
(64, 'Joyce', 'Kika', 'Sebarua', 'Sakina-charity', '1973-03-04', '0654033357', 'female', 'Voter Id', 'T-100215094167', 1, 'no-charger', 'Habibu', '2018-04-21', '2018-04-21', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 4000, '0'),
(65, 'Rahma', 'Abdillah', 'Msanga', 'Ol Matejo B-Mnarani', '1989-12-31', '0756001157', 'female', 'Voter Id', 'T-100215091036', 1, 'no-charger', 'Habibu', '2018-05-03', '2018-05-03', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 6000, '0'),
(66, 'Fina', 'John', 'Mpare', 'Ol Matejo B-Mnarani', '1988-07-25', '0768943309', 'female', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-05-03', '2018-05-03', '0', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 4000, '0'),
(67, 'Bitizali', 'Daudi', 'Msuya', 'Sakina-charity', '1976-07-07', '0754407089', 'female', 'Voter Id', 'T-100695919748', 1, 'no-charger', 'Habibu', '2018-05-27', '2018-05-27', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 4000, '0'),
(68, 'Abubakary', 'Suleiman', 'Abubakary', 'Kambi ya fisi', '2000-05-01', '0685389531', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-06-10', '2018-06-10', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0'),
(69, 'Frank ', 'Joseph', 'Kiria', 'Sakina-charity', '1997-10-07', '0742318940', 'male', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2018-04-21', '2018-04-21', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0'),
(70, 'Zuwena', 'A', 'Juma', 'Muriet-Kitonga', '1983-03-04', '0675449644', 'female', 'Voter Id', 'T-100696098594', 1, 'charger', 'Habibu', '2019-06-02', '2019-06-02', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-18', 6000, '0'),
(71, 'Mwanaisha', 'M', 'Majuto', 'Muriet-Kitonga', '1986-07-19', '0717259172', 'female', 'Voter Id', 'T-100572531664', 2, 'no-charger', 'Habibu', '2019-06-02', '2019-06-02', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 6000, '0'),
(72, 'Ramadhani', 'Saidi', 'Musa', 'Muriet-Kitonga', '1977-07-17', '0712473929', 'female', 'Voter Id', 'T-100240873929', 1, 'charger', 'Habibu', '2019-06-02', '2019-06-02', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-18', 6000, '0'),
(73, 'Evar', 'Justine', 'Tesha', 'Muriet-Kitonga', '1976-01-01', '0768559631', 'female', 'Voter Id', 'T-1006850306103', 1, 'charger', 'Habibu', '2019-07-31', '2019-07-31', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2070-03-18', 4000, '0'),
(74, 'Angelina', 'J', 'Mtitu', 'Njiro-msola', '1987-12-16', '0763134461', 'female', 'Voter Id', 'T-100599827727', 1, 'no-charger', 'Habibu', '2019-08-18', '2019-08-18', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 4000, '0'),
(75, 'Anthony', 'Eligi', 'Mroso', 'Njiro-msola', '1982-04-14', '0765688648', 'female', 'Id-card Type', '', 3, 'charger', 'Habibu', '2019-09-08', '2019-09-08', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2070-03-18', 15000, '0'),
(76, 'Dorcas', 'Alpha', 'Terry', 'Njiro-msola', '1991-01-13', '0759461430', 'female', 'Voter Id', 'T-100687723508', 1, 'charger', 'Habibu', '2019-09-08', '2019-09-08', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.33.jpeg', '2070-03-18', 6000, '0'),
(77, 'Irene', 'Nathan', 'Gunda', 'Njiro-msola', '1997-03-29', '0753801016', 'female', 'Id-card Type', '', 2, 'charger', 'Habibu', '2019-09-08', '2019-09-08', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2070-03-18', 6000, '0'),
(78, 'Mwasiti', 'Kasim', 'Kivuyo', 'Kambi ya fisi', '1995-03-15', '0763050172', 'female', 'Voter Id', 'T-100317784567', 2, 'no-charger', 'Habibu', '2019-09-01', '2019-09-01', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-29', 6000, '0'),
(79, 'Rehema', 'Swalehe', 'Mjili', 'Ol Matejo B', '1962-09-24', '0782601895', 'female', 'Voter Id', 'T-100695915920', 1, 'no-charger', 'Habibu', '2019-09-15', '2019-09-15', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0'),
(80, 'Aziza', 'Kasim', 'Kivuyo', 'Kambi ya fisi', '1992-12-28', '0743196638', 'female', 'Voter Id', 'T-538149223908', 2, 'no-charger', 'Habibu', '2020-01-01', '2020-01-01', 'Company', 'off-service', 'WhatsApp Image 2020-03-11 at 22.07.36.jpeg', '2021-09-29', 6000, '0'),
(81, 'Lina', 'Abela', 'Mluya', 'Ol Matejo B mbaude', '1998-03-26', '0756549547', 'female', 'Id-card Type', '', 3, 'no-charger', 'Habibu', '2020-01-11', '2020-01-11', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.35.jpeg', '2021-09-29', 6000, '0'),
(82, 'Grace', 'Raphael', 'Shirima', 'Ol Matejo B mbaude', '1986-04-16', '0757189007', 'female', 'Id-card Type', '', 1, 'no-charger', 'Habibu', '2020-01-11', '2020-01-11', 'Company', 'on-service', 'WhatsApp Image 2020-03-11 at 22.07.34.jpeg', '2021-09-29', 4000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `month_issued` varchar(50) NOT NULL,
  `p_method` varchar(10) NOT NULL,
  `receipt_no` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `clerk_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PID`, `id`, `p_date`, `month_issued`, `p_method`, `receipt_no`, `amount`, `clerk_name`) VALUES
(1, 3, '2020-03-17', '3', 'mpesa', '7CH03HSQ8W6', 6000, 'Habibu'),
(2, 4, '2020-03-17', '3', 'mpesa', '7CH03HSQ8W6', 6000, 'Habibu'),
(4, 24, '2020-03-17', '3', 'mpesa', '7CH53HSN42X', 8000, 'Habibu'),
(5, 35, '2020-01-20', '1', 'mpesa', '7AK039JJNI4', 4000, 'Habibu'),
(6, 20, '2020-03-26', '2', 'mpesa', '7B793CGI0AL', 8000, 'Habibu'),
(7, 36, '2020-03-15', '1', 'mpesa', '7BF13DJMRHP', 4000, 'Habibu'),
(8, 35, '2020-02-22', '2', 'mpesa', '7BM93EKA49J', 4000, 'Habibu'),
(9, 35, '2020-03-26', '3', 'mpesa', '7CQ53J00REH', 4000, 'Habibu'),
(10, 42, '2020-03-30', '3', 'mpesa', '7CU23JGQZSK', 10000, 'Habibu'),
(11, 36, '2020-03-30', '2', 'mpesa', '7CU23JJMWVQ', 4000, 'Habibu'),
(12, 36, '2020-03-30', '3', 'mpesa', '7CU23JJMWVQ', 4000, 'Habibu'),
(13, 26, '2020-04-01', '1', 'cash', 'PIC/SS/C:26/01', 4000, 'Habibu'),
(14, 26, '2020-04-01', '2', 'cash', 'PIC/SS/C:26/02', 4000, 'Habibu'),
(15, 26, '2020-04-01', '3', 'cash', 'PIC/SS/C:26/03', 4000, 'Habibu'),
(16, 24, '2020-04-07', '4', 'mpesa', '7D743KKZMFY', 8000, 'Habibu'),
(17, 25, '2020-04-16', '1', 'mpesa', '7DH23LT18R8', 8000, 'Habibu'),
(18, 25, '2020-04-16', '2', 'mpesa', '7DH23LT18R8', 8000, 'Habibu'),
(19, 25, '2020-04-16', '3', 'mpesa', '7DH23LT18R8', 8000, 'Habibu'),
(20, 25, '2020-04-16', '4', 'mpesa', '7DH23LT18R8', 8000, 'Habibu'),
(21, 6, '2020-04-15', '1', 'mpesa', '7DF63LL070Y', 6000, 'Habibu'),
(22, 81, '2020-04-25', '4', 'mpesa', '7DQ03MXLVOG', 6000, 'Habibu'),
(23, 3, '2020-04-25', '4', 'mpesa', '7CH03HSQ8W6', 6000, 'Habibu'),
(24, 35, '2020-04-22', '4', 'mpesa', '7CQ53J00REH', 4000, 'Habibu'),
(25, 42, '2020-04-20', '4', 'mpesa', '7CU23JGQZSK', 10000, 'Habibu'),
(26, 13, '2020-05-04', '3', 'mpesa', '7E48301IFKC', 8000, 'Habibu'),
(27, 13, '2020-05-04', '4', 'mpesa', '7E483O1IFKC', 8000, 'Habibu'),
(28, 25, '2020-05-09', '5', 'cash', 'PIC/SS/C:25/01', 8000, 'Habibu'),
(29, 79, '2020-05-02', '4', 'cash', 'PIC/SS/C:79/01', 4000, 'Habibu'),
(32, 4, '2020-05-06', '4', 'mpesa', '7E613OAVLB1', 4000, 'Habibu'),
(33, 4, '2020-05-06', ' 5', 'mpesa', '7E65OAOR1', 4000, 'Habibu'),
(34, 24, '2020-05-08', '5', 'mpesa', '7E893OLCIMJ', 8000, 'Habibu');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serv_ID` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `serv_rep_date` date NOT NULL,
  `info` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `serv_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `serv_clr_date` date DEFAULT NULL,
  `clerk_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_ID`, `id`, `serv_rep_date`, `info`, `serv_type`, `serv_clr_date`, `clerk_name`) VALUES
(1, 1, '2020-04-05', 'Taa zina fifia mapema', NULL, NULL, NULL),
(2, 22, '2020-04-05', 'Taa Zina fifia Mapema', NULL, NULL, NULL),
(3, 42, '2020-04-10', 'Taa zina fifia', 'Panel', '2020-04-14', 'Habibu'),
(4, 16, '2020-05-09', 'Taa zina fifia\r\n', NULL, NULL, NULL),
(5, 21, '2020-05-09', 'Taa zime zima', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `address`, `image`) VALUES
(1, 'Habibu', '202cb962ac59075b964b07152d234b70', 'Arusha', 'WhatsApp Image 2019-12-06 at 20.55.29.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `one to many` (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_ID`),
  ADD KEY `many to many` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serv_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `one to many` FOREIGN KEY (`id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `many to many` FOREIGN KEY (`id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
