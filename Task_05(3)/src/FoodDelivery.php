<?php

namespace App;

use App\HotelRoom;
use App\AdditionalServices;

class FoodDelivery extends AdditionalServices
{
    private static float $price = 300;

    public function getDescription(): string
    {
        return $this->hotelRoom->getDescription() . ", доставка еды в номер";
    }

    public function getPrice(): float
    {
        return $this->hotelRoom->getPrice() + self::$price;
    }
}
