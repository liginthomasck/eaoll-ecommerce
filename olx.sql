/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : olx

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2021-01-12 12:35:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `add_cat`
-- ----------------------------
DROP TABLE IF EXISTS `add_cat`;
CREATE TABLE `add_cat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_cat
-- ----------------------------
INSERT INTO `add_cat` VALUES ('2', 'asdsad');
INSERT INTO `add_cat` VALUES ('3', 'sdff');

-- ----------------------------
-- Table structure for `additem`
-- ----------------------------
DROP TABLE IF EXISTS `additem`;
CREATE TABLE `additem` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `itemCategory` text NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `usages` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `sDate` varchar(20) NOT NULL,
  `EDate` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of additem
-- ----------------------------
INSERT INTO `additem` VALUES ('1', '1', 'asdsad', 'dgdfg', 'dfgdf', '345', 'dfgdfg', 'picz/image.jpg', '2021-01-11', '2021-01-21', 'approved');
INSERT INTO `additem` VALUES ('2', '1', 'asdsad', 'ujghj', 'ghjghj', '567', 'fhfgh', 'picz/image.jpg', '2021-01-01', '2021-01-10', 'approved');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `utype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', '0', 'admin', 'admin', 'admin');
INSERT INTO `login` VALUES ('2', '00', 'disposer', 'disposer', 'disposer');
INSERT INTO `login` VALUES ('3', '1', 'sneha@gmail.com', 'sneha', 'user');
INSERT INTO `login` VALUES ('4', '2', 'asha@gmail.com', 'asha', 'user');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `odate` date NOT NULL,
  `itemid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `otype` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '2021-01-12', '1', '2', 'pending', 'cod');

-- ----------------------------
-- Table structure for `userreg`
-- ----------------------------
DROP TABLE IF EXISTS `userreg`;
CREATE TABLE `userreg` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aadharid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of userreg
-- ----------------------------
INSERT INTO `userreg` VALUES ('1', 'Sneha', 'Kochi', '9865322155', 'sneha@gmail.com', '876521649821');
INSERT INTO `userreg` VALUES ('2', 'Asha', 'kochi', '8709543212', 'asha@gmail.com', '876755434523');

-- ----------------------------
-- Table structure for `wallet`
-- ----------------------------
DROP TABLE IF EXISTS `wallet`;
CREATE TABLE `wallet` (
  `wid` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `amt` int(20) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of wallet
-- ----------------------------
INSERT INTO `wallet` VALUES ('1', '1', '2', '200');
