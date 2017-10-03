ALTER TABLE `PreferredLocation` DROP FOREIGN KEY `PreferredLocation_fk0`;

ALTER TABLE `OrderHistory` DROP FOREIGN KEY `OrderHistory_fk0`;

ALTER TABLE `OrderHistory` DROP FOREIGN KEY `OrderHistory_fk1`;

ALTER TABLE `UserAccount` DROP FOREIGN KEY `UserAccount_fk0`;

DROP TABLE IF EXISTS `UserBasic`;

DROP TABLE IF EXISTS `PreferredLocation`;

DROP TABLE IF EXISTS `OrderHistory`;

DROP TABLE IF EXISTS `UserAccount`;

