/*
Navicat MySQL Data Transfer

Source Server         : XAMPP_MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : smartrepair

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-16 16:55:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sub_menu
-- ----------------------------
DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE `sub_menu` (
  `sub_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sub_menu
-- ----------------------------
INSERT INTO `sub_menu` VALUES ('2', 'desktop', 'index.php?r=computer/index', 'ครุภัณฑ์คอมพิวเตอร์', 'รายการครุภัณฑ์คอมพิวเตอร์', null, null);
INSERT INTO `sub_menu` VALUES ('2', 'th', 'index.php?r=report', 'ครุภัณฑ์...1', 'รายการครุภัณฑ์...', null, null);
INSERT INTO `sub_menu` VALUES ('6', 'pie-chart', 'index.php?r=report', 'รายงาน...1', 'รายการ...', '', null);
