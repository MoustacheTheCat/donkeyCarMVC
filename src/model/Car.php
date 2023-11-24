<?php

namespace Application\Model\Car;

require_once('src/lib/DataBaseConnection.php');

use Application\Lib\Database\DatabaseConnection;


class Car
{

    

    public function __construct(int $carId, string $carName, string $carYear, int $carTarifHourHT, int $carTarifDayHT, int $carCaution, int $brandId, int $typeCarId)
    {
        $this->carId = $carId;
        $this->carName = $carName;
        $this->carYear = $carYear;
        $this->carTarifHourHT = $carTarifHourHT;
        $this->carTarifDayHT = $carTarifDayHT;
        $this->carCaution = $carCaution;
        $this->brandId = $brandId;
        $this->typeCarId = $typeCarId;
    }

    

    public function getCar()
    {
        return [
            'carId' => $this->carId,
            'carName' => $this->carName,
            'carYear' => $this->carYear,
            'carTarifHourHT' => $this->carTarifHourHT,
            'carTarifDayHT' => $this->carTarifDayHT,
            'carCaution' => $this->carCaution,
            'brandId' => $this->brandId,
            'typeCarId' => $this->typeCarId
        ];
    }

    public function getCarId(): string
    {
        return $this->carId;
    }
    public function setCarId(string $carId): self
    {
        $this->carId = $carId;
        return $this;
    }
    public function getCarName(): string
    {
        return $this->carName;
    }
    public function setCarName(string $carName): self
    {
        $this->carName = $carName;
        return $this;
    }
    public function getCarYear(): string
    {
        return $this->carYear;
    }
    public function setCarYear(string $carYear): self
    {
        $this->carYear = $carYear;
        return $this;
    }
    public function getCarTarifHourHT(): int
    {
        return $this->carTarifHourHT;
    }
    public function setCarTarifHourHT(int $carTarifHourHT): self
    {
        $this->carTarifHourHT = $carTarifHourHT;
        return $this;
    }
    public function getCarTarifDayHT(): int
    {
        return $this->carTarifDayHT;
    }
    public function setCarTarifDayHT(int $carTarifDayHT): self
    {
        $this->carTarifDayHT = $carTarifDayHT;
        return $this;
    }
    public function getCarCaution(): int
    {
        return $this->carCaution;
    }
    public function setCarCaution(int $carCaution): self
    {
        $this->carCaution = $carCaution;
        return $this;
    }
    public function getBrandId(): int
    {
        return $this->brandId;
    }
    public function setBrandId(int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }
    public function getTypeCarId(): int
    {
        return $this->typeCarId;
    }
    public function setTypeCarId(int $typeCarId): self
    {
        $this->typeCarId = $typeCarId;
        return $this;
    }
}


class CarRepository {
    public $pdo = null;
    public $cars = null;
    public $car = null;
    public $datas = null;
    public $data = null;
    public $arrayCars = [];

    public function __construct ()
    {
        $this->pdo = DatabaseConnection::getDataBase();   
    }
  

    public function getCars()
    {
        
        $this->datas = $this->pdo->query('SELECT * FROM cars');
        $this->cars = $this->datas->fetchAll(\PDO::FETCH_ASSOC);

        return $this->cars;
        // $this->datas->fetchAll();
        // return $this->cars = $this->datas;
        // foreach ($this->datas as $this->data) {
        //     $this->car = new Car($this->data['carId'], $this->data['carName'], $this->data['carYear'], $this->data['carTarifHourHT'], $this->data['carTarifDayHT'], $this->data['carCaution'], $this->data['brandId'], $this->data['typeCarId']);
        //     // $this->arrayCars[$this->data['carId']] = $car->getCar();  
        //     return $this->car->getCar();
        // }
    
        
    }

    public function getCarById($id)
    {
        $this->datas = $this->pdo->query('SELECT * FROM cars WHERE carId = '.$id);
        $this->cars = $this->datas->fetchAll(\PDO::FETCH_ASSOC);
        return $this->cars;
    }
}



