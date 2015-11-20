-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table gudang.aj_categories
CREATE TABLE IF NOT EXISTS `aj_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `active` char(1) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_categories: ~11 rows (approximately)
DELETE FROM `aj_categories`;
/*!40000 ALTER TABLE `aj_categories` DISABLE KEYS */;
INSERT INTO `aj_categories` (`category_id`, `category`, `active`, `created_user`, `created_date`, `modified_user`, `modified_date`) VALUES
	(16, 'Karpet', 'Y', 1, '2012-08-11 07:28:54', 0, '0000-00-00 00:00:00'),
	(17, 'Lemari Plastik dan Kursi', 'Y', 1, '2012-08-11 07:29:00', 1, '2012-08-11 10:35:00'),
	(18, 'Guci, Kaki, Dispanser, dan Galon', 'N', 1, '2012-08-11 07:29:33', 1, '2015-11-19 02:16:03'),
	(19, 'Termos Panas, Nasi, dan Es', 'Y', 1, '2012-08-11 07:30:32', 0, '0000-00-00 00:00:00'),
	(20, 'Kasur Lantai dan Busa', 'Y', 1, '2012-08-11 07:31:01', 1, '2012-08-11 07:49:08'),
	(21, 'Kipas Angin', 'Y', 1, '2012-08-11 07:49:01', 0, '0000-00-00 00:00:00'),
	(22, 'Tikar, Rak Piring, Jemuran, dan Sepatu', 'Y', 1, '2012-08-11 07:51:30', 1, '2012-08-11 10:47:52'),
	(23, 'Kompor Gas', 'Y', 1, '2012-08-11 07:58:02', 0, '0000-00-00 00:00:00'),
	(24, 'Magic Com / Magic Warm / Magic Jar', 'Y', 1, '2012-08-11 08:39:05', 0, '0000-00-00 00:00:00'),
	(25, 'Terpal / Layar', 'Y', 5, '2012-08-04 07:48:40', 0, '0000-00-00 00:00:00'),
	(26, 'test23', 'Y', 0, '2015-11-08 15:43:26', 0, '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `aj_categories` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_employes
CREATE TABLE IF NOT EXISTS `aj_employes` (
  `employe_id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`employe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_employes: ~4 rows (approximately)
DELETE FROM `aj_employes`;
/*!40000 ALTER TABLE `aj_employes` DISABLE KEYS */;
INSERT INTO `aj_employes` (`employe_id`, `nik`, `name`, `address`, `phone`, `email`, `created_user`, `created_date`, `modified_user`, `modified_date`, `photo`) VALUES
	(1, '2012', 'Administrator', 'Jl. Pegadaian No. 38 Arjawinangun, Cirebon', '08562121141', 'takehikoboyz@gmail.com', 0, '0000-00-00 00:00:00', 1, '2015-11-08 05:39:52', NULL),
	(6, '20120811', 'Agus Saputra', 'Jl. Pegadaian No. 38 Arjawinangun, Cirebon 45162', '08562121141', 'takehikoboyz@gmail.com', 1, '2012-08-11 07:22:41', 0, '0000-00-00 00:00:00', NULL),
	(8, '20151108050324', 'test', 'test', '234234234567', 'dadan_stromer@yahoo.co.id', 1, '2015-11-08 05:03:48', 1, '2015-11-08 05:38:59', '20151108050324.jpg'),
	(9, '20151115', 'andi', 'Jl.tanjung 1', '0218228411', 'and1_happy22@yahoo.com', 1, '2015-11-15 05:04:35', 0, '0000-00-00 00:00:00', NULL);
/*!40000 ALTER TABLE `aj_employes` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_merks
CREATE TABLE IF NOT EXISTS `aj_merks` (
  `merk_id` int(11) NOT NULL AUTO_INCREMENT,
  `merk` varchar(100) NOT NULL,
  `active` char(1) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`merk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_merks: ~6 rows (approximately)
