/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : try_gallery

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-05-03 17:24:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_image
-- ----------------------------
DROP TABLE IF EXISTS `tb_image`;
CREATE TABLE `tb_image` (
  `id` int(11) NOT NULL,
  `namafile` varchar(50) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `ket` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_image
-- ----------------------------
INSERT INTO `tb_image` VALUES ('1', '01.jpg', 'image/jpeg', 'gdg');
INSERT INTO `tb_image` VALUES ('2', '02.jpg', 'image/jpeg', 'dg');
INSERT INTO `tb_image` VALUES ('3', '03.jpg', 'image/jpeg', 'gdgf');
INSERT INTO `tb_image` VALUES ('4', '04.jpg', 'image/jpeg', 'gdgd');
SET FOREIGN_KEY_CHECKS=1;
