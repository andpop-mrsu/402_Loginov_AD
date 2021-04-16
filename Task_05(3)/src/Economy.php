<?php

namespace App;

use App\HotelRoom;

class Economy implements HotelRoom
{
    private static float $price = 1000;
    private static string $description = "Эконом";

    public function getDescription(): string
    {
        return "Класс: " . self::$description;
    }

    public function getPrice(): float
    {
        return self::$price;
    }
}
