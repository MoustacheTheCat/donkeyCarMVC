<?php

namespace  Application\Controllers\ControllerHome;


require_once('src/lib/DataBaseConnection.php');
require_once('src/model/Car.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Car\CarRepository;
use Application\Model\Car\Car;

class Homepage {

    public static function execute()
    {
        require('templates/PageHome.php');
    }

}
