-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2018 at 04:30 AM
-- Server version: 5.6.39-83.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenison_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`id`, `username`, `password`, `admin_name`, `level`, `register_date`) VALUES
(11, 'tenison', '$2y$12$ZbU/Tn.jU27cUtKHkqb9jO45uPPOkYU5QCRSNn4gJIGa17uANPepS', 'osei', '1', '2018-03-13 13:08:55'),
(35, 'admin', '$2y$12$Stk9c1jzLuzh11Yh5K.0AuUL3AZCJ10qci6fByXk5rXbQEwl8tcSK', 'admin', '1', '2018-04-24 16:57:28'),
(40, 'adbless', '$2y$12$vTE2Fd3CEnPjQTdG5WibvOhF28m7sJsKgMQ205wpmMQU7v8vululS', 'Bless Kevin Adjei', '2', '2018-05-11 00:52:48'),
(41, 'sadeeisco', '$2y$12$CSNThjfcD16v3O2/XgQApe3Q8lA38mHSZH/tlujE0qokbAEOjDl8.', 'Sadiq Osman', '2', '2018-05-11 00:56:19'),
(42, 'niinarhgh', '$2y$12$ZjktCLDtiYtVMx.N3YNjU./725HUhXtlYDETU.2.lDn9gMtriEIL6', 'Henry N.K Nartey', '2', '2018-05-11 00:59:09'),
(43, 'ikboakye', '$2y$12$3ouk3Kc9fU4svwN/bAgbTe.zgw96Rm/c9q281EzgiICjiD33mAYWy', 'Isaac Kweku Boakye', '2', '2018-05-11 01:03:43'),
(44, 'solomonagoe', '$2y$12$lOXev89k0PkCu7tmSgLR5eU9FMe90.s2bCYCpjYUiaJyZFOMsemq6', 'Solomon Agoe', '2', '2018-05-11 01:08:12'),
(45, 'ado70944', '$2y$12$YKa7VhgBjJhCUAcK4kFiMOmcwb/1xsk1EqiBHhEyi9eFArxWWMfUu', 'Charles S.K Adoboe', '2', '2018-05-11 01:11:03'),
(46, 'bntkwao', '$2y$12$9HAPzNPTpkLZuOx0ApLXlu0jgOQwJeg7JAOZkrXtw2sgdua1CE.M.', 'Benjamin NT Kwao', '2', '2018-05-11 01:17:35'),
(47, 'absamael', '$2y$12$MeNFisOKkpjyjV45mv61IeumSuEhV8S5r2/5qnTEQABJtWfDGZahe', 'Bawa Marafa A.S', '2', '2018-05-11 01:19:32'),
(48, 'bgyandoo', '$2y$12$2hfTXNo8QAiGdedFrM/Cmur2tcVpzpmUEQGudBUSpMVlvCet6RM0G', 'Michael Bless Gyandoo', '2', '2018-05-11 01:22:09'),
(49, 'joequaye123', '$2y$12$dy9sn3VhcV5urzdm1wAhBO5JCx0/p0lEm/GKYMsZTeyp8hubK7yjy', 'Theophilus Joe Quaye', '2', '2018-05-11 01:25:28'),
(50, 'mkgozey', '$2y$12$MgotAJxpjN5OyYGzuA1Dwur.aQEhiIAlae7TSunqHpe/p7nYURssG', 'Martin Kwasi Gozey', '2', '2018-05-11 01:30:24'),
(51, 'ebassaw', '$2y$12$NtgTBgfpgbYjgGv0N6rK9Oj93oGGti4X3AVrQ.ZuFFe38slgDrNBe', 'Essuman Bassaw', '2', '2018-05-11 01:33:41'),
(52, 'tandohjur', '$2y$12$roMHfGqPdi4qAQ0vJdfWEOb8tGFuu0ZWeh5SJhRsub/xXHogpaWxG', 'Samuel Tandoh', '2', '2018-05-11 01:36:45'),
(53, 'davannan', '$2y$12$2S/0AmWHrjT7ICbCX6UAwuD2oAvV6emix2QvDZmD48Nt9cMFJKvVq', 'David Annan Mensah', '2', '2018-05-11 01:41:27'),
(54, 'egayina', '$2y$12$uXZ.J/BdJLYhP1c/spbwZO3NDJ8.WGiaBplC2CGqQv4KjRmvuVzyC', 'Edem Gayina', '2', '2018-05-11 01:44:50'),
(55, 'pdorlah2812', '$2y$12$YdTTCMDDHxMOAlfFAzFnbepcQ2fBIRH3zbn0AUxgmpos7Kht6.O7a', 'Prosper Kwaku Dorlah', '2', '2018-05-11 01:47:26'),
(56, 'slampty2839', '$2y$12$H1i.PHXfsQYDujSOfgjRuOHZqc39JWp3Ebe1rIjXomLxvAVsoTDRC', 'Silvanus K.O Lamptey', '2', '2018-05-13 17:53:47'),
(57, 'dcelestin', '$2y$12$FIFF.IzcN7jIuFHxX.N/wOwlK4XnDAl3CgTu2342NnMYo03Q/CRcq', 'David Kwaku Celestin', '2', '2018-05-13 17:56:08'),
(58, 'ananiadanlete', '$2y$12$lNpfjizWk/.MYv9sbur1.eddIZDf5UiuGtAbwZDaulo1LbBVZPspu', 'Anani Adanlete-Adjanoh', '2', '2018-05-13 18:00:58'),
(59, 'teddy', '$2y$12$u7cMx.x27guZE90dFgDlBORKhzq7k18FSf3HeV9sqacURNz54k7WG', 'Adams M. Mahama', '2', '2018-05-13 18:04:21'),
(60, 'rawguy', '$2y$12$X4CxpKI7HgY9bzBBb6Jp8emiLsZMScsnCe2QTRfMNF9NSAghw0PNy', 'Mark E. Amedzro', '2', '2018-05-13 18:08:14'),
(61, 'ben10', '$2y$12$KEZc5a0BpQAKap0oHhfFZ.yf0.DdElr6rlQV7JRJ.LNUB7FdXUdjO', 'Benjamin Kunudji', '2', '2018-05-13 18:10:28'),
(62, 'bendu', '$2y$12$odL5ftrRd.dPuV819KEdg.RZkkBJzEIUn9O3nS0XvhrOWEeSaN.K.', 'Benjamin Asiedu', '2', '2018-05-13 18:12:02'),
(63, 'degore', '$2y$12$fioRyi5MeF1FejmdjAyzM.6SAKYZ.mTRzOJhtyrm2SN.YMBAc0Cuy', 'Ebenezer Lartey', '2', '2018-05-13 18:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `emp_user_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `emp_position` text NOT NULL,
  `emp_email` text NOT NULL,
  `emp_id` text NOT NULL,
  `emp_number` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `emp_user_id`, `emp_name`, `gender`, `emp_position`, `emp_email`, `emp_id`, `emp_number`, `image`) VALUES
