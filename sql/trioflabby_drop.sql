ALTER TABLE `PreferredLocation` DROP FOREIGN KEY `PreferredLocation_fk0`;

ALTER TABLE `OrderHistory` DROP FOREIGN KEY `OrderHistory_fk0`;

ALTER TABLE `OrderHistory` DROP FOREIGN KEY `OrderHistory_fk1`;

DROP TABLE IF EXISTS `User`;

DROP TABLE IF EXISTS `PreferredLocation`;

DROP TABLE IF EXISTS `OrderHistory`;

