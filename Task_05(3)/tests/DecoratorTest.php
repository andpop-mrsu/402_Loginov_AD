<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Economy;
use App\Standard;
use App\DedicatedInternet;
use App\FoodDelivery;
use App\Dinner;

class DecoratorTest extends TestCase
{
    public function testDecorator(): void
    {
        $hotelRoom1 = new Economy();
        $hotelRoom1 = new DedicatedInternet($hotelRoom1);
        $hotelRoom1 = new Dinner($hotelRoom1);
        self::assertSame("Класс: Эконом, выделенный Интернет, ужин", $hotelRoom1->getDescription());
        self::assertSame(1900.0, $hotelRoom1->getPrice());
        $hotelRoom2 = new Standard();
        $hotelRoom2 = new FoodDelivery($hotelRoom2);
        self::assertSame("Класс: Стандарт, доставка еды в номер", $hotelRoom2->getDescription());
        self::assertSame(2300.0, $hotelRoom2->getPrice());
    }
}
