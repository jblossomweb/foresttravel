# MySQL 1: Create a database with the following:
CREATE SCHEMA `blossom` ;
CREATE TABLE `blossom`.`table` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(45) NOT NULL,
  `value` VARCHAR(45) NOT NULL,
  `timestamp` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`));