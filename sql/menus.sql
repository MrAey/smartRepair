/*
Navicat MySQL Data Transfer

Source Server         : XAMPP_MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : smartrepair

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-16 16:55:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `visible` tinyint(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', 'home', 'index.php?r=site/index', 'หน้าแรก', 'หน้าแรก', null, null);
INSERT INTO `menus` VALUES ('2', 'th-list', null, 'รายการครุภัณฑ์', 'ครุภัณฑ์ทั้งหมด', null, null);
INSERT INTO `menus` VALUES ('3', 'edit', 'index.php?r=card/index', 'ใบส่งซ่อม', 'เขียนใบส่งซ่อม', null, null);
INSERT INTO `menus` VALUES ('4', 'list', 'index.php?r=card/report', 'รายการส่งซ่อม', null, null, null);
INSERT INTO `menus` VALUES ('5', 'users', 'index.php?r=member/index', 'สมาชิก', null, null, null);
INSERT INTO `menus` VALUES ('6', 'pie-chart', null, 'รายงาน', null, null, null);
INSERT INTO `menus` VALUES ('7', 'gear', 'index.php?r=setting/index', 'ตั้งค่า', null, null, null);
