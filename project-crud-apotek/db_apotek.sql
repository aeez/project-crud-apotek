/*
 Navicat Premium Data Transfer

 Source Server         : geez
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : db_apotek

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 30/01/2021 11:43:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_dokter
-- ----------------------------
DROP TABLE IF EXISTS `t_dokter`;
CREATE TABLE `t_dokter`  (
  `kode_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `spesialis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_poli` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`kode_dokter`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_dokter
-- ----------------------------
INSERT INTO `t_dokter` VALUES (1, 'Akram', 'Jl. Sidorukun', '082163251874', 'Jantung', 1);
INSERT INTO `t_dokter` VALUES (2, 'Rayyan', 'Jl. Stasiun', '081254271653', 'Mata', 2);
INSERT INTO `t_dokter` VALUES (3, 'Kabul', 'Jl. Bandara', '082365127663', 'Kulit & Kelamin', 3);
INSERT INTO `t_dokter` VALUES (4, 'Ripat', 'Jl. Terminal', '085372617232', 'Tulang', 4);
INSERT INTO `t_dokter` VALUES (5, 'Risky', 'Jl. Suka Damai', '082361536273', 'THT', 5);

-- ----------------------------
-- Table structure for t_resep
-- ----------------------------
DROP TABLE IF EXISTS `t_resep`;
CREATE TABLE `t_resep`  (
  `no_resep` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_resep` date NULL DEFAULT NULL,
  `kode_dokter` int(11) NULL DEFAULT NULL,
  `kode_pasien` int(11) NULL DEFAULT NULL,
  `kode_poli` int(11) NULL DEFAULT NULL,
  `total_harga` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_resep`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_resep
-- ----------------------------
INSERT INTO `t_resep` VALUES ('R001', '2021-01-05', 1, 1, 1, 'Rp. 200.000');
INSERT INTO `t_resep` VALUES ('R002', '2021-01-13', 2, 2, 2, 'Rp. 300.000');
INSERT INTO `t_resep` VALUES ('R003', '2021-01-18', 3, 3, 3, 'Rp. 250.000');
INSERT INTO `t_resep` VALUES ('R004', '2021-01-24', 2, 4, 2, 'Rp. 286.000');
INSERT INTO `t_resep` VALUES ('R005', '2021-01-28', 5, 5, 5, 'Rp. 178.000');

SET FOREIGN_KEY_CHECKS = 1;
