<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/5/15
 * Time: 12:26 PM
 */
//die('DS Test module setup');

$installer = $this;
$installer->startSetup();
$installer->run("CREATE TABLE ds_test_entities (
        `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL,
        `descript` TEXT NOT NULL,

        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup();