-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.5.0.6691
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table db_wisata.pesanan
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pesan` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `participants` int(11) DEFAULT NULL,
  `travel_date` int(11) DEFAULT NULL,
  `package_price` decimal(20,6) DEFAULT NULL,
  `total_charge` decimal(20,6) DEFAULT NULL,
  `accomodation` enum('Y','N') DEFAULT NULL,
  `transportation` enum('Y','N') DEFAULT NULL,
  `service` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_wisata.pesanan: ~3 rows (lebih kurang)
INSERT INTO `pesanan` (`id`, `tgl_pesan`, `nama`, `phone`, `participants`, `travel_date`, `package_price`, `total_charge`, `accomodation`, `transportation`, `service`) VALUES
	(1, '2024-01-29', 'JODY ARYONO', '085719195627', 1, 2, 2700000.000000, 5400000.000000, 'Y', 'Y', 'Y');
INSERT INTO `pesanan` (`id`, `tgl_pesan`, `nama`, `phone`, `participants`, `travel_date`, `package_price`, `total_charge`, `accomodation`, `transportation`, `service`) VALUES
	(4, '2024-01-29', 'LSP INFORMATIKA', '085719195627', 1, 2, 1700000.000000, 3400000.000000, 'N', 'Y', 'Y');
INSERT INTO `pesanan` (`id`, `tgl_pesan`, `nama`, `phone`, `participants`, `travel_date`, `package_price`, `total_charge`, `accomodation`, `transportation`, `service`) VALUES
	(6, '2024-01-30', 'Muhaemin Test', '08125678 ', 5, 1, 1500000.000000, 7500000.000000, 'Y', 'N', 'Y');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
