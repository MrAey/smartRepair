/*
Navicat MySQL Data Transfer

Source Server         : MariaDB10
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : smartrepair

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-31 17:08:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asset_asubstatus
-- ----------------------------
DROP TABLE IF EXISTS `asset_asubstatus`;
CREATE TABLE `asset_asubstatus` (
  `a_status` char(2) NOT NULL DEFAULT '',
  `a_substatus` char(2) NOT NULL DEFAULT '',
  `descriptions` varchar(50) DEFAULT NULL,
  `enterby` varchar(30) DEFAULT NULL,
  `enterdate` datetime DEFAULT NULL,
  `editby` varchar(50) DEFAULT NULL,
  `editdate` datetime DEFAULT NULL,
  PRIMARY KEY (`a_status`,`a_substatus`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of asset_asubstatus
-- ----------------------------
INSERT INTO `asset_asubstatus` VALUES ('1', '1', 'ใช้การได้', null, '2004-08-03 22:46:22', null, '1900-01-01 00:25:21');
INSERT INTO `asset_asubstatus` VALUES ('2', '1', 'อยู่ระหว่างการสอบวัดเทียบ', null, '2004-08-03 22:47:12', null, '1900-01-01 00:25:21');
INSERT INTO `asset_asubstatus` VALUES ('2', '2', 'รอจำหน่าย', null, '2007-04-09 15:16:45', null, '1900-01-01 00:25:21');
INSERT INTO `asset_asubstatus` VALUES ('5', '1', 'จำหน่ายแล้ว', null, '2004-08-28 15:52:34', null, '1900-01-01 00:25:21');
INSERT INTO `asset_asubstatus` VALUES ('5', '2', 'อยู่ระหว่างการจำหน่าย', null, '2004-08-03 22:47:42', null, '1900-01-01 00:25:21');
INSERT INTO `asset_asubstatus` VALUES ('5', '3', 'รอจำหน่าย', null, '2004-10-01 19:18:28', null, '1900-01-01 00:25:21');
