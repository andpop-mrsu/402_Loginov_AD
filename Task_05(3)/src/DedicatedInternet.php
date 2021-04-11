<?php

namespace App;

use App\HotelRoom;
use App\AdditionalServices;

class DedicatedInternet extends AdditionalServices
{
    private static float $price = 100;

    public function getDescription(): string
    {
        return $this->hotelRoom->getDescription() . ", выделенный Интернет";
    }

    public function getPrice(): float
    {
        return $this->hotelRoom->getPrice() + self::$price;
    }
}
