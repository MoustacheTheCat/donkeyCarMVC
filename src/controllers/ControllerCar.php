<?php

namespace  Application\Controllers\ControllerCar;



require_once('src/model/Car.php');


use Application\Model\Car\CarRepository;








class ControllerCar 
{
        private $carRepository = null;
        private $cars = null;
        private $car = null;
        public function __construct()
        {
            $this->carRepository = new CarRepository();
            $this->cars = $this->carRepository->getCars();
        }

        public function print ()
        {
            require('templates/PageHome.php');
        }
    
        public function getCars()
        {
            
            return $this->cars;
        }
    
        public function getCarById($id)
        {

            require('templates/PageHome.php');
            $this->car = $this->carRepository->getCarById($id);
            return $this->car;
        }
    
        public function getCarByBrand($brand)
        {
            $car = $this->carRepository->getCarByBrand($brand);
            return $car;
        }
    
        public function getCarByType($type)
        {
            $car = $this->carRepository->getCarByType($type);
            return $car;
        }
    
        public function getCarByYear($year)
        {
            $car = $this->carRepository->getCarByYear($year);
            return $car;
        }
    
        public function getCarByTarifHour($tarifHour)
        {
            $car = $this->carRepository->getCarByTarifHour($tarifHour);
            return $car;
        }
    
        public function getCarByTarifDay($tarifDay)
        {
            $car = $this->carRepository->getCarByTarifDay($tarifDay);
            return $car;
        }
    
        public function getCarByCaution($caution)
        {
            $car = $this->carRepository->getCarByCaution($caution);
            return $car;
        }
    
        public function getCarByBrandAndType($brand, $type)
        {
            $car = $this->carRepository->getCarByBrandAndType($brand, $type);
            return $car;
        }
    
        public function getCarByBrandAndYear($brand, $year)
        {
            $car = $this->carRepository->getCarByBrandAndYear($brand, $year);
            return $car;
        }
    
        public function getCarByBrandAndTarifHour($brand, $tarifHour)
        {
            $car = $this->carRepository->getCarByBrandAndTarifHour($brand, $tarifHour);
            return $car;
        }
    
        public function getCarByBrandAndTarifDay($brand, $tarifDay)
        {
            $car = $this->carRepository->getCarBy;
        }
        public function getCarByBrandAndCaution($brand, $caution)
        {
            $car = $this->carRepository->getCarByBrandAndCaution($brand, $caution);
            return $car;
        }
        

    
}