<?php
require_once (__DIR__ . '/DB.php');
$db = new DB();

$sql = "CREATE TABLE IF NOT EXISTS `article` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`text` TEXT NOT NULL,
	`updated_at` TIMESTAMP NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`title` VARCHAR(254) NOT NULL DEFAULT '',
	`img` VARCHAR(254) NOT NULL DEFAULT '',
	`price` FLOAT NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `id` (`id`),
	UNIQUE INDEX `title` (`title`)
)
ENGINE=InnoDB ;
";
$db->connect($sql);
?>