<?php

namespace Tests\FractionTest;

use App\Fraction;
use PHPUnit\Framework\TestCase;

class FractionTest extends TestCase
{
    public function test_construct_checkingFraction_isPositive(): void
    {
        $fraction = new Fraction(2, 4);

        self::assertEquals("1/2", $fraction);
    }

    public function test_add_addingTwoFractions_isPositive(): void
    {
        $fraction1 = new Fraction(6, 4);
        $fraction2 = new Fraction(1, 4);

        self::assertEquals("1'3/4", $fraction1->add($fraction2));
    }

    public function test_sub_subtractingOneFractionAnother_isPositive(): void
    {
        $fraction1 = new Fraction(2, 4);
        $fraction2 = new Fraction(1, 4);

        self::assertEquals("1/4", $fraction1->sub($fraction2));
    }
}