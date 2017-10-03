CREATE TABLE `User` (
	`id` int NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	`pass` varchar(255) NOT NULL,
	`phone_num` varchar(12) NOT NULL,
	`img_path` varchar(255) NOT NULL,
	`fullname` varchar(20) NOT NULL,
	`is_driver` bool NOT NULL DEFAULT false,
	`star` numeric(2,1) NOT NULL DEFAULT '0',
	`vote` int NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `PreferredLocation` (
	`id` int NOT NULL,
	`location` varchar(255) NOT NULL,
	PRIMARY KEY (`id`,`location`)
);

CREATE TABLE `OrderHistory` (
	`id_order` int NOT NULL AUTO_INCREMENT,
	`id_customer` int NOT NULL,
	`id_driver` int NOT NULL,
	`rating` int(1) NOT NULL,
	`feedback` TEXT NOT NULL,
	`order_date` DATE NOT NULL,
	`hidden_c` bool NOT NULL,
	`hidden_d` bool NOT NULL,
	PRIMARY KEY (`id_order`)
);

ALTER TABLE `PreferredLocation` ADD CONSTRAINT `PreferredLocation_fk0` FOREIGN KEY (`id`) REFERENCES `User`(`id`);

ALTER TABLE `OrderHistory` ADD CONSTRAINT `OrderHistory_fk0` FOREIGN KEY (`id_customer`) REFERENCES `User`(`id`);

ALTER TABLE `OrderHistory` ADD CONSTRAINT `OrderHistory_fk1` FOREIGN KEY (`id_driver`) REFERENCES `User`(`id`);

