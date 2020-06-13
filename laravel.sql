/*
Navicat MySQL Data Transfer

Source Server         : anis
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-06-11 12:49:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `membership_type` int(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `exp_card` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ncjd', 'bsjf', 'cnsjcns', null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('2', 'vdhqj', 'gugu', 'gugui@gmail.com', null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('3', 'bduqg', 'huih', 'h@gmai.com', '$2y$10$4Qeqo7sPjBM8k423SBCMjuIx45bK0URGb.fsreGlBpFu80lluALxi', null, null, null, null, null, null);
INSERT INTO `users` VALUES ('4', 'dguwgdu', 'hhoih', 'h@gmail.com', '$2y$10$XMFeqNQHUThB6m/e36cG0.QA7WGWks8My7Miex/IkYJHwxNAFD5gm', 'bcjsbcjsbcs', '2020-06-26', '5', '42534126', null, null);
INSERT INTO `users` VALUES ('5', 'dguwgdu', 'hhoih', 'hvfnde@gmail.com', '$2y$10$Z1GqK1C7GP.ssFuPa9Jbh.eQunoZ/j4ESFC7hMg5tSa/mYgoxX2P2', 'bcjsbcjsbcs', '2020-06-26', '5', '42534126', null, null);
INSERT INTO `users` VALUES ('6', 'bcjsb', 'gugui', 'ugiug@gmail.com', '$2y$10$9hQTTwiFK9AKdSxq9TgvWeR0ay.Hx0bfe92NE6XYeXZtyLk/qwC0q', null, null, '1', null, null, null);
INSERT INTO `users` VALUES ('7', 'bcjsb', 'gugui', 'anis@gmail.com', '$2y$10$2bIFk1d9aa7kpdTqy8AYIesyMdgiISEcYZ3c.M9CE6bKB.vMG3GJu', 'anisichsi', null, '1', null, null, null);
INSERT INTO `users` VALUES ('8', 'vcv', 'giugiu', 'giugui@gmail.com', '$2y$10$7UJ8Gu66kCpH5D0hh7xCwuO3l35O60t3eSpnKb1Vs0bm7poDXGdrq', null, null, '1', null, null, null);
INSERT INTO `users` VALUES ('9', 'bauaba', 'vsiyqvs', 'siti@gmail.com', '$2y$10$/klbGfHJtfWl2BSA8ss5S.NRPOSRjN3QGBAmexZqSMAcfWeSXhOEi', 'bcjsbvc', '2020-06-25', '6', '352635', '328372', null);
