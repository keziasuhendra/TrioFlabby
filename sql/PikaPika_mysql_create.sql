CREATE TABLE `UserBasic` (
	`id` int NOT NULL AUTO_INCREMENT,
	`img_path` varchar(255) NOT NULL,
	`fullname` varchar(20) NOT NULL,
	`is_driver` bool NOT NULL DEFAULT false,
	`star` numeric(2) NOT NULL DEFAULT '0',
	`vote` int NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `PreferredLocation` (
	`id` int NOT NULL,
	`location` varchar(255) NOT NULL
);

CREATE TABLE `OrderHistory` (
	`id_customer` int NOT NULL,
	`id_driver` int NOT NULL,
	`rating` int(1) NOT NULL,
	`feedback` TEXT NOT NULL,
	`order_date` DATE NOT NULL,
	`hidden_c` bool NOT NULL,
	`hidden_d` bool NOT NULL
);

CREATE TABLE `UserAccount` (
	`id` int NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	`pass` varchar(255) NOT NULL,
	`phonen_num` varchar(12) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `PreferredLocation` ADD CONSTRAINT `PreferredLocation_fk0` FOREIGN KEY (`id`) REFERENCES `UserBasic`(`id`);

ALTER TABLE `OrderHistory` ADD CONSTRAINT `OrderHistory_fk0` FOREIGN KEY (`id_customer`) REFERENCES `UserBasic`(`id`);

ALTER TABLE `OrderHistory` ADD CONSTRAINT `OrderHistory_fk1` FOREIGN KEY (`id_driver`) REFERENCES `UserBasic`(`id`);

ALTER TABLE `UserAccount` ADD CONSTRAINT `UserAccount_fk0` FOREIGN KEY (`id`) REFERENCES `UserBasic`(`id`);

