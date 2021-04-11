<?php

namespace App;

use App\HotelRoom;
use App\AdditionalServices;

class BreakfastBuffet extends AdditionalServices
{
    private static float $price = 500;

    public function getDescription(): string
    {
        return $this->hotelRoom->getDescription() . ", завтрак \"шведский стол\"";
    }

    public function getPrice(): float
    {
        return $this->hotelRoom->getPrice() + self::$price;
    }
}
