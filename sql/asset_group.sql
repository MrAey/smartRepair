/*
Navicat MySQL Data Transfer

Source Server         : MariaDB10
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : smartrepair

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-31 17:08:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asset_group
-- ----------------------------
DROP TABLE IF EXISTS `asset_group`;
CREATE TABLE `asset_group` (
  `groupid` char(3) NOT NULL DEFAULT '',
  `description` varchar(60) NOT NULL DEFAULT '',
  `description_eng` varchar(50) DEFAULT NULL,
  `cname` varchar(15) DEFAULT NULL,
  `cal_downtime` int(11) DEFAULT NULL,
  `enterby` varchar(30) DEFAULT NULL,
  `enterdate` datetime DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  `editby` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of asset_group
-- ----------------------------
INSERT INTO `asset_group` VALUES ('01', '01-ครุภัณฑ์การแพทย์', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('02', '02-ครุภัณฑ์สำนักงาน', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('03', '03-ครุภัณฑ์คอมพิวเตอร์', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('04', '04-ครุภัณฑ์ไฟฟ้าและวิทยุ', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('05', '05-ครุภัณฑ์โฆษณาและเผยแพร่', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('06', '06-ครุภัณฑ์ก่อสร้าง', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('07', '07-ครุภัณฑ์การเกษตร', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('08', '08-ครุภัณฑ์งานบ้านงานครัว', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('09', '09-ครุภัณฑ์ยานพาหนะ', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('10', '10-ครุภัณฑ์โรงงาน', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('11', '11-ครุภัณฑ์การศึกษา', null, null, null, null, null, null, null);
INSERT INTO `asset_group` VALUES ('99', '99-ไม่ระบุ', null, null, null, null, null, null, null);
