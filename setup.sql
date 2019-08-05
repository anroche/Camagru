CREATE DATABASE camagru_anroche;
USE camagru_anroche;
CREATE TABLE IF NOT EXISTS `users` (
                                id INT NOT NULL AUTO_INCREMENT,
                                login VARCHAR(32) NOT NULL,
                                password VARCHAR(255) NOT NULL,
                                email VARCHAR(128) NOT NULL,
                                active INT NULL,
                                PRIMARY KEY(id)
                                );
CREATE TABLE `camagru_anroche`.`image` (
                                `id` INT NOT NULL AUTO_INCREMENT,
                                `id_user` INT NOT NULL,
                                `login` VARCHAR(32) NOT NULL,
                                `appreciate` INT NULL DEFAULT NULL,
                                `path` TEXT NOT NULL,
                                    PRIMARY KEY (`id`)
                                );
CREATE TABLE `comment` (
                                `id` int NOT NULL AUTO_INCREMENT,
                                `id_img` int NOT NULL,
                                `login` varchar(32) NOT NULL,
                                `id_user` int NOT NULL,
                                `cmmnt` text,
                                    PRIMARY KEY (`id`)
                                );
		
	
