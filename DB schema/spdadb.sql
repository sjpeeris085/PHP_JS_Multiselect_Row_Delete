-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2021 at 05:30 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spdadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallej`
--

DROP TABLE IF EXISTS `gallej`;
CREATE TABLE IF NOT EXISTS `gallej` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `gj_a` varchar(10) NOT NULL,
  `gj_b` varchar(10) NOT NULL,
  `gj_c` varchar(1000) NOT NULL,
  `gj_d` varchar(255) NOT NULL,
  `gj_e` varchar(100) NOT NULL,
  `gj_f` varchar(100) NOT NULL,
  `gj_g` varchar(100) NOT NULL,
  `gj_h` varchar(100) NOT NULL,
  `gj_i` varchar(100) NOT NULL,
  `gj_j` varchar(100) NOT NULL,
  `gj_k` varchar(100) NOT NULL,
  `gj_l` varchar(100) NOT NULL,
  `gj_m` varchar(100) NOT NULL,
  `gj_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallej`
--

INSERT INTO `gallej` (`id`, `gj_a`, `gj_b`, `gj_c`, `gj_d`, `gj_e`, `gj_f`, `gj_g`, `gj_h`, `gj_i`, `gj_j`, `gj_k`, `gj_l`, `gj_m`, `gj_n`) VALUES
(1, 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj', 'gj');

-- --------------------------------------------------------

--
-- Table structure for table `gallek`
--

DROP TABLE IF EXISTS `gallek`;
CREATE TABLE IF NOT EXISTS `gallek` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `gk_a` varchar(10) NOT NULL,
  `gk_b` varchar(10) NOT NULL,
  `gk_c` varchar(1000) NOT NULL,
  `gk_d` varchar(255) NOT NULL,
  `gk_e` varchar(100) NOT NULL,
  `gk_f` varchar(100) NOT NULL,
  `gk_g` varchar(100) NOT NULL,
  `gk_h` varchar(100) NOT NULL,
  `gk_i` varchar(100) NOT NULL,
  `gk_j` varchar(100) NOT NULL,
  `gk_k` varchar(100) NOT NULL,
  `gk_l` varchar(100) NOT NULL,
  `gk_m` varchar(100) NOT NULL,
  `gk_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallek`
--

INSERT INTO `gallek` (`id`, `gk_a`, `gk_b`, `gk_c`, `gk_d`, `gk_e`, `gk_f`, `gk_g`, `gk_h`, `gk_i`, `gk_j`, `gk_k`, `gk_l`, `gk_m`, `gk_n`) VALUES
(15, 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk', 'gk'),
(12, 'dddd', 'ddd', 'dddd', 'ddd', 'ddd', 'ddddddddddd', 'dddddddddd', 'dddddddddddd', 'dddddddddd', 'ddddddddddddd', 'ddddddddddddddddddddddddddddd', 'dddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddd'),
(16, 'hh', 'hhhh', 'hhhh', 'hhh', 'hhhh', 'h', 'h', 'hhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhh', 'hhhhhh'),
(14, 'g', 'ggg', 'gg', 'ggggg', 'ggg', 'gg', 'ggggggggggg', 'gggggggggggggg', 'ggggggggggggg', 'ggggggggggggggg', 'ggggg', 'ggggggggggggg', 'ggggggggggggg', 'ggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `gallen`
--

DROP TABLE IF EXISTS `gallen`;
CREATE TABLE IF NOT EXISTS `gallen` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `gn_a` varchar(10) NOT NULL,
  `gn_b` varchar(10) NOT NULL,
  `gn_c` varchar(1000) NOT NULL,
  `gn_d` varchar(255) NOT NULL,
  `gn_e` varchar(100) NOT NULL,
  `gn_f` varchar(100) NOT NULL,
  `gn_g` varchar(100) NOT NULL,
  `gn_h` varchar(100) NOT NULL,
  `gn_i` varchar(100) NOT NULL,
  `gn_j` varchar(100) NOT NULL,
  `gn_k` varchar(100) NOT NULL,
  `gn_l` varchar(100) NOT NULL,
  `gn_m` varchar(100) NOT NULL,
  `gn_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallen`
--

INSERT INTO `gallen` (`id`, `gn_a`, `gn_b`, `gn_c`, `gn_d`, `gn_e`, `gn_f`, `gn_g`, `gn_h`, `gn_i`, `gn_j`, `gn_k`, `gn_l`, `gn_m`, `gn_n`) VALUES
(3, 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn', 'gn');

-- --------------------------------------------------------

--
-- Table structure for table `gallep`
--

DROP TABLE IF EXISTS `gallep`;
CREATE TABLE IF NOT EXISTS `gallep` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `gp_a` varchar(10) NOT NULL,
  `gp_b` varchar(10) NOT NULL,
  `gp_c` varchar(1000) NOT NULL,
  `gp_d` varchar(255) NOT NULL,
  `gp_e` varchar(100) NOT NULL,
  `gp_f` varchar(100) NOT NULL,
  `gp_g` varchar(100) NOT NULL,
  `gp_h` varchar(100) NOT NULL,
  `gp_i` varchar(100) NOT NULL,
  `gp_j` varchar(100) NOT NULL,
  `gp_k` varchar(100) NOT NULL,
  `gp_l` varchar(100) NOT NULL,
  `gp_m` varchar(100) NOT NULL,
  `gp_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallep`
--

INSERT INTO `gallep` (`id`, `gp_a`, `gp_b`, `gp_c`, `gp_d`, `gp_e`, `gp_f`, `gp_g`, `gp_h`, `gp_i`, `gp_j`, `gp_k`, `gp_l`, `gp_m`, `gp_n`) VALUES
(1, 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp', 'gp');

-- --------------------------------------------------------

--
-- Table structure for table `hambantotaj`
--

DROP TABLE IF EXISTS `hambantotaj`;
CREATE TABLE IF NOT EXISTS `hambantotaj` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `hj_a` varchar(10) NOT NULL,
  `hj_b` varchar(10) NOT NULL,
  `hj_c` varchar(1000) NOT NULL,
  `hj_d` varchar(255) NOT NULL,
  `hj_e` varchar(100) NOT NULL,
  `hj_f` varchar(100) NOT NULL,
  `hj_g` varchar(100) NOT NULL,
  `hj_h` varchar(100) NOT NULL,
  `hj_i` varchar(100) NOT NULL,
  `hj_j` varchar(100) NOT NULL,
  `hj_k` varchar(100) NOT NULL,
  `hj_l` varchar(100) NOT NULL,
  `hj_m` varchar(100) NOT NULL,
  `hj_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hambantotaj`
--

INSERT INTO `hambantotaj` (`id`, `hj_a`, `hj_b`, `hj_c`, `hj_d`, `hj_e`, `hj_f`, `hj_g`, `hj_h`, `hj_i`, `hj_j`, `hj_k`, `hj_l`, `hj_m`, `hj_n`) VALUES
(1, 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj');

-- --------------------------------------------------------

--
-- Table structure for table `hambantotak`
--

DROP TABLE IF EXISTS `hambantotak`;
CREATE TABLE IF NOT EXISTS `hambantotak` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `hk_a` varchar(10) NOT NULL,
  `hk_b` varchar(10) NOT NULL,
  `hk_c` varchar(1000) NOT NULL,
  `hk_d` varchar(255) NOT NULL,
  `hk_e` varchar(100) NOT NULL,
  `hk_f` varchar(100) NOT NULL,
  `hk_g` varchar(100) NOT NULL,
  `hk_h` varchar(100) NOT NULL,
  `hk_i` varchar(100) NOT NULL,
  `hk_j` varchar(100) NOT NULL,
  `hk_k` varchar(100) NOT NULL,
  `hk_l` varchar(100) NOT NULL,
  `hk_m` varchar(100) NOT NULL,
  `hk_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hambantotak`
--

INSERT INTO `hambantotak` (`id`, `hk_a`, `hk_b`, `hk_c`, `hk_d`, `hk_e`, `hk_f`, `hk_g`, `hk_h`, `hk_i`, `hk_j`, `hk_k`, `hk_l`, `hk_m`, `hk_n`) VALUES
(1, 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk', 'hk');

-- --------------------------------------------------------

--
-- Table structure for table `hambantotan`
--

DROP TABLE IF EXISTS `hambantotan`;
CREATE TABLE IF NOT EXISTS `hambantotan` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `hn_a` varchar(10) NOT NULL,
  `hn_b` varchar(10) NOT NULL,
  `hn_c` varchar(1000) NOT NULL,
  `hn_d` varchar(255) NOT NULL,
  `hn_e` varchar(100) NOT NULL,
  `hn_f` varchar(100) NOT NULL,
  `hn_g` varchar(100) NOT NULL,
  `hn_h` varchar(100) NOT NULL,
  `hn_i` varchar(100) NOT NULL,
  `hn_j` varchar(100) NOT NULL,
  `hn_k` varchar(100) NOT NULL,
  `hn_l` varchar(100) NOT NULL,
  `hn_m` varchar(100) NOT NULL,
  `hn_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hambantotan`
--

INSERT INTO `hambantotan` (`id`, `hn_a`, `hn_b`, `hn_c`, `hn_d`, `hn_e`, `hn_f`, `hn_g`, `hn_h`, `hn_i`, `hn_j`, `hn_k`, `hn_l`, `hn_m`, `hn_n`) VALUES
(1, 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn', 'hn');

-- --------------------------------------------------------

--
-- Table structure for table `hambantotap`
--

DROP TABLE IF EXISTS `hambantotap`;
CREATE TABLE IF NOT EXISTS `hambantotap` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `hp_a` varchar(10) NOT NULL,
  `hp_b` varchar(10) NOT NULL,
  `hp_c` varchar(1000) NOT NULL,
  `hp_d` varchar(255) NOT NULL,
  `hp_e` varchar(100) NOT NULL,
  `hp_f` varchar(100) NOT NULL,
  `hp_g` varchar(100) NOT NULL,
  `hp_h` varchar(100) NOT NULL,
  `hp_i` varchar(100) NOT NULL,
  `hp_j` varchar(100) NOT NULL,
  `hp_k` varchar(100) NOT NULL,
  `hp_l` varchar(100) NOT NULL,
  `hp_m` varchar(100) NOT NULL,
  `hp_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hambantotap`
--

INSERT INTO `hambantotap` (`id`, `hp_a`, `hp_b`, `hp_c`, `hp_d`, `hp_e`, `hp_f`, `hp_g`, `hp_h`, `hp_i`, `hp_j`, `hp_k`, `hp_l`, `hp_m`, `hp_n`) VALUES
(1, 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp', 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `mataraj`
--

DROP TABLE IF EXISTS `mataraj`;
CREATE TABLE IF NOT EXISTS `mataraj` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `mj_a` varchar(10) NOT NULL,
  `mj_b` varchar(10) NOT NULL,
  `mj_c` varchar(1000) NOT NULL,
  `mj_d` varchar(255) NOT NULL,
  `mj_e` varchar(100) NOT NULL,
  `mj_f` varchar(100) NOT NULL,
  `mj_g` varchar(100) NOT NULL,
  `mj_h` varchar(100) NOT NULL,
  `mj_i` varchar(100) NOT NULL,
  `mj_j` varchar(100) NOT NULL,
  `mj_k` varchar(100) NOT NULL,
  `mj_l` varchar(100) NOT NULL,
  `mj_m` varchar(100) NOT NULL,
  `mj_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mataraj`
--

INSERT INTO `mataraj` (`id`, `mj_a`, `mj_b`, `mj_c`, `mj_d`, `mj_e`, `mj_f`, `mj_g`, `mj_h`, `mj_i`, `mj_j`, `mj_k`, `mj_l`, `mj_m`, `mj_n`) VALUES
(1, 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj', 'mj');

-- --------------------------------------------------------

--
-- Table structure for table `matarak`
--

DROP TABLE IF EXISTS `matarak`;
CREATE TABLE IF NOT EXISTS `matarak` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `mk_a` varchar(10) NOT NULL,
  `mk_b` varchar(10) NOT NULL,
  `mk_c` varchar(1000) NOT NULL,
  `mk_d` varchar(255) NOT NULL,
  `mk_e` varchar(100) NOT NULL,
  `mk_f` varchar(100) NOT NULL,
  `mk_g` varchar(100) NOT NULL,
  `mk_h` varchar(100) NOT NULL,
  `mk_i` varchar(100) NOT NULL,
  `mk_j` varchar(100) NOT NULL,
  `mk_k` varchar(100) NOT NULL,
  `mk_l` varchar(100) NOT NULL,
  `mk_m` varchar(100) NOT NULL,
  `mk_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matarak`
--

INSERT INTO `matarak` (`id`, `mk_a`, `mk_b`, `mk_c`, `mk_d`, `mk_e`, `mk_f`, `mk_g`, `mk_h`, `mk_i`, `mk_j`, `mk_k`, `mk_l`, `mk_m`, `mk_n`) VALUES
(1, 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk', 'mk');

-- --------------------------------------------------------

--
-- Table structure for table `mataran`
--

DROP TABLE IF EXISTS `mataran`;
CREATE TABLE IF NOT EXISTS `mataran` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `mn_a` varchar(10) NOT NULL,
  `mn_b` varchar(10) NOT NULL,
  `mn_c` varchar(1000) NOT NULL,
  `mn_d` varchar(255) NOT NULL,
  `mn_e` varchar(100) NOT NULL,
  `mn_f` varchar(100) NOT NULL,
  `mn_g` varchar(100) NOT NULL,
  `mn_h` varchar(100) NOT NULL,
  `mn_i` varchar(100) NOT NULL,
  `mn_j` varchar(100) NOT NULL,
  `mn_k` varchar(100) NOT NULL,
  `mn_l` varchar(100) NOT NULL,
  `mn_m` varchar(100) NOT NULL,
  `mn_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mataran`
--

INSERT INTO `mataran` (`id`, `mn_a`, `mn_b`, `mn_c`, `mn_d`, `mn_e`, `mn_f`, `mn_g`, `mn_h`, `mn_i`, `mn_j`, `mn_k`, `mn_l`, `mn_m`, `mn_n`) VALUES
(1, 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn', 'mn');

-- --------------------------------------------------------

--
-- Table structure for table `matarap`
--

DROP TABLE IF EXISTS `matarap`;
CREATE TABLE IF NOT EXISTS `matarap` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `mp_a` varchar(10) NOT NULL,
  `mp_b` varchar(10) NOT NULL,
  `mp_c` varchar(1000) NOT NULL,
  `mp_d` varchar(255) NOT NULL,
  `mp_e` varchar(100) NOT NULL,
  `mp_f` varchar(100) NOT NULL,
  `mp_g` varchar(100) NOT NULL,
  `mp_h` varchar(100) NOT NULL,
  `mp_i` varchar(100) NOT NULL,
  `mp_j` varchar(100) NOT NULL,
  `mp_k` varchar(100) NOT NULL,
  `mp_l` varchar(100) NOT NULL,
  `mp_m` varchar(100) NOT NULL,
  `mp_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matarap`
--

INSERT INTO `matarap` (`id`, `mp_a`, `mp_b`, `mp_c`, `mp_d`, `mp_e`, `mp_f`, `mp_g`, `mp_h`, `mp_i`, `mp_j`, `mp_k`, `mp_l`, `mp_m`, `mp_n`) VALUES
(1, 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp', 'mp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'admin/user',
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `type`, `name`) VALUES
(2, 'admin1', 'admin1', 'admin', 'Nimal'),
(3, 'admin2', 'admin2', 'admin', 'Kamal'),
(4, 'user1', 'user1', 'user', 'Saman'),
(5, 'user2', 'user2', 'user', 'Supun');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
