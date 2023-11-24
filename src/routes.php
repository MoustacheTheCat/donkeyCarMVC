<?php


namespace Moustache\NewDonkeyCar\r\www\html\newDonkeyCar\src;

require_once('config/config.php');
require_once('controllers/ControllerHome.php');
require_once('controllers/ControllerCar.php');

use Application\Controllers\ControllerCar\ControllerCar;
use Application\Controllers\ControllerHome\Homepage;



if(URL == '/'){
    Homepage::execute();
    
}

