-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2024 at 02:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portoci`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `umur` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `umur`, `email`, `alamat`) VALUES
(1, 'Muhammad Akhsan Nurramdhan', 21, 'akhsannurramdhan85@gmail.com', 'Sukabumi, West Java, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(75) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `phone`, `email`) VALUES
(1, 'Muhammad Akhsan Nurramdhan', 'Sukabumi, Jawabarat, Indonesia', '08986438712', 'akhsannurramdhan85@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `prodi` varchar(150) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `tahun_mulai` varchar(10) NOT NULL,
  `tahun_selesai` varchar(10) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `prodi`, `institusi`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'Software Engineering', 'SMK PASIM PLUS SUKABUMI', '2017', '2020', 'During my time at SMK PASIM PLUS Sukabumi from 2017 to 2020, I pursued Software Engineering, participated in the LKS for Java Programming and secured 3rd place at the city level, studied Object-Oriented Programming, and developed a deep passion for back-end programming.'),
(2, 'Informatics Engineering', 'Universitas Muhammadiyah Sukabumi', '2021', 'Now', 'Currently in my 6th semester, I am pursuing a degree in Informatics Engineering at Universitas Muhammadiyah Sukabumi. Throughout my studies, I have had the opportunity to delve into various programming languages and technologies. I have developed proficiency in Kotlin, C++, React, and CodeIgniter, which have broadened my understanding and capabilities in both front-end and back-end development.');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tahun_mulai` varchar(10) NOT NULL,
  `tahun_selesai` varchar(10) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `tempat`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 'Junior Developer Intern', 'Tintapuccino Software House', 'May 2018', 'June 2018', 'During a three-month internship organized by my vocational school (SMK), I worked as a Junior Developer at Tintapuccino Software House. In this role, I contributed to website development, focusing particularly on the back-end. This internship provided me with invaluable first-hand experience in the software industry, allowing me to apply my academic knowledge in a real-world setting and gain practical skills in back-end development.\r\n\r\n'),
(2, 'Android Developer Member', 'GDSC UMMI', 'Dec 2021 ', 'May 2022', 'As an active member of the Google Developer Student Club, I immersed myself in learning Android app development using Kotlin. I organized and participated in various educational activities aimed at introducing Android development to fellow students on campus. Additionally, I expanded my knowledge by learning about various tools and resources developed by Google for Android app development, further enhancing my proficiency in this domain.'),
(5, 'Bangkit Machine Learning Cohort', 'Bangkit Academy 2024 By Google, GoTo, Traveloka', 'Aug 2023', 'Jan 2024', ' As a participant in the Bangkit Machine Learning Cohort organized by Google, GoTo, and Traveloka, as part of the Kampus Merdeka program, I gained extensive knowledge and hands-on experience in data cleaning, training data, machine learning modeling, and utilizing the TensorFlow framework. This immersive program provided me with valuable insights into industry-standard machine learning practices and enhanced my skills in data science and artificial intelligence.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `category` enum('project','certification','photos') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `src` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `category`, `src`, `description`) VALUES
(3, 'certification', 'img/ml-cert1.jpg', 'Machine Learning Certification'),
(4, 'certification', 'img/ml-cert2.jpg', 'Machine Learning Certification'),
(7, 'certification', 'img/ml-cert3.jpg', 'Machine Learning Certification'),
(8, 'certification', 'img/ml-cert4.jpg', 'Machine Learning Certification'),
(9, 'project', 'img/ml-cert5.jpg', 'Machine Learning Certification'),
(10, 'certification', 'img/lks-cert.jpg', 'LKS Certification');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
