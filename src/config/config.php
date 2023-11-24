<?php

// GLOBALS VARIABLES FOR DATABASE
define('DB_DSN', 'mysql:host=localhost; dbname=donkeyCar;');
define('DB_USER', 'adminDbDonkeyCar');
define('DB_PASS', 'password');
define('DB_OPTIONS', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// GLOBALS VARIABLES FOR TABLES
define('DB_TABLE_U', 'users');
define('DB_TABLE_CA', 'cars');
define('DB_TABLE_MA', 'markets');
define('DB_TABLE_ME', 'messages');
define('DB_TABLE_B', 'brands');
define('DB_TABLE_T', 'typeCars');
define('DB_TABLE_L', 'Locations');
define('DB_TABLE_UME', 'userMessage');
define('DB_TABLE_LM', 'locationMarket');
define('DB_TABLE_UMA', 'userMarket');
define('DB_TABLE_LCA', 'LocationCar');
define('DB_TABLE_CO', 'countrys');


// GLOBALS VARIABLES FOR PATH

//ROOT
define('PATH_ROOT', dirname(__DIR__));
// IN ROOT
define('PATH_SRC', PATH_ROOT . '/src');
define('PATH_TEMPLATES', PATH_ROOT . '/templates');
define('PATH_IMG', PATH_ROOT . '/img');
define('PATH_CSS', PATH_ROOT . '/css');
define('PATH_JS', PATH_ROOT . '/js');
define('PATH_VENDOR', PATH_ROOT . '/vendor');
// IN SRC
define('PATH_CONFIG', PATH_SRC . '/config');
define('PATH_CONTROLLERS', PATH_SRC . '/controllers');
define('PATH_MODELS', PATH_SRC . '/models');
define('PATH_LIB', PATH_SRC . '/lib');

define('URL', $_SERVER['REQUEST_URI']);


