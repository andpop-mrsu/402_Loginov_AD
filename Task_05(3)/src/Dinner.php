<?php

namespace App;

use App\HotelRoom;
use App\AdditionalServices;

class Dinner extends AdditionalServices
{
    private static float $price = 800;

    public function getDescription(): string
    {
        return $this->hotelRoom->getDescription() . ", ужин";
    }

    public function getPrice(): float
    {
        return $this->hotelRoom->getPrice() + self::$price;
    }
}
