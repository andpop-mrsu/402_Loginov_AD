<?php

namespace App;

class Standard implements HotelRoom
{
    private static float $price = 2000;
    private static string $description = "Стандарт";

    public function getDescription(): string
    {
        return "Класс: " . self::$description;
    }

    public function getPrice(): float
    {
        return self::$price;
    }
}