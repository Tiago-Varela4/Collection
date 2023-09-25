CREATE DATABASE IF NOT EXISTS collection;

USE collection;

DROP TABLE IF EXISTS `shows`;

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres`(
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar (255),
PRIMARY KEY (`id`) 
);
 

CREATE TABLE `shows` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `genre` int(11) unsigned,
 `name` varchar (255),
 `release year` int,
 PRIMARY KEY (`id`), 
 CONSTRAINT `fk_genres` FOREIGN KEY (`genre`) REFERENCES `genres`(`id`)
 );
 
 
 INSERT INTO `genres` (`id`, `name`) VALUES (1, 'Action');
 INSERT INTO `genres` (`id`, `name`) VALUES (2, 'Fantasy');
 INSERT INTO `genres` (`id`, `name`) VALUES (3, 'Comedy');
 INSERT INTO `genres` (`id`, `name`) VALUES (4, 'Romance');
 INSERT INTO `genres` (`id`, `name`) VALUES (5, 'Adventure');
 
 
 INSERT INTO `shows` (id, `genre`, `name`, `release year`) VALUES (1, 1, 'S.W.A.T', 2017);
 INSERT INTO `shows` (id, `genre`, `name`, `release year`) VALUES (2, 2, 'The Wheel of Time', 2021);
 INSERT INTO `shows` (id, `genre`, `name`, `release year`) VALUES (3, 1, 'Burn Notice', 2007);
 INSERT INTO `shows` (id, `genre`, `name`, `release year`) VALUES (4, 3, 'How I Met Your Mother', 2005);
 INSERT INTO `shows` (id, `genre`, `name`, `release year`) VALUES (5, 4, 'My Love From Another Star', 
2013);
 INSERT INTO `shows` (id, `genre`, `name`, `release year`) VALUES (6, 5, 'Leverage', 2008);
 
 
