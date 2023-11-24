<?php

namespace Application\Model\Market;

use Application\Lib\Database\DatabaseConnection;

class Market {
    public int $marketId;
    public string $marketName;
    public string $marketCity;
    public string $marketCountry;
    public string $marketAddress;
    public string $marketZipCode;

    public function __construct(int $marketId, string $marketName, string $marketCity, string $marketCountry, string $marketAddress, string $marketZipCode)
    {
        $this->marketId = $marketId;
        $this->marketName = $marketName;
        $this->marketCity = $marketCity;
        $this->marketCountry = $marketCountry;
        $this->marketAddress = $marketAddress;
        $this->marketZipCode = $marketZipCode;
    }

    public function printMarket ()
    {
        return "Market : " . $this->marketId . " " . $this->marketName . " " . $this->marketCity . " " . $this->marketCountry . " " . $this->marketAddress . " " . $this->marketZipCode;
    }
}

class MarketRepository {
    public DatabaseConnection $connection;
    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }
    public function getAllMarkets(): array
    {
        $connection = $this->connection->getConnection();
        $statement = $connection->prepare('SELECT * FROM market');
        $statement->execute();
        $markets = $statement->fetchAll();
        return $markets;
    }
}