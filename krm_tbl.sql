/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : krm_tbl

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 31/08/2022 22:53:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for absen
-- ----------------------------
DROP TABLE IF EXISTS `absen`;
CREATE TABLE `absen`  (
  `absen_id` int NOT NULL AUTO_INCREMENT,
  `id` int NULL DEFAULT NULL,
  `absen_tgl` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `absen_ket` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`absen_id`) USING BTREE,
  INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of absen
-- ----------------------------
INSERT INTO `absen` VALUES (13, 22, '20-05-2015', 'Hadir');
INSERT INTO `absen` VALUES (14, 26, '20-05-2015', 'Alfa');
INSERT INTO `absen` VALUES (15, 22, '26-05-2015', 'Sakit');
INSERT INTO `absen` VALUES (16, 22, '27-05-2015', 'Hadir');

-- ----------------------------
-- Table structure for alat
-- ----------------------------
DROP TABLE IF EXISTS `alat`;
CREATE TABLE `alat`  (
  `alat_id` int NOT NULL AUTO_INCREMENT,
  `alat_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alat_jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alat_jumlah` int NULL DEFAULT NULL,
  `alat_rusak` int NULL DEFAULT NULL,
  `alat_satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`alat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alat
-- ----------------------------
INSERT INTO `alat` VALUES (1, 'no2', 'Cair', 34, 35, 'dtrh');
INSERT INTO `alat` VALUES (3, 'no2', 'Cair', 34, 35, 'dtrh');
INSERT INTO `alat` VALUES (4, 'adasd', 'Cair', 56, 4, 'asda');
INSERT INTO `alat` VALUES (7, 'ad', 'Mudah Pecah', 34, 4, 'dsf');

-- ----------------------------
-- Table structure for bahan
-- ----------------------------
DROP TABLE IF EXISTS `bahan`;
CREATE TABLE `bahan`  (
  `bahan_id` int NOT NULL AUTO_INCREMENT,
  `bahan_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bahan_jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bahan_jumlah` int NULL DEFAULT NULL,
  `bahan_rusak` int NULL DEFAULT NULL,
  `bahan_satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`bahan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bahan
-- ----------------------------
INSERT INTO `bahan` VALUES (3, 'weq', 'Cair', 34, 2, 'dfss');

-- ----------------------------
-- Table structure for download
-- ----------------------------
DROP TABLE IF EXISTS `download`;
CREATE TABLE `download`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipe_file` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ukuran_file` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of download
-- ----------------------------
INSERT INTO `download` VALUES (17, '2015-05-28', 'hg', 'pdf', '1545102', '../gallery/hg.pdf');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `galeri_id` int NOT NULL AUTO_INCREMENT,
  `galeri_nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galeri_keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galeri_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galeri_tgl` datetime NOT NULL,
  PRIMARY KEY (`galeri_id`) USING BTREE,
  UNIQUE INDEX `galeri_nama`(`galeri_nama` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeri
-- ----------------------------

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal`  (
  `jadwal_id` int NOT NULL AUTO_INCREMENT,
  `jam_id` int NULL DEFAULT NULL,
  `jadwal_tanggal` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id` int NULL DEFAULT NULL,
  `kelas_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`jadwal_id`) USING BTREE,
  INDEX `jam_id`(`jam_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jadwal
-- ----------------------------
INSERT INTO `jadwal` VALUES (21, 5, '27-05-2015', 24, 1);
INSERT INTO `jadwal` VALUES (22, 6, '27-05-2015', 24, 2);

-- ----------------------------
-- Table structure for jam
-- ----------------------------
DROP TABLE IF EXISTS `jam`;
CREATE TABLE `jam`  (
  `jam_id` int NOT NULL AUTO_INCREMENT,
  `jam_nama` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`jam_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jam
-- ----------------------------
INSERT INTO `jam` VALUES (5, '07:30 - 09:00');
INSERT INTO `jam` VALUES (6, '09:00 - 10:45');
INSERT INTO `jam` VALUES (7, '10:45 - 12:30');
INSERT INTO `jam` VALUES (8, '12:30 - 13:15');

-- ----------------------------
-- Table structure for jenisnilai
-- ----------------------------
DROP TABLE IF EXISTS `jenisnilai`;
CREATE TABLE `jenisnilai`  (
  `jenis_id` int NOT NULL AUTO_INCREMENT,
  `jenis_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`jenis_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenisnilai
-- ----------------------------
INSERT INTO `jenisnilai` VALUES (1, 'Afektif');
INSERT INTO `jenisnilai` VALUES (2, 'Psikomotor');
INSERT INTO `jenisnilai` VALUES (3, 'Kognitif');

-- ----------------------------
-- Table structure for jenisperangkat
-- ----------------------------
DROP TABLE IF EXISTS `jenisperangkat`;
CREATE TABLE `jenisperangkat`  (
  `jenisperangkat_id` int NOT NULL AUTO_INCREMENT,
  `jenisperangkat_nama` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenisperangkat_type` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`jenisperangkat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenisperangkat
-- ----------------------------
INSERT INTO `jenisperangkat` VALUES (2, 'Mudah Pecah', 'Alat');
INSERT INTO `jenisperangkat` VALUES (3, 'Padad', 'Alat');
INSERT INTO `jenisperangkat` VALUES (4, 'Cair', 'Bahan');

-- ----------------------------
-- Table structure for kat_masalah
-- ----------------------------
DROP TABLE IF EXISTS `kat_masalah`;
CREATE TABLE `kat_masalah`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori_masalah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kat_masalah
-- ----------------------------
INSERT INTO `kat_masalah` VALUES (3, 'Server');
INSERT INTO `kat_masalah` VALUES (4, 'Jaringan');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `kelas_id` int NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kelas_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'X-1');
INSERT INTO `kelas` VALUES (2, 'X-2');

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai`  (
  `nilai_id` int NOT NULL AUTO_INCREMENT,
  `id` int NULL DEFAULT NULL,
  `jenis_id` int NULL DEFAULT NULL,
  `semester_id` int NULL DEFAULT NULL,
  `tahun_id` int NULL DEFAULT NULL,
  `nilai_poin` int NULL DEFAULT NULL,
  PRIMARY KEY (`nilai_id`) USING BTREE,
  INDEX `siswa_id`(`id` ASC) USING BTREE,
  INDEX `jenis_id`(`jenis_id` ASC, `semester_id` ASC, `tahun_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES (21, 22, 1, 1, 1, 67);

-- ----------------------------
-- Table structure for part
-- ----------------------------
DROP TABLE IF EXISTS `part`;
CREATE TABLE `part`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_part` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of part
-- ----------------------------
INSERT INTO `part` VALUES (5, 'obeng', 2);
INSERT INTO `part` VALUES (6, 'tang', 1);
INSERT INTO `part` VALUES (7, 'tw', 78980);

-- ----------------------------
-- Table structure for penugasan
-- ----------------------------
DROP TABLE IF EXISTS `penugasan`;
CREATE TABLE `penugasan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `jam` time(6) NULL DEFAULT NULL,
  `pelapor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori_masalah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penjelasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penugasan
-- ----------------------------

-- ----------------------------
-- Table structure for semester
-- ----------------------------
DROP TABLE IF EXISTS `semester`;
CREATE TABLE `semester`  (
  `semester_id` int NOT NULL AUTO_INCREMENT,
  `semester_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`semester_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of semester
-- ----------------------------
INSERT INTO `semester` VALUES (1, '1 (Satu)');
INSERT INTO `semester` VALUES (2, '2 (Dua)');

-- ----------------------------
-- Table structure for tahun
-- ----------------------------
DROP TABLE IF EXISTS `tahun`;
CREATE TABLE `tahun`  (
  `tahun_id` int NOT NULL AUTO_INCREMENT,
  `tahun_nama` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`tahun_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tahun
-- ----------------------------
INSERT INTO `tahun` VALUES (1, '2014/2015');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` int NULL DEFAULT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `join` date NULL DEFAULT NULL,
  `telp` int NULL DEFAULT NULL,
  `jabatan` enum('HELPDESK','TEKNISI','USER') CHARACTER SET utf16 COLLATE utf16_general_ci NULL DEFAULT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `assesment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (7, 'rachmamaudy', '827ccb0eea8a706c4c34a16891f84e7b', 'Rachma Maudy', 2147483647, 'perempuan', 'islam', 'jakarta', '2020-09-28', '2020-09-28', 987654321, 'HELPDESK', '', NULL, NULL);
INSERT INTO `user` VALUES (10, 'maulano', '827ccb0eea8a706c4c34a16891f84e7b', 'maulano', 0, 'laki-laki', 'Islam', 'Jakarta', '2005-05-12', '2000-01-01', NULL, 'HELPDESK', NULL, 'rachmamaudy@gmail.com', NULL);
INSERT INTO `user` VALUES (11, 'yupiyupi', '1f32aa4c9a1d2ea010adcf2348166a04', 'yupi', 0, 'female', 'Islam', 'Jakarta', '2112-12-12', '2001-12-09', NULL, 'HELPDESK', NULL, '121233844', NULL);
INSERT INTO `user` VALUES (12, 'test123', '1f32aa4c9a1d2ea010adcf2348166a04', 'test', 1234567890, 'male', '-', 'jkt', '2001-11-11', '2022-01-01', NULL, NULL, NULL, 'test123@gmail.com', 'test123');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gender` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelas_id` int NULL DEFAULT NULL,
  `access` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kelas_id`(`kelas_id` ASC) USING BTREE,
  INDEX `kelas_id_2`(`kelas_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (22, '456', 'gg', 'aaa', 'aaa', '34563', 'gggg', 'Aktif', 'Laki-laki', 'foto/Untitled.jpg', 1, 'siswa');
INSERT INTO `users` VALUES (24, '45345', 'Ary Munandar', 'guru', 'test', '323', 'asdasd', 'PNS', 'Laki-laki', 'foto/10432461_10202319622671266_2462827913693846606_n.jpg', NULL, 'guru');
INSERT INTO `users` VALUES (25, NULL, 'administrator', 'admin', 'admin', '12790', 'jalan jalan', 'PNS', 'Laki-laki', 'foto/10432461_10202319622671266_2462827913693846606_n.jpg', NULL, 'admin');
INSERT INTO `users` VALUES (26, '2987601999', 'chairani munaf', 'guru', 'guru', '08765234', 'jalan sudirman', 'PNS', 'Perempuan', 'foto/Untitled.jpg', NULL, 'guru');
INSERT INTO `users` VALUES (27, '567', 'fth', 'fgh', 'fgh', 'fgh', 'fgh', 'PNS', 'Laki-laki', 'foto/IMG_2918.jpg', NULL, 'guru');

SET FOREIGN_KEY_CHECKS = 1;