(5, 40, 'Bless Kevin Adjei', 'Male', 'Technician Electronics Engineer', 'adbless@gmail.com', '2838', '0266444151', NULL),
(6, 41, 'Sadiq Osman', 'Male', 'Senior Electronics Engineer', 'sadeeisco@yahoo.com', '2671', '0243188108', NULL),
(7, 42, 'Henry N.K Nartey', 'Male', 'Electronics Engineer', 'niinarhgh@gmail.com', '2865', '0244771091', NULL),
(8, 43, 'Isaac Kweku Boakye', 'Male', 'Senior Electronics Engineer', 'bukyeus@yahoo.com', '2669', '0243567620', NULL),
(9, 44, 'Solomon Agoe', 'Male', 'Technician Engineer', 'solomonagoe83@yahoo.com', '2835', '024398624', NULL),
(10, 45, 'Charles S.K Adoboe', 'Male', 'Technician Engineer', 'charlesadoboe1@gmail.com', '1459', '0244702381', NULL),
(11, 46, 'Benjamin NT Kwao', 'Male', 'Electronics Engineer', 'galben100@yahoo.com', '2837', '0246497200', NULL),
(12, 47, 'Bawa Marafa A.S', 'Male', 'Technician Engineer', 'absamael@yahoo.com', '2819', '0244770932', NULL),
(13, 48, 'Michael Bless Gyandoo', 'Male', 'Technician Engineer', 'bgyandoo@gcaa.com.gh', '2813', '0243254659', NULL),
(14, 49, 'Theophilus Joe Quaye', 'Male', 'Senior Electronics Engineer', 'teejoequaye@yahoo.com', '2809', '0276619478', NULL),
(15, 50, 'Martin Kwasi Gozey', 'Male', 'Technician Engineer', 'mkgozey@gmail.com', '2817', '0243342371', NULL),
(16, 51, 'Essuman Bassaw', 'Male', 'Electronics Engineer', 'essumanb2001@yahoo.com', '2811', '0209210568', NULL),
(17, 52, 'Samuel Tandoh', 'Male', 'Maintenance Planning Manager', 'tandohjur@yahoo.com', '2269', '0244615351', NULL),
(18, 53, 'David Annan Mensah', 'Male', 'Technician Engineer', 'dannan@yahoo.com', '2862', '0267536806', NULL),
(19, 54, 'Edem Gayina', 'Male', 'Technician Engineer', 'gaydavecephas@gmail.com', '2816', '0242911983', NULL),
(20, 55, 'Prosper Kwaku Dorlah', 'Male', 'Electronics Engineer', 'pdorlah@yahoo.com', '2812', '0244877560', NULL),
(21, 56, 'Silvanus K.O Lamptey', 'Male', 'Electronics Technician Engineer', 'slamptey@gcaa.com.gh', '2839', '0244085080', NULL),
(22, 57, 'David Kwaku Celestin', 'Male', 'Technician Engineer', 'mightycelestin@gmail.com', '2815', '0242958032', NULL),
(23, 58, 'Anani Adanlete-Adjanoh', 'Male', 'Principal Technician Engineer', 'ananiadanlete@yahoo.com', '2292', '0244519224', NULL),
(24, 59, 'Adams M. Mahama', 'Male', 'Technician Engineer', 'teddydon@hotmail.com', '2909', '0243016085', NULL),
(25, 60, 'Mark E. Amedzro', 'Male', 'Technician Engineer', 'rawguy2003@yahoo.com', '2823', '0204481901', NULL),
(26, 61, 'Benjamin Kunudji', 'Male', 'Technician Engineer', 'bencatme2000@yahoo.com.uk', '2821', '0244911515', NULL),
(27, 62, 'Benjamin Asiedu', 'Male', 'Engineer', 'bendu_1980@yahoo.com', '2810', '0548971637', NULL),
(28, 63, 'Ebenezer Lartey', 'Male', 'Senior Engineer', 'niilaate76@gmail.com', '2712', '0242544774', NULL),
(29, 64, 'frank Kofi Apeagyei', 'Male', 'Training Manager', 'fapeagyei@gcaa.com.gh', '2709', '0244816782', NULL),
(30, 65, 'Osei-Owusu Yaw Ofosu', 'Male', 'National Service', 'tenisonosei@gmail.com', '580500', '0206660905', 'scarlett-johansson-cute-wallpapers-10.jpg'),
(31, 66, 'Francis Anyetei Akogyeram', 'Male', 'Principal Electronics Engineer', 'fakogy@yahoo.co.uk', '1657', '0244056492', NULL),
(32, 67, 'Bismark Atta Opoku', 'Male', 'Electronics Technician Engineer', 'bopoku@gcaa.com.gh', '2820', '0243811658 / 0200116338', 'Atta.jpg'),
(33, 68, 'Lawrence Sowah', 'Male', 'Electronics Technician Engineer', 'sowahr@yahoo.com', '2814', '0244365266', 'IMG_20161207_114525.jpg'),
(34, 69, 'Jonathan K. Arthur', 'Male', 'Prinicipal Electronics Technician Engineer', 'naatkofi@yahoo.co.uk', '2197', '0244671929', 'Jonathan.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `description` text,
  `source` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cert` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `course_name`, `description`, `source`, `cert`, `date_created`, `status`) VALUES
(1, 31, 'ATM Training', 'New Course', NULL, 'A4_WEEKLY_OJT_TIME_TABLE.doc', '2018-07-16 18:40:01', 0),
(2, 32, 'ATM Training', 'New Course', NULL, NULL, '2018-07-16 18:40:01', 0),
(3, 33, 'ATM Training', 'New Course', NULL, 'Doc5.pdf', '2018-07-16 18:40:01', 0),
(4, 34, 'ATM Training', 'New Course', NULL, NULL, '2018-07-16 18:40:01', 0),
(5, 30, 'efewfwe', 'werfew', 'Coastal_Processing_Company_Ltd1.docx', 'Coastal_Processing_Company_Ltd.docx', '2018-07-16 18:40:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin_name`, `level`, `register_date`) VALUES
(11, 'tenison', '$2y$12$ZbU/Tn.jU27cUtKHkqb9jO45uPPOkYU5QCRSNn4gJIGa17uANPepS', 'osei', '1', '2018-03-13 13:08:55'),
(35, 'admin', '$2y$12$1sgp9s9Pmb1CMm1DYzDEyO3mhAL7b.flTiq.9h2U0qYLHzGJP7f/m', 'admin', '1', '2018-04-24 16:57:28'),
(40, 'adbless', '$2y$12$vTE2Fd3CEnPjQTdG5WibvOhF28m7sJsKgMQ205wpmMQU7v8vululS', 'Bless Kevin Adjei', '2', '2018-05-11 00:52:48'),
(41, 'sadeeisco', '$2y$12$CSNThjfcD16v3O2/XgQApe3Q8lA38mHSZH/tlujE0qokbAEOjDl8.', 'Sadiq Osman', '2', '2018-05-11 00:56:19'),
(42, 'niinarhgh', '$2y$12$ZjktCLDtiYtVMx.N3YNjU./725HUhXtlYDETU.2.lDn9gMtriEIL6', 'Henry N.K Nartey', '2', '2018-05-11 00:59:09'),
(43, 'ikboakye', '$2y$12$3ouk3Kc9fU4svwN/bAgbTe.zgw96Rm/c9q281EzgiICjiD33mAYWy', 'Isaac Kweku Boakye', '2', '2018-05-11 01:03:43'),
(44, 'solomonagoe', '$2y$12$lOXev89k0PkCu7tmSgLR5eU9FMe90.s2bCYCpjYUiaJyZFOMsemq6', 'Solomon Agoe', '2', '2018-05-11 01:08:12'),
(45, 'ado70944', '$2y$12$YKa7VhgBjJhCUAcK4kFiMOmcwb/1xsk1EqiBHhEyi9eFArxWWMfUu', 'Charles S.K Adoboe', '2', '2018-05-11 01:11:03'),
(46, 'bntkwao', '$2y$12$9HAPzNPTpkLZuOx0ApLXlu0jgOQwJeg7JAOZkrXtw2sgdua1CE.M.', 'Benjamin NT Kwao', '2', '2018-05-11 01:17:35'),
(47, 'absamael', '$2y$12$MeNFisOKkpjyjV45mv61IeumSuEhV8S5r2/5qnTEQABJtWfDGZahe', 'Bawa Marafa A.S', '2', '2018-05-11 01:19:32'),
(48, 'bgyandoo', '$2y$12$2hfTXNo8QAiGdedFrM/Cmur2tcVpzpmUEQGudBUSpMVlvCet6RM0G', 'Michael Bless Gyandoo', '2', '2018-05-11 01:22:09'),
(49, 'joequaye123', '$2y$12$dy9sn3VhcV5urzdm1wAhBO5JCx0/p0lEm/GKYMsZTeyp8hubK7yjy', 'Theophilus Joe Quaye', '2', '2018-05-11 01:25:28'),
(50, 'mkgozey', '$2y$12$MgotAJxpjN5OyYGzuA1Dwur.aQEhiIAlae7TSunqHpe/p7nYURssG', 'Martin Kwasi Gozey', '2', '2018-05-11 01:30:24'),
(51, 'ebassaw', '$2y$12$NtgTBgfpgbYjgGv0N6rK9Oj93oGGti4X3AVrQ.ZuFFe38slgDrNBe', 'Essuman Bassaw', '2', '2018-05-11 01:33:41'),
(52, 'tandohjur', '$2y$12$roMHfGqPdi4qAQ0vJdfWEOb8tGFuu0ZWeh5SJhRsub/xXHogpaWxG', 'Samuel Tandoh', '2', '2018-05-11 01:36:45'),
(53, 'davannan', '$2y$12$2S/0AmWHrjT7ICbCX6UAwuD2oAvV6emix2QvDZmD48Nt9cMFJKvVq', 'David Annan Mensah', '2', '2018-05-11 01:41:27'),
(54, 'egayina', '$2y$12$uXZ.J/BdJLYhP1c/spbwZO3NDJ8.WGiaBplC2CGqQv4KjRmvuVzyC', 'Edem Gayina', '2', '2018-05-11 01:44:50'),
(55, 'pdorlah2812', '$2y$12$YdTTCMDDHxMOAlfFAzFnbepcQ2fBIRH3zbn0AUxgmpos7Kht6.O7a', 'Prosper Kwaku Dorlah', '2', '2018-05-11 01:47:26'),
(56, 'slampty2839', '$2y$12$H1i.PHXfsQYDujSOfgjRuOHZqc39JWp3Ebe1rIjXomLxvAVsoTDRC', 'Silvanus K.O Lamptey', '2', '2018-05-13 17:53:47'),
(57, 'dcelestin', '$2y$12$FIFF.IzcN7jIuFHxX.N/wOwlK4XnDAl3CgTu2342NnMYo03Q/CRcq', 'David Kwaku Celestin', '2', '2018-05-13 17:56:08'),
(58, 'ananiadanlete', '$2y$12$lNpfjizWk/.MYv9sbur1.eddIZDf5UiuGtAbwZDaulo1LbBVZPspu', 'Anani Adanlete-Adjanoh', '2', '2018-05-13 18:00:58'),
(59, 'teddy', '$2y$12$u7cMx.x27guZE90dFgDlBORKhzq7k18FSf3HeV9sqacURNz54k7WG', 'Adams M. Mahama', '2', '2018-05-13 18:04:21'),
(60, 'rawguy', '$2y$12$X4CxpKI7HgY9bzBBb6Jp8emiLsZMScsnCe2QTRfMNF9NSAghw0PNy', 'Mark E. Amedzro', '2', '2018-05-13 18:08:14'),
(61, 'ben10', '$2y$12$KEZc5a0BpQAKap0oHhfFZ.yf0.DdElr6rlQV7JRJ.LNUB7FdXUdjO', 'Benjamin Kunudji', '2', '2018-05-13 18:10:28'),
(62, 'bendu', '$2y$12$odL5ftrRd.dPuV819KEdg.RZkkBJzEIUn9O3nS0XvhrOWEeSaN.K.', 'Benjamin Asiedu', '2', '2018-05-13 18:12:02'),
(63, 'degore', '$2y$12$fioRyi5MeF1FejmdjAyzM.6SAKYZ.mTRzOJhtyrm2SN.YMBAc0Cuy', 'Ebenezer Lartey', '2', '2018-05-13 18:14:44'),
(64, 'fkapeagyei', '$2y$12$Mw5t0MP39lHcLQf.c9.O..Twq9E.4skXxGgufSaU5Dj9y2QO.F.K.', 'frank Kofi Apeagyei', '2', '2018-06-21 16:18:50'),
(65, 'osei123', '$2y$12$3f6apyOxmVWPYmY0co223OhMyfZFWJua.dKlkSZ3Po5On.wTIoUiO', 'Osei-Owusu Yaw Ofosu', '2', '2018-07-16 11:41:56'),
(66, 'FAkogyeram', '$2y$12$VSklMPkK6J8pohs04V0WreNa/oy4qxT4k1p/BLTPqfaFF8tbP.m0K', 'FRANCIS ANYETEI AKOGYERAM', '2', '2018-07-16 18:26:20'),
(67, 'bopoku', '$2y$12$lYx03.vFdcbAR8LqomXvbuTlZSWYQroFq45fxcLvKDbSxErNMdO9K', 'Bismark Atta', '2', '2018-07-16 18:26:31'),
(68, 'lsowah', '$2y$12$1J8El3ai9IijSK1m1zw2eOIwX/LfytM2d7RHBRDUaAKer947eUk3y', 'Lawrence Sowah', '2', '2018-07-16 18:26:52'),
(69, 'NatKofi', '$2y$12$FNtUo6mh1KNDs5lhzWUqyuuey04hH9gAZUqm1clWwULPkc8pVm.zi', 'Jonathan K. Arthur', '2', '2018-07-16 18:26:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