DELETE FROM `aj_merks`;
/*!40000 ALTER TABLE `aj_merks` DISABLE KEYS */;
INSERT INTO `aj_merks` (`merk_id`, `merk`, `active`, `created_user`, `created_date`, `modified_user`, `modified_date`) VALUES
	(1, 'National', 'Y', 0, '2012-08-05 17:16:53', 0, '0000-00-00 00:00:00'),
	(2, 'GMC', 'Y', 0, '2012-08-05 17:17:06', 0, '0000-00-00 00:00:00'),
	(3, 'Daimaru', 'Y', 0, '2012-08-05 17:17:19', 0, '0000-00-00 00:00:00'),
	(4, 'Pattaya', 'Y', 0, '2012-08-05 17:17:25', 0, '0000-00-00 00:00:00'),
	(5, 'Napolly', 'Y', 0, '2012-08-05 17:18:09', 0, '0000-00-00 00:00:00'),
	(6, 'MNEOT', 'Y', 0, '2012-08-05 17:18:23', 0, '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `aj_merks` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_products
CREATE TABLE IF NOT EXISTS `aj_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `po_price` int(11) NOT NULL,
  `pm_price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `active` char(1) NOT NULL,
  `description` text NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `qty_product_disc` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FK_aj_products_aj_categories` (`category_id`),
  KEY `FK_aj_products_aj_suppliers` (`supplier_id`),
  CONSTRAINT `FK_aj_products_aj_categories` FOREIGN KEY (`category_id`) REFERENCES `aj_categories` (`category_id`),
  CONSTRAINT `FK_aj_products_aj_suppliers` FOREIGN KEY (`supplier_id`) REFERENCES `aj_suppliers` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_products: ~65 rows (approximately)
DELETE FROM `aj_products`;
/*!40000 ALTER TABLE `aj_products` DISABLE KEYS */;
INSERT INTO `aj_products` (`product_id`, `category_id`, `supplier_id`, `product`, `price`, `po_price`, `pm_price`, `stock`, `active`, `description`, `created_user`, `created_date`, `modified_user`, `modified_date`, `qty_product_disc`) VALUES
	(16, 17, 5, 'Lemari STB 500', 225000, 145000, 150000, 3, 'Y', '', 1, '2012-08-11 07:32:36', 5, '2012-08-12 09:35:54', 0),
	(17, 17, 5, 'Lemari STB 300', 150000, 97000, 110000, 3, 'Y', '', 1, '2012-08-11 07:34:11', 0, '0000-00-00 00:00:00', 0),
	(18, 17, 5, 'Lemari STB 400', 170000, 121000, 130000, 4, 'Y', '', 1, '2012-08-11 07:36:17', 5, '2012-08-12 09:35:36', 0),
	(19, 18, 5, 'Galon Besar', 45000, 400000, 35000, 13, 'Y', '', 1, '2012-08-11 07:42:09', 1, '2015-11-19 02:17:16', 0),
	(20, 18, 5, 'Galon Keran Besar', 50000, 35000, 38000, 1, 'Y', '', 1, '2012-08-11 07:43:23', 5, '2012-08-11 09:14:14', 0),
	(21, 20, 5, 'Kasur Lantai Palembang (Tulip) 140 x 190', 135000, 93000, 100000, 3, 'Y', '', 1, '2012-08-11 07:45:30', 5, '2012-08-02 06:48:26', 0),
	(22, 20, 5, 'Kasur Lantai Palembang (Tulip) 80 x 190', 75000, 53000, 60000, 3, 'Y', '', 1, '2012-08-11 07:47:01', 5, '2012-08-12 09:28:09', 0),
	(23, 20, 5, 'Kasur Lantai Palembang (Tulip) 100 x 190', 100000, 70000, 75000, 2, 'Y', '', 1, '2012-08-11 07:48:10', 0, '0000-00-00 00:00:00', 0),
	(24, 21, 7, 'Kipas Angin GMC', 175000, 105000, 110000, 4, 'Y', '', 1, '2012-08-11 07:50:58', 5, '2012-08-12 09:28:26', 0),
	(25, 18, 6, 'Guci', 90000, 55000, 60000, 7, 'Y', '', 1, '2012-08-11 07:53:42', 0, '0000-00-00 00:00:00', 0),
	(26, 18, 5, 'Kaki Guci Biasa', 35000, 15000, 20000, 11, 'Y', '', 1, '2012-08-11 07:55:59', 5, '2012-08-12 09:26:18', 0),
	(27, 18, 5, 'Kaki Guci Meja', 35000, 15000, 20000, 8, 'Y', '', 1, '2012-08-11 07:56:47', 5, '2012-08-12 09:26:26', 0),
	(28, 23, 7, 'Kompor ProGas Mini', 110000, 65000, 70000, 2, 'Y', '', 1, '2012-08-11 07:59:16', 0, '0000-00-00 00:00:00', 0),
	(29, 22, 5, 'Tikar Helios Naga Bonar', 80000, 58000, 65000, 2, 'Y', '', 1, '2012-08-11 08:12:33', 5, '2012-08-12 09:42:56', 0),
	(30, 22, 5, 'Tikar Berlian', 45000, 32000, 35000, 8, 'Y', '', 1, '2012-08-11 08:14:06', 5, '2012-08-12 09:42:44', 0),
	(31, 16, 5, 'Karpet Daimaru', 10000, 7000, 8000, 5, 'Y', '1 Rol: Rp. 160.000, Isi : 24 Meter', 1, '2012-08-11 08:15:08', 5, '2012-08-12 09:27:34', 0),
	(32, 16, 5, 'Karpet Pattaya', 13000, 8000, 10000, 3, 'Y', '1 Rol: Rp. 160.000, Isi: 20 Meter', 1, '2012-08-11 08:17:43', 5, '2012-08-12 09:27:23', 0),
	(33, 17, 5, 'Lemari M-NEOT 115', 225000, 150000, 160000, 2, 'Y', '', 1, '2012-08-11 08:19:29', 5, '2012-08-12 09:33:52', 0),
	(34, 17, 5, 'Lemari NEA 144', 225000, 155000, 165000, 2, 'Y', '', 1, '2012-08-11 08:21:07', 5, '2012-08-12 09:34:33', 0),
	(35, 17, 5, 'Lemari NEA 144 Kaca', 250000, 165000, 175000, 2, 'Y', '', 1, '2012-08-11 08:22:32', 5, '2012-08-12 09:34:43', 0),
	(36, 17, 5, 'Lemari Club Mini Susun 3', 350000, 260000, 270000, 3, 'Y', '', 1, '2012-08-11 08:23:32', 1, '2012-08-11 08:33:53', 0),
	(37, 17, 5, 'Lemari Gagak Hitam Susun 5', 250000, 155000, 165000, 2, 'Y', '', 1, '2012-08-11 08:33:40', 5, '2012-08-06 08:18:54', 0),
	(38, 17, 5, 'Lemari Gagak Hitam Susun 4', 200000, 135000, 140000, 2, 'Y', '', 1, '2012-08-11 08:34:43', 1, '2012-08-11 10:22:29', 0),
	(39, 24, 7, 'Magic Com Cosmos CRJ - 520', 250000, 168000, 180000, 4, 'Y', '', 1, '2012-08-11 08:41:26', 5, '2012-08-12 09:36:42', 0),
	(40, 24, 7, 'Magic Com Cosmos CRJ - 323 TS', 250000, 173000, 185000, 3, 'Y', '', 1, '2012-08-11 08:43:39', 5, '2012-08-12 09:36:24', 0),
	(41, 24, 7, 'Magic Com Cosmos Mini CRJ - 101 TS', 200000, 143000, 150000, 2, 'Y', '', 1, '2012-08-11 09:43:03', 0, '0000-00-00 00:00:00', 0),
	(42, 24, 7, 'Magic Com Miyako MCM 638 ', 275000, 175000, 185000, 2, 'Y', '', 1, '2012-08-11 09:44:44', 0, '0000-00-00 00:00:00', 0),
	(43, 24, 7, 'Magic Jar Miyako MJ - 709 EP', 225000, 153000, 160000, 2, 'Y', '', 1, '2012-08-11 09:45:44', 0, '0000-00-00 00:00:00', 0),
	(44, 24, 7, 'Magic Com National', 200000, 110000, 120000, 3, 'Y', '', 1, '2012-08-11 09:47:07', 0, '0000-00-00 00:00:00', 0),
	(45, 23, 7, 'Kompor Gas Niko 2 Tungku', 175000, 100000, 105000, 3, 'Y', '', 1, '2012-08-11 09:48:24', 0, '0000-00-00 00:00:00', 0),
	(46, 23, 7, 'Kompor Gas Rinnai RI 522C', 280000, 217000, 230000, 2, 'Y', '', 1, '2012-08-11 09:49:44', 0, '0000-00-00 00:00:00', 0),
	(47, 23, 7, 'Kompor Gas Rinnai RI 522E', 325000, 240000, 250000, 2, 'Y', '', 1, '2012-08-11 09:50:39', 0, '0000-00-00 00:00:00', 0),
	(48, 17, 6, 'Lemari Club Mini Susun 4', 450000, 340000, 350000, 1, 'Y', '', 1, '2012-08-11 10:00:49', 0, '0000-00-00 00:00:00', 0),
	(49, 17, 6, 'Lemari Club Gantung', 525000, 390000, 400000, 1, 'Y', '', 1, '2012-08-11 10:06:39', 0, '0000-00-00 00:00:00', 0),
	(50, 17, 6, 'Lemari Club Boneka Besar Susun 4', 525000, 370000, 385000, 1, 'Y', '', 1, '2012-08-11 10:09:27', 1, '2012-08-11 10:13:50', 0),
	(51, 17, 6, 'Lemari Club Boneka Besar Susun 3', 400000, 277500, 285000, 5, 'Y', '', 1, '2012-08-11 10:12:17', 5, '2012-08-12 09:31:55', 0),
	(53, 17, 6, 'Lemari Club Besar Susun 2', 280000, 200000, 210000, 1, 'Y', '', 1, '2012-08-11 10:17:27', 0, '0000-00-00 00:00:00', 0),
	(54, 17, 6, 'Lemari Club Besar Susun 3', 400000, 277500, 285000, 5, 'Y', '', 1, '2012-08-11 10:19:43', 5, '2012-08-12 09:31:22', 0),
	(55, 18, 7, 'Dispanser Trisonic', 110000, 55000, 60000, 0, 'Y', '', 1, '2012-08-11 10:24:03', 1, '2015-11-19 02:16:20', 0),
	(56, 18, 6, 'Rak Piring Super Besar', 125000, 79000, 85000, 3, 'Y', '', 1, '2012-08-11 10:31:22', 5, '2012-08-12 09:38:23', 0),
	(57, 22, 6, 'Rak Piring Super Kecil', 80000, 55000, 60000, 2, 'Y', '', 1, '2012-08-11 10:32:04', 5, '2012-08-12 09:38:55', 0),
	(58, 22, 5, 'Rak Sepatu', 45000, 24000, 30000, 3, 'Y', '', 1, '2012-08-11 10:33:16', 0, '0000-00-00 00:00:00', 0),
	(59, 16, 5, 'Karpet Bagiva', 55000, 38000, 40000, 8, 'Y', '', 1, '2012-08-11 10:34:25', 5, '2012-08-12 09:26:50', 0),
	(60, 17, 5, 'Kursi Baso Napolly', 35000, 24000, 27000, 15, 'Y', '', 1, '2012-08-11 10:36:08', 5, '2012-08-12 09:30:02', 0),
	(61, 17, 5, 'Kursi Super Biasa', 25000, 13000, 15000, 16, 'Y', '', 1, '2012-08-11 10:42:24', 5, '2012-08-12 09:30:32', 0),
	(62, 22, 6, 'Rak Jemuran Star', 225000, 150000, 160000, 0, 'Y', '', 1, '2012-08-11 10:49:38', 0, '0000-00-00 00:00:00', 0),
	(63, 18, 5, 'Pompa Galon', 35000, 18500, 22000, 2, 'Y', '', 1, '2012-08-11 10:51:59', 5, '2012-08-01 06:36:22', 0),
	(64, 18, 5, 'Mug Elektrik', 35000, 18500, 22000, 2, 'Y', '', 1, '2012-08-11 10:53:08', 0, '0000-00-00 00:00:00', 0),
	(65, 19, 5, 'Termos Panas Elephant', 37500, 23500, 27000, 3, 'Y', '', 1, '2012-08-11 10:54:20', 5, '2012-08-12 09:39:20', 0),
	(66, 21, 5, 'Kipas Angin GMC Gantung', 135000, 15000, 18000, 10, 'Y', '', 1, '2012-08-11 10:58:37', 0, '0000-00-00 00:00:00', 0),
	(67, 21, 7, 'Kipas Angin Niko', 150000, 90000, 100000, 2, 'Y', '', 1, '2012-08-11 10:59:49', 0, '0000-00-00 00:00:00', 0),
	(68, 16, 5, 'Karpet Imitasi', 22500, 14000, 16000, 2, 'Y', '1 Rol: Rp. 560.000, Isi: 40 Meter', 1, '2012-08-11 11:01:07', 5, '2012-08-12 09:27:14', 0),
	(69, 18, 8, 'Galon Keran Kecil', 35000, 22000, 25000, 1, 'Y', '', 1, '2012-08-11 19:33:25', 0, '0000-00-00 00:00:00', 0),
	(70, 25, 9, 'Terpal Layar Lumba-Lumba 3 X 3', 54000, 41400, 45000, 3, 'Y', 'Modal : 1 Meter = Rp. 4.600\r\nHarga Jual : 1 Meter = Rp. 6.000\r\nHarga Paling Murah : 1 Meter = Rp. 5.000', 5, '2012-08-04 07:53:39', 5, '2012-08-12 09:41:12', 0),
	(71, 25, 9, 'Terpal Layar Lumba-Lumba 4 X 6', 144000, 110400, 115200, 1, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 4.800', 5, '2012-08-04 07:56:01', 5, '2012-08-06 08:56:48', 0),
	(72, 25, 9, 'Terpal Layar Lumba-Lumba 2 X 2', 24000, 18400, 20000, 4, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 5.000', 5, '2012-08-04 07:57:37', 0, '0000-00-00 00:00:00', 0),
	(73, 25, 9, 'Terpal Layar Lumba-Lumba 2 X 3', 36000, 27600, 30000, 3, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 5.000', 5, '2012-08-04 07:59:56', 5, '2012-08-12 09:40:55', 0),
	(74, 25, 9, 'Terpal Layar Lumba-Lumba 3 X 4', 72000, 55200, 57600, 3, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 4.800', 5, '2012-08-04 08:02:58', 5, '2012-08-12 09:41:32', 0),
	(75, 25, 9, 'Terpal Layar Lumba-Lumba 4 X 4', 96000, 73600, 76800, 2, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 4.800', 5, '2012-08-04 08:04:57', 0, '0000-00-00 00:00:00', 0),
	(76, 25, 9, 'Terpal Layar Lumba-Lumba 3 X 5', 90000, 69000, 72000, 2, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 4.800', 5, '2012-08-04 08:06:04', 5, '2012-08-12 09:41:50', 0),
	(77, 25, 9, 'Terpal Layar Lumba-Lumba 4 X 5', 120000, 92000, 96000, 2, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 4.800', 5, '2012-08-04 08:07:21', 5, '2012-08-12 09:42:08', 0),
	(78, 25, 9, 'Terpal Layar Lumba-Lumba 5 X 6', 180000, 138000, 144000, 2, 'Y', 'Harga Jual : 1 Meter Rp. 6.000\r\nModal : 1 Meter Rp. 4.600\r\nHarga Paling Murah : 1 Meter Rp. 4.800', 5, '2012-08-04 08:09:41', 0, '0000-00-00 00:00:00', 0),
	(79, 23, 7, 'Selang Gas Radiator', 75000, 43000, 47000, 5, 'Y', '', 5, '2012-08-12 09:44:04', 0, '0000-00-00 00:00:00', 0),
	(80, 18, 6, '', 0, 44, 0, 0, 'N', '', 8, '2015-11-16 05:34:12', 1, '2015-11-19 02:01:27', 0),
	(81, 18, 6, '', 0, 0, 0, 0, 'N', '', 1, '2015-11-19 01:39:38', 1, '2015-11-19 01:42:51', 0);
/*!40000 ALTER TABLE `aj_products` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_sales_transaction
CREATE TABLE IF NOT EXISTS `aj_sales_transaction` (
  `trx_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `sales_price` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `sales_qty` float NOT NULL,
  `sales_stock` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `sales_date` date NOT NULL,
  `sales_time` time NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`trx_id`),
  KEY `FK_aj_sales_transaction_aj_products` (`user_id`,`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_sales_transaction: ~80 rows (approximately)
DELETE FROM `aj_sales_transaction`;
/*!40000 ALTER TABLE `aj_sales_transaction` DISABLE KEYS */;
INSERT INTO `aj_sales_transaction` (`trx_id`, `product_id`, `sales_price`, `profit`, `sales_qty`, `sales_stock`, `subtotal`, `sales_date`, `sales_time`, `description`, `user_id`) VALUES
	(1, 18, 135000, 14000, 1, 3, 135000, '2012-08-01', '06:27:56', '-', 0),
	(2, 21, 110000, 17000, 1, 2, 110000, '2012-08-01', '06:28:38', '-', 0),
	(3, 63, 30000, 11500, 1, 1, 30000, '2012-08-01', '06:36:06', '-', 0),
	(4, 24, 115000, 10000, 1, 3, 115000, '2012-08-01', '06:36:46', '-', 0),
	(5, 22, 60000, 14000, 2, 1, 120000, '2012-08-01', '06:37:42', '', 0),
	(6, 40, 190000, 17000, 1, 2, 190000, '2012-08-01', '06:38:27', '-', 0),
	(7, 59, 40000, 2000, 1, 7, 40000, '2012-08-01', '06:38:52', '-', 0),
	(8, 31, 10000, 12000, 4, 1, 40000, '2012-08-01', '06:39:35', '4 Meter Karpet Daimaru', 0),
	(9, 21, 100000, 7000, 1, 2, 100000, '2012-08-02', '06:47:04', '-', 0),
	(10, 18, 140000, 19000, 1, 3, 140000, '2012-08-03', '07:41:58', '-', 0),
	(11, 30, 35000, 3000, 1, 6, 35000, '2012-08-03', '07:42:16', '-', 0),
	(12, 32, 11000, 3000, 1, 0, 11000, '2012-08-03', '07:43:29', '1 Meter Karpet Pattaya', 0),
	(13, 16, 150000, 5000, 1, 2, 150000, '2012-08-03', '07:43:47', '-', 0),
	(14, 33, 180000, 30000, 1, 1, 180000, '2012-08-04', '07:44:31', '', 0),
	(15, 18, 150000, 29000, 1, 2, 150000, '2012-08-04', '07:44:56', '-', 0),
	(16, 39, 210000, 42000, 1, 3, 210000, '2012-08-04', '07:45:17', '-', 0),
	(17, 77, 110000, 18000, 1, 1, 110000, '2012-08-04', '08:11:02', '-', 0),
	(18, 56, 85000, 6000, 1, 2, 85000, '2012-08-05', '08:14:01', '-', 0),
	(19, 59, 40000, 4000, 2, 5, 80000, '2012-08-05', '08:14:32', '-', 0),
	(20, 57, 65000, 10000, 1, 1, 65000, '2012-08-05', '08:14:53', '-', 0),
	(21, 16, 170000, 25000, 1, 1, 170000, '2012-08-05', '08:15:18', '-', 0),
	(22, 18, 130000, 9000, 1, 1, 130000, '2012-08-05', '08:15:41', '-', 0),
	(23, 59, 40000, 2000, 1, 4, 40000, '2012-08-05', '08:16:18', '-', 0),
	(24, 31, 10000, 15000, 5, 0, 50000, '2012-08-05', '08:16:44', '5 Meter Karpet Daimaru', 0),
	(25, 29, 70000, 12000, 1, 1, 70000, '2012-08-05', '08:17:42', '-', 0),
	(26, 37, 175000, 20000, 1, 1, 175000, '2012-08-06', '08:18:19', '-', 0),
	(27, 37, 175000, 20000, 1, 0, 175000, '2012-08-06', '08:18:34', '-', 0),
	(28, 39, 185000, 17000, 1, 2, 185000, '2012-08-06', '08:19:21', '-', 0),
	(30, 29, 65000, 7000, 1, 0, 65000, '2012-08-06', '08:22:55', '-', 0),
	(32, 59, 45000, 14000, 2, 2, 90000, '2012-08-06', '08:23:52', '-', 0),
	(33, 32, 10000, 6000, 3, 0, 30000, '2012-08-06', '08:27:57', '3 Meter Karpet Pattaya', 0),
	(34, 31, 8000, 2500, 2.5, 0, 20000, '2012-08-06', '08:48:53', '2,5 Meter Karpet Daimaru', 0),
	(35, 68, 17000, 3000, 1, 0, 17000, '2012-08-06', '08:54:57', '1 Meter Imitasi', 0),
	(36, 71, 115000, 4600, 1, 0, 115000, '2012-08-06', '08:56:28', '-', 0),
	(38, 61, 16250, 13000, 4, 12, 65000, '2012-08-07', '08:59:26', '-', 0),
	(39, 34, 160000, 5000, 1, 0, 160000, '2012-08-07', '08:59:44', '-', 0),
	(40, 29, 65000, 7000, 1, 1, 65000, '2012-08-07', '09:01:05', '-', 0),
	(41, 59, 40000, 2000, 1, 1, 40000, '2012-08-07', '09:01:24', '-', 0),
	(42, 30, 35000, 3000, 1, 4, 35000, '2012-08-07', '09:01:48', '-', 0),
	(43, 31, 8000, 2000, 2, 0, 16000, '2012-08-07', '09:02:16', '2 Meter Karpet Daimaru', 0),
	(44, 54, 300000, 22500, 1, 1, 300000, '2012-08-08', '09:03:13', '-', 0),
	(45, 24, 120000, 15000, 1, 2, 120000, '2012-08-08', '09:03:25', '-', 0),
	(46, 59, 45000, 7000, 1, 0, 45000, '2012-08-08', '09:03:39', '-', 0),
	(47, 20, 40000, 5000, 1, 1, 40000, '2012-08-08', '09:04:09', '-', 0),
	(48, 32, 10000, 10000, 5, 0, 50000, '2012-08-08', '09:04:31', '5 Meter Karpet Pattaya', 0),
	(49, 31, 8000, 2000, 2, 0, 16000, '2012-08-08', '09:04:56', '2 Meter Karpet Daimaru', 0),
	(50, 31, 9000, 6000, 3, 0, 27000, '2012-08-08', '09:05:20', '3 Meter Karpet Daimaru', 0),
	(51, 59, 45000, 7000, 1, 2, 45000, '2012-08-08', '09:05:36', '-', 0),
	(52, 59, 45000, 7000, 1, 1, 45000, '2012-08-08', '09:05:46', '-', 0),
	(53, 51, 310000, 32500, 1, 1, 310000, '2012-08-09', '09:06:47', '-', 0),
	(54, 33, 170000, 20000, 1, 0, 170000, '2012-08-09', '09:07:02', '-', 0),
	(55, 60, 30000, 18000, 3, 12, 90000, '2012-08-09', '09:07:16', '-', 0),
	(57, 74, 60000, 9600, 2, 1, 120000, '2012-08-09', '09:08:26', '-', 0),
	(58, 54, 290000, 12500, 1, 0, 290000, '2012-08-09', '09:08:43', '-', 0),
	(59, 76, 80000, 11000, 1, 1, 80000, '2012-08-10', '09:09:30', '-', 0),
	(60, 71, 115500, 5100, 1, 1, 115500, '2012-08-10', '09:09:47', '-', 0),
	(61, 39, 200000, 32000, 1, 1, 200000, '2012-08-10', '09:10:00', '-', 0),
	(62, 19, 40000, 10000, 1, 1, 40000, '2012-08-10', '09:10:12', '-', 0),
	(63, 26, 30000, 15000, 1, 10, 30000, '2012-08-10', '09:10:57', '-', 0),
	(64, 65, 30000, 6500, 1, 2, 30000, '2012-08-10', '09:11:09', '-', 0),
	(65, 59, 40000, 2000, 1, 0, 40000, '2012-08-10', '09:11:19', '-', 0),
	(66, 70, 50000, 8600, 1, 2, 50000, '2012-08-11', '09:13:04', '-', 0),
	(67, 56, 90000, 11000, 1, 1, 90000, '2012-08-11', '09:13:22', '-', 0),
	(68, 31, 8000, 6000, 6, 0, 48000, '2012-08-11', '09:13:45', '6 M Karpet Daimaru', 0),
	(69, 20, 38000, 3000, 1, 0, 38000, '2012-08-11', '09:13:58', '-', 0),
	(70, 62, 180000, 30000, 1, 1, 180000, '2012-08-11', '09:14:34', '-', 0),
	(72, 30, 35000, 6000, 2, 2, 70000, '2012-08-12', '09:15:42', '-', 0),
	(73, 70, 50000, 8600, 1, 1, 50000, '2012-08-12', '09:15:54', '-', 0),
	(74, 31, 8333, 3999, 3, 0, 24999, '2012-08-12', '09:16:42', '3 Meter Karpet Daimaru', 0),
	(75, 31, 10000, 9000, 3, 0, 30000, '2012-08-12', '09:17:04', '3 Meter Karpet Daimaru', 0),
	(76, 70, 50000, 8600, 1, 0, 50000, '2012-08-12', '09:17:19', '-', 0),
	(77, 34, 180000, 25000, 1, 1, 180000, '2012-08-12', '09:17:39', '-', 0),
	(78, 35, 180000, 15000, 1, 1, 180000, '2012-08-12', '09:17:52', '-', 0),
	(79, 30, 35000, 6000, 2, 0, 70000, '2012-08-12', '09:18:17', '-', 0),
	(80, 32, 11666, 10998, 3, 0, 34998, '2012-08-12', '09:18:57', '3 Meter Karpet Pattaya', 0),
	(81, 31, 8000, 12000, 12, 0, 96000, '2012-08-12', '11:23:01', '12 M Karpet Daimaru', 0),
	(82, 32, 12000, 36000, 9, 0, 108000, '2012-08-12', '11:43:27', '9 Meter Karpet Pattaya', 0),
	(83, 69, 25000, 3000, 1, 1, 25000, '2012-08-12', '11:54:26', '-', 0),
	(84, 62, 200000, 50000, 1, 0, 200000, '2012-08-12', '11:54:49', '-', 0),
	(85, 55, 100000000, 299835000, 3, 0, 300000000, '2015-11-19', '02:09:52', '-', 0);
/*!40000 ALTER TABLE `aj_sales_transaction` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_suppliers
CREATE TABLE IF NOT EXISTS `aj_suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(128) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `active` char(1) NOT NULL,
  `description` text NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_suppliers: ~7 rows (approximately)
DELETE FROM `aj_suppliers`;
/*!40000 ALTER TABLE `aj_suppliers` DISABLE KEYS */;
INSERT INTO `aj_suppliers` (`supplier_id`, `supplier`, `address`, `phone`, `active`, `description`, `created_user`, `created_date`, `modified_user`, `modified_date`) VALUES
	(5, 'Hj. Nani', 'Jl. Pegadaian Arjawinangun, Cirebon', '', 'Y', 'Pemasok Lemari STB, Gagak Hitam, Bagiva, Rak, Karpet, dll', 1, '2012-08-11 07:24:14', 1, '2012-08-11 07:25:18'),
	(6, 'Bintang Jaya (Samuel)', 'Jl. Kantor Pos Arjawinangun, Cirebon', '', 'Y', 'Pemasok Lemari S Club dan Lemari Boneka', 1, '2012-08-11 07:25:06', 0, '0000-00-00 00:00:00'),
	(7, 'Putra Jaya Elektronik', 'Jl. Ki Hajar Dewantara (Depan Polsek) Arjawinangun, Cirebon', '', 'Y', 'Pemasok Magic Com, Kompor Gas', 1, '2012-08-11 07:27:19', 0, '0000-00-00 00:00:00'),
	(8, 'Toko Anugrah Jaya', 'Jl. Pegadaian No. 38 Arjawinangun, Cirebon', '0231 - 358630', 'Y', 'Pemasok Kasur, Baby Walker', 1, '2012-08-11 07:28:32', 0, '0000-00-00 00:00:00'),
	(9, 'Toko Garam Eng Swie', 'Jl. Ki Hajar Dewantara No. 128', '', 'Y', 'Pemasok Terpal Lumba-Lumba', 5, '2012-08-04 07:46:32', 0, '0000-00-00 00:00:00'),
	(10, 'test', 'test', '42424', 'Y', 'test', 0, '2015-11-08 15:29:03', 0, '0000-00-00 00:00:00'),
	(12, 'test2', 'test2', '32424', 'Y', 'test2', 0, '2015-11-08 15:30:42', 0, '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `aj_suppliers` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_supp_transaction
CREATE TABLE IF NOT EXISTS `aj_supp_transaction` (
  `trx_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `supp_price` int(11) NOT NULL,
  `supp_qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `description` text NOT NULL,
  `buys_date` date NOT NULL,
  `buys_time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `disc` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'bila sudah melewati 2 bulan dari buys_date, maka akan di set Y untuk pemotongan harga',
  PRIMARY KEY (`trx_id`),
  KEY `FK_aj_supp_transaction_aj_suppliers` (`supplier_id`),
  KEY `FK_aj_supp_transaction_aj_products` (`product_id`),
  KEY `FK_aj_supp_transaction_aj_users` (`user_id`),
  CONSTRAINT `FK_aj_supp_transaction_aj_products` FOREIGN KEY (`product_id`) REFERENCES `aj_products` (`product_id`),
  CONSTRAINT `FK_aj_supp_transaction_aj_suppliers` FOREIGN KEY (`supplier_id`) REFERENCES `aj_suppliers` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_supp_transaction: ~1 rows (approximately)
DELETE FROM `aj_supp_transaction`;
/*!40000 ALTER TABLE `aj_supp_transaction` DISABLE KEYS */;
INSERT INTO `aj_supp_transaction` (`trx_id`, `supplier_id`, `product_id`, `supp_price`, `supp_qty`, `subtotal`, `description`, `buys_date`, `buys_time`, `user_id`, `disc`) VALUES
	(3, 7, 19, 400000, 10, 4000000, '-test', '2015-11-20', '09:12:53', 0, 'N');
/*!40000 ALTER TABLE `aj_supp_transaction` ENABLE KEYS */;


-- Dumping structure for table gudang.aj_users
CREATE TABLE IF NOT EXISTS `aj_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table gudang.aj_users: ~4 rows (approximately)
DELETE FROM `aj_users`;
/*!40000 ALTER TABLE `aj_users` DISABLE KEYS */;
INSERT INTO `aj_users` (`user_id`, `username`, `passwd`, `nik`, `level`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2012', 'Administrator'),
	(5, 'agus.saputra', 'b75958a68c8f8c0b5e0069f43ed1cdd9', '20120811', 'Sales'),
	(7, 'test', '098f6bcd4621d373cade4e832627b4f6', '20151108050324', 'Sales'),
	(8, 'andyreynaldi', 'df7076eb4e371c0fb385a5b4005ccc3e', '20151115', 'Sales');
/*!40000 ALTER TABLE `aj_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
