<?php
require ('Zend/Loader/Autoloader.php');
Zend_Loader_Autoloader::getInstance();

$config = new Zend_Config_Ini('config.ini','database');
$cdcol = Zend_Db::factory($config->adapter,$config->params);
$cdcol->getConnection();
$cdcol->setFetchMode(Zend_Db::FETCH_OBJ);