# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-05-18 17:41:50
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "buku"
#

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pengarang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `penerbit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "buku"
#

INSERT INTO `buku` VALUES (1,'haha','kok','lah',NULL,'2018-05-18 16:58:19','2018-05-18 16:58:19'),(2,'haha','kok','lah',NULL,'2018-05-18 16:59:40','2018-05-18 16:59:40');

#
# Structure for table "categori"
#

DROP TABLE IF EXISTS `categori`;
CREATE TABLE `categori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "categori"
#

INSERT INTO `categori` VALUES (2,'blar','2018-05-18 17:28:32','2018-05-18 17:28:32','2018-05-18 17:28:32');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_05_18_063255_table_todo',1),(2,'2018_05_18_065817_buku',2),(3,'2018_05_18_084515_kategori',3);
