-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2024 at 07:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career_expert`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalities`
--

CREATE TABLE `personalities` (
  `id` int NOT NULL,
  `personality` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `career` text COLLATE utf8mb4_general_ci,
  `deskripsi_personality` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personalities`
--

INSERT INTO `personalities` (`id`, `personality`, `career`, `deskripsi_personality`) VALUES
(1, 'Sanguin', 'Marketing, Sales, Desainer, Humas, Youtuber', 'Mereka adalah orang yang optimis, aktif, dan sosial. Mereka suka mencari kesenangan, petualangan, dan perhatian dari orang lain. Mereka juga mudah beradaptasi, antusias, dan bersemangat. Namun, mereka juga cenderung tidak konsisten, mudah bosan, dan kurang disiplin'),
(2, 'Koleris', 'Wirausaha, Bisnis, Politik, Hukum, Militer', 'Mereka adalah orang yang pemarah, cepat, dan mudah tersinggung. Mereka memiliki ambisi, kepercayaan diri, dan kemauan yang kuat. Mereka juga logis, tegas, dan mandiri. Namun, mereka juga cenderung sombong, keras kepala, dan tidak peka'),
(3, 'Melankolis', 'Manajer, Akuntan, Peneliti, Seniman, Staf Administrasi', 'Mereka adalah orang yang analitis, bijak, dan tenang. Mereka memiliki standar yang tinggi, kreatif, dan perfeksionis. Mereka juga setia, peduli, dan pengertian. Namun, mereka juga cenderung pesimis, mudah cemas, dan sulit bersosialisasi'),
(4, 'Plegmatis', 'Kesehatan, Teknisi Komputer, Kearsipan, Guru, Programmer', 'Mereka adalah orang yang santai, damai, dan mudah diatur. Mereka memiliki toleransi, kesabaran, dan kerjasama yang baik. Mereka juga stabil, konsisten, dan dapat diandalkan. Namun, mereka juga cenderung pasif, lamban, dan kurang berinisiatif');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `statement` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `statement`) VALUES
(1, 'Saya suka berbicara dengan banyak orang.'),
(2, 'Saya senang berpartisipasi dalam kegiatan sosial.'),
(3, 'Saya mudah berteman dengan orang baru.'),
(4, 'Saya suka menjadi pusat perhatian di antara teman-teman saya.'),
(5, 'Saya menemukan kesenangan dalam bekerja dalam tim.'),
(6, 'Saya mudah bergaul dengan berbagai kelompok orang.'),
(7, 'Saya merasa senang ketika diapresiasi oleh orang lain.'),
(8, 'Saya menikmati kegembiraan dan keceriaan.'),
(9, 'Saya suka menciptakan suasana yang menyenangkan.'),
(10, 'Saya suka mencoba hal-hal baru dan mengalami petualangan.'),
(11, 'Saya merasa senang ketika diberi perhatian oleh orang lain.'),
(12, 'Saya menemukan kesenangan dalam situasi yang dinamis.'),
(13, 'Saya senang berbagi ide dan berkomunikasi dengan orang lain.'),
(14, 'Saya merasa senang ketika ada banyak aktivitas di sekitar saya.'),
(15, 'Saya cenderung tidak suka rutinitas yang monoton.'),
(16, 'Saya suka berinteraksi dengan orang baru dan beragam.'),
(17, 'Saya menemukan energi positif dalam keceriaan dan optimisme.'),
(18, 'Saya suka mengambil inisiatif dan memimpin.'),
(19, 'Saya cenderung fokus pada tujuan dan hasil.'),
(20, 'Saya senang menghadapi tantangan yang menantang.'),
(21, 'Saya merasa puas ketika berhasil menyelesaikan tugas.'),
(22, 'Saya suka memiliki kendali atas situasi.'),
(23, 'Saya senang mengambil risiko untuk mencapai tujuan.'),
(24, 'Saya cenderung fokus pada penyelesaian masalah.'),
(25, 'Saya suka bersaing dan meraih prestasi.'),
(26, 'Saya menemukan kepuasan dalam mencapai target yang ditetapkan.'),
(27, 'Saya merasa puas ketika mencapai target secara efisien.'),
(28, 'Saya suka mengorganisir dan merencanakan kegiatan.'),
(29, 'Saya memiliki ambisi dan tekad untuk mencapai tujuan.'),
(30, 'Saya senang memecahkan masalah yang kompleks.'),
(31, 'Saya merasa senang ketika dapat memberikan pengaruh positif.'),
(32, 'Saya suka mengambil tanggung jawab kepemimpinan.'),
(33, 'Saya cenderung fokus pada pencapaian dan hasil akhir.'),
(34, 'Saya menemukan kepuasan dalam mencapai tujuan yang ambisius.'),
(35, 'Saya cenderung peka terhadap perasaan orang lain.'),
(36, 'Saya senang merenung dan memikirkan hal-hal yang mendalam.'),
(37, 'Saya suka memiliki rencana yang terstruktur.'),
(38, 'Saya merasa senang bekerja secara mandiri.'),
(39, 'Saya cenderung melibatkan diri dalam seni atau ekspresi kreatif.'),
(40, 'Saya memiliki standar tinggi terhadap diri sendiri.'),
(41, 'Saya cenderung mempertimbangkan pro dan kontra sebelum mengambil keputusan.'),
(42, 'Saya menikmati keindahan dan estetika.'),
(43, 'Saya suka mengejar pemahaman yang lebih dalam.'),
(44, 'Saya merasa terhubung dengan emosi dan perasaan saya.'),
(45, 'Saya cenderung memiliki jurnal atau mencatat pengalaman hidup.'),
(46, 'Saya menikmati waktu sendiri untuk merenung.'),
(47, 'Saya senang mengejar ide-ide kreatif atau seni.'),
(48, 'Saya merasa nyaman dalam situasi yang tenang dan santai.'),
(49, 'Saya cenderung tidak terlalu terpengaruh oleh tekanan.'),
(50, 'Saya suka mendengarkan dan memahami sudut pandang orang lain.'),
(51, 'Saya senang bekerja dengan kestabilan dan konsistensi.'),
(52, 'Saya cenderung menghindari konflik dan ingin menciptakan harmoni.'),
(53, 'Saya tidak suka terburu-buru atau tergesa-gesa.'),
(54, 'Saya merasa nyaman ketika lingkungan sekitar tenang.'),
(55, 'Saya cenderung menghindari konflik dan ingin menjaga perdamaian.'),
(56, 'Saya suka membantu orang lain dan berkontribusi pada kesejahteraan bersama.'),
(57, 'Saya suka menjaga kestabilan dan keseimbangan dalam hidup.'),
(58, 'Saya merasa senang dalam hubungan yang \r\nharmonis. '),
(59, 'Saya cenderung tidak terlalu terpengaruh oleh perubahan yang drastis.'),
(60, 'Saya suka mendengarkan cerita orang lain tanpa menghakimi.');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personality_id` int DEFAULT NULL,
  `certainty` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int NOT NULL,
  `question_id` int DEFAULT NULL,
  `personality_id` int DEFAULT NULL,
  `cf_expert` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `question_id`, `personality_id`, `cf_expert`) VALUES
