<?php
    $ajax = false;
    require_once ('./core/functions.php');

    class install extends functions{
        public function install_db(){
            functions::query("CREATE TABLE IF NOT EXISTS `list` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `coin` VARCHAR(30) NOT NULL,
                `name` VARCHAR(100) NOT NULL,
                `wallet` VARCHAR(30) NOT NULL,
                `time` INT(10) NOT NULL,
                `reward` INT(20) NOT NULL,
                `type` VARCHAR(50) NOT NULL,
                `sl` VARCHAR(50) NOT NULL,
                `link` VARCHAR(50) NOT NULL,
                `date` DATETIME NOT NULL,
                PRIMARY KEY(`id`)
            )ENGINE = InnoDB;");

            functions::query("CREATE TABLE IF NOT EXISTS `top_list` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `coin` VARCHAR(30) NOT NULL,
                `name` VARCHAR(100) NOT NULL,
                `wallet` VARCHAR(30) NOT NULL,
                `time` INT(10) NOT NULL,
                `reward` INT(20) NOT NULL,
                `type` VARCHAR(50) NOT NULL,
                `sl` VARCHAR(50) NOT NULL,
                `link` VARCHAR(50) NOT NULL,
                `date` DATETIME NOT NULL,
                PRIMARY KEY(`id`)
            )ENGINE = InnoDB;");
        }
    }

    $install = new install();
    $install->install_db();

    
?>