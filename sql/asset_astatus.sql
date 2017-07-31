/*
Navicat MySQL Data Transfer

Source Server         : MariaDB10
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : smartrepair

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-31 17:07:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asset_astatus
-- ----------------------------
DROP TABLE IF EXISTS `asset_astatus`;
CREATE TABLE `asset_astatus` (
  `a_status` char(2) NOT NULL DEFAULT '',
  `descriptions` varchar(50) DEFAULT NULL,
  `enterby` varchar(30) DEFAULT NULL,
  `enterdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `editby` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`a_status`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of asset_astatus
-- ----------------------------
INSERT INTO `asset_astatus` VALUES ('1', 'ใช้งานปกติ', null, null, null, null);
INSERT INTO `asset_astatus` VALUES ('2', 'ส่งคืนคลัง สภาพใช้งานได้', null, null, null, null);
INSERT INTO `asset_astatus` VALUES ('3', 'ส่งคืนคลัง สภาพชำรุด', null, null, null, null);
INSERT INTO `asset_astatus` VALUES ('4', 'รอจำหน่าย', null, null, null, null);
INSERT INTO `asset_astatus` VALUES ('5', 'จำหน่ายแล้ว', null, null, null, null);
INSERT INTO `asset_astatus` VALUES ('6', 'ตรวจสอบข้อมูล', 'ผู้ดูแลระบบ', null, null, 'ผู้ดูแลระบบ');
INSERT INTO `asset_astatus` VALUES ('7', 'อื่นๆ', null, null, null, null);
INSERT INTO `asset_astatus` VALUES ('8', 'ชำรุด/เสีย (ซ่อมได้)', 'ผู้ดูแลระบบ', null, null, 'ผู้ดูแลระบบ');
INSERT INTO `asset_astatus` VALUES ('9', 'ชำรุด/เสีย (ซ่อมไม่ได้)', 'ผู้ดูแลระบบ', null, null, 'ผู้ดูแลระบบ');