(1, 1, 1, 0.6),
(2, 2, 1, 0.8),
(3, 3, 1, 0.4),
(4, 1, 1, 0.6),
(5, 2, 1, 0.8),
(6, 3, 1, 0.4),
(7, 4, 1, 0.6),
(8, 5, 1, 0.6),
(9, 6, 1, 0.4),
(10, 7, 1, 0.8),
(11, 8, 1, 0.6),
(12, 9, 1, 0.4),
(13, 10, 1, 0.4),
(14, 11, 1, 0.8),
(15, 12, 1, 0.4),
(16, 13, 1, 0.6),
(17, 14, 1, 0.8),
(18, 15, 1, 0.8),
(19, 16, 1, 0.6),
(20, 17, 1, 0.8),
(21, 18, 2, 0.4),
(22, 19, 2, 0.8),
(23, 20, 2, 0.6),
(24, 21, 2, 0.6),
(25, 22, 2, 0.6),
(26, 23, 2, 0.6),
(27, 24, 2, 0.8),
(28, 25, 2, 0.8),
(29, 26, 2, 0.8),
(30, 27, 2, 0.6),
(31, 28, 2, 0.6),
(32, 29, 2, 0.8),
(33, 30, 2, 0.4),
(34, 31, 2, 0.6),
(35, 32, 2, 0.8),
(36, 33, 2, 0.8),
(37, 34, 2, 0.8),
(38, 35, 3, 0.8),
(39, 36, 3, 0.6),
(40, 37, 3, 0.8),
(41, 38, 3, 0.6),
(42, 39, 3, 0.4),
(43, 40, 3, 0.8),
(44, 41, 3, 0.8),
(45, 42, 3, 0.6),
(46, 43, 3, 0.4),
(47, 44, 3, 0.6),
(48, 45, 3, 0.4),
(49, 46, 3, 0.8),
(50, 47, 3, 0.6),
(51, 48, 4, 0.8),
(52, 49, 4, 0.6),
(53, 50, 4, 0.6),
(54, 51, 4, 0.8),
(55, 52, 4, 0.6),
(56, 53, 4, 0.8),
(57, 54, 4, 0.6),
(58, 55, 4, 0.6),
(59, 56, 4, 0.4),
(60, 57, 4, 0.4),
(61, 58, 4, 0.6),
(62, 59, 4, 0.4),
(63, 60, 4, 0.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalities`
--
ALTER TABLE `personalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalities`
--
ALTER TABLE `personalities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
