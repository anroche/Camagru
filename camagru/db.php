<?php
	function connect()
	{
		try {
            $connexion = new PDO(
                "mysql:host=db;dbname=camagru_anroche",
                "root",
				"test"
            );
			return $connexion;
		} catch (Exception $err) {
			die('Erreur : ' . $err->getMessage());
		}
	}
	function init()
	{
		$db = connect();
		$db->query("CREATE DATABASE IF NOT EXISTS camagru_anroche;");
		// $db->query("USE camagru_anroche");
		$db->query("CREATE TABLE IF NOT EXISTS users (
										`id` INT NOT NULL AUTO_INCREMENT,
										`login` VARCHAR(32) NOT NULL,
										`password` VARCHAR(255) NOT NULL,
										`email` VARCHAR(128) NOT NULL,
										`active` INT NULL,
										`code_activation` VARCHAR(128),
										PRIMARY KEY(id)
										)");
		$db->query("CREATE TABLE IF NOT EXISTS `image` ( 
										`id` INT NOT NULL AUTO_INCREMENT,
										`id_user` INT NOT NULL,
										`login` VARCHAR(32) NOT NULL,
										`appreciate` INT NULL DEFAULT NULL,
										`path` TEXT NOT NULL,
										 PRIMARY KEY (`id`)
										)");
		$db->query("CREATE TABLE IF NOT EXISTS `comment` (
  										`id` int NOT NULL AUTO_INCREMENT,
 										`id_img` int NOT NULL,
										`login` varchar(32) NOT NULL,
  										`id_user` int NOT NULL,
  										`cmmnt` text,
  										 PRIMARY KEY (`id`)
										)");
		
	}
	init()
?>
