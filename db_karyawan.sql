/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : db_karyawan

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 16/05/2022 09:27:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` bigint NOT NULL,
  `nama_depan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `institusi_pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` bigint NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `karyawan_nik_unique`(`nik`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (1, 15861957, 'Gertrude', 'Marquardt', '1994-10-20', 'New York', 'S1', 'UBSI', 'Akuntansi', 'WNA', '2002-03-26', 'Laki-Laki', 'Keuangan', 'Akuntan', 'Manager', 31713278, 'Belum Menikah', 'tleuschke@example.net', 'Kristen', 'A', '9778 Janis Mount Suite 926\r\nSmithberg, DE 29755-0900', '2022-05-16 01:49:37', '2022-05-16 01:50:46');
INSERT INTO `karyawan` VALUES (2, 76955844, 'Janelle', 'Wehner', '1971-04-27', 'North Carolina', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1984-03-27', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 74696915, 'Belum Menikah', 'darren.cruickshank@example.org', 'Islam', 'A', '564 Lois Divide Suite 871\nDickensview, NY 42851', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (3, 93292743, 'Alexandra', 'Turner', '1973-05-22', 'New Mexico', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2022-02-18', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 32850352, 'Belum Menikah', 'gutmann.nia@example.com', 'Islam', 'A', '32430 Junior Drive Apt. 361\nEast Grady, UT 94970-1337', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (4, 81968637, 'Waldo', 'Jast', '2007-05-12', 'Oregon', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2006-11-14', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 27884080, 'Belum Menikah', 'clyde79@example.com', 'Islam', 'B', '2043 Elwyn Station\r\nSouth Diana, TX 90697-4726', '2022-05-16 01:49:37', '2022-05-16 01:54:33');
INSERT INTO `karyawan` VALUES (5, 79353890, 'Cheyanne', 'Rowe', '1979-07-25', 'Utah', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1998-08-28', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 35984279, 'Belum Menikah', 'witting.greg@example.com', 'Islam', 'A', '710 Arturo Station\nNorth Karianestad, WV 59047', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (6, 97628165, 'Kiara', 'Boyle', '1984-05-13', 'Oregon', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2021-02-24', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 85390511, 'Belum Menikah', 'kchristiansen@example.net', 'Islam', 'A', '997 Elton Ridge Suite 029\nNicostad, IL 21659', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (7, 14048362, 'Alison', 'Funk', '1996-05-02', 'Vermont', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2017-09-21', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 20017258, 'Belum Menikah', 'opfannerstill@example.com', 'Islam', 'A', '41886 Maiya Mountains Apt. 998\nNorth Kaitlin, CT 69533', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (8, 17326057, 'Polly', 'Tromp', '2001-06-23', 'Virginia', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1996-07-04', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 93921319, 'Belum Menikah', 'mauricio75@example.net', 'Islam', 'A', '1837 Anais Roads Apt. 316\nEast Clinton, MN 84577-2365', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (9, 52524551, 'Jaron', 'Nitzsche', '1976-09-26', 'District of Columbia', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2011-03-20', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 22122034, 'Belum Menikah', 'eliza89@example.net', 'Islam', 'A', '9069 Elmo Valley Suite 049\nPort Giovannimouth, CO 75407', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (10, 79273594, 'Aron', 'Welch', '1997-11-16', 'Connecticut', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1996-03-10', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 73047547, 'Belum Menikah', 'ibashirian@example.org', 'Islam', 'A', '94987 Welch Springs\nO\'Haraton, MN 40261', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (11, 57758705, 'Peggie', 'Schinner', '1983-10-25', 'Montana', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2000-06-03', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 27676660, 'Belum Menikah', 'russel.everardo@example.net', 'Islam', 'A', '768 Spencer Grove Suite 870\nLangberg, MA 19966', '2022-05-16 01:49:37', '2022-05-16 01:49:37');
INSERT INTO `karyawan` VALUES (12, 49965398, 'Mandy', 'Beer', '2022-04-30', 'Nebraska', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1999-12-06', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 81904778, 'Belum Menikah', 'xzavier.vandervort@example.org', 'Islam', 'A', '80655 Rice Wall Apt. 765\nPort Rodrigo, SD 83487-7801', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (13, 74636013, 'Marjolaine', 'Kovacek', '2020-08-03', 'West Virginia', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1977-03-21', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 26785768, 'Belum Menikah', 'kip.white@example.org', 'Islam', 'A', '218 Annamae Extension Apt. 941\nNew Reinhold, MO 14264-9191', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (14, 77445604, 'Randall', 'Hamill', '2008-11-22', 'Missouri', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2002-04-19', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 60436682, 'Belum Menikah', 'cale.lindgren@example.net', 'Islam', 'A', '90828 Kohler Lodge\nPort Onaberg, NC 80217-9651', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (15, 48745902, 'Gabrielle', 'Smitham', '2001-08-31', 'Nevada', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1970-08-28', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 80743939, 'Belum Menikah', 'omurphy@example.net', 'Islam', 'A', '390 Treva Key\nCasimertown, MS 37909-7819', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (16, 97616691, 'Cordia', 'Skiles', '1971-01-29', 'Kansas', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1997-08-02', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 30739126, 'Belum Menikah', 'dcollier@example.org', 'Islam', 'A', '6473 Ofelia Island Apt. 267\nRoyland, NE 31488-0376', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (17, 20731353, 'Lue', 'Mitchell', '1995-12-22', 'Minnesota', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2009-06-11', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 50091374, 'Belum Menikah', 'rebeca.konopelski@example.org', 'Islam', 'A', '2067 Streich Islands\nNathanaelburgh, NC 93362', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (18, 60262844, 'Jena', 'Bradtke', '2021-04-25', 'Utah', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1998-10-14', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 96696425, 'Belum Menikah', 'savanah37@example.com', 'Islam', 'A', '415 Katherine Fork Apt. 914\nWest Nigelshire, SD 75332', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (19, 48713913, 'Linnie', 'Cremin', '1985-01-13', 'Virginia', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '1983-08-26', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 63834212, 'Belum Menikah', 'aorn@example.net', 'Islam', 'A', '38976 Harvey Lakes\nNyasiaside, MT 59204-0393', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (20, 47976641, 'Jorge', 'Blanda', '2016-12-24', 'North Carolina', 'S1', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2013-03-01', 'Laki-Laki', 'Digital Marketing', 'Website Developer', 'Staff', 83155600, 'Belum Menikah', 'rogers.quigley@example.net', 'Islam', 'A', '17357 Nitzsche Land\nWest Melodystad, LA 32712-3403', '2022-05-16 01:49:38', '2022-05-16 01:49:38');
INSERT INTO `karyawan` VALUES (22, 2347689234560935, 'Yolantika', 'Nur', '2022-05-16', 'Sanggau', 'D3', 'UBSI', 'Sistem Informasi Akuntansi', 'WNI', '2022-05-17', 'Perempuan', 'IT', 'Website Developer', 'Staff', 89694612922, 'Belum Menikah', 'yolantikan34@gmail.com', 'Islam', 'B', 'Sanggau', '2022-05-16 01:57:34', '2022-05-16 01:57:34');

-- ----------------------------
-- Table structure for karyawans
-- ----------------------------
DROP TABLE IF EXISTS `karyawans`;
CREATE TABLE `karyawans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawans
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (31, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (32, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (33, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (34, '2022_05_11_082253_create_karyawan', 1);
INSERT INTO `migrations` VALUES (35, '2022_05_11_082536_create_karyawans_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
