/*
Navicat MySQL Data Transfer

Source Server         : XAMPP_MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : smartrepair

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-03 23:04:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asset_acatagory
-- ----------------------------
DROP TABLE IF EXISTS `asset_acatagory`;
CREATE TABLE `asset_acatagory` (
  `groupid` char(3) NOT NULL DEFAULT '',
  `catagory` varchar(5) NOT NULL DEFAULT '',
  `descriptions` varchar(100) DEFAULT NULL,
  KEY `catagory` (`catagory`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of asset_acatagory
-- ----------------------------
INSERT INTO `asset_acatagory` VALUES ('01', '024', 'Infusion Pump');
INSERT INTO `asset_acatagory` VALUES ('02', '018', 'เครื่องปรับอากาศ');
INSERT INTO `asset_acatagory` VALUES ('03', '002', 'คอมพิวเตอร์โน๊ตบุค');
INSERT INTO `asset_acatagory` VALUES ('04', '002', 'เครื่องขยายเสียง');
INSERT INTO `asset_acatagory` VALUES ('05', '001', 'กล้อง');
INSERT INTO `asset_acatagory` VALUES ('06', '001', 'รถเข็น');
INSERT INTO `asset_acatagory` VALUES ('07', '001', 'เครื่องชั่ง');
INSERT INTO `asset_acatagory` VALUES ('08', '006', 'เครื่องกรองน้ำ');
INSERT INTO `asset_acatagory` VALUES ('08', '007', 'เครื่องซักผ้า');
INSERT INTO `asset_acatagory` VALUES ('09', '003', 'รถยนต์');
INSERT INTO `asset_acatagory` VALUES ('10', '008', 'เครื่องเจียร');
INSERT INTO `asset_acatagory` VALUES ('11', '001', 'เครื่องเล่นเด็ก');
INSERT INTO `asset_acatagory` VALUES ('99', '999', 'ไม่ระบุ');
INSERT INTO `asset_acatagory` VALUES ('03', '003', 'เครื่องถ่ายทอดสัญญาณ (HUB/Switch/Router)');
INSERT INTO `asset_acatagory` VALUES ('03', '004', 'เครื่องแปลงรหัสสัญญาณ (Modem)');
INSERT INTO `asset_acatagory` VALUES ('03', '001', 'คอมพิวเตอร์ประมวลผล (ไมโครคอมพิวเตอร์)');
INSERT INTO `asset_acatagory` VALUES ('03', '005', 'Printer');
INSERT INTO `asset_acatagory` VALUES ('03', '006', 'Scanner');
INSERT INTO `asset_acatagory` VALUES ('03', '007', 'เครื่องสำรองไฟ (UPS)');
INSERT INTO `asset_acatagory` VALUES ('03', '008', 'โปรแกรมคอมพิวเตอร์ หรือซอฟต์แวร์');
INSERT INTO `asset_acatagory` VALUES ('05', '002', 'Projecter');
