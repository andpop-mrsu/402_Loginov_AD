<?php

namespace App;

class Luxury implements HotelRoom
{
    private static float $price = 3000;
    private static string $description = "Люкс";

    public function getDescription(): string
    {
        return "Класс: " . self::$description;
    }

    public function getPrice(): float
    {
        return self::$price;
    }
}