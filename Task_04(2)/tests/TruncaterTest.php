<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Truncater;

class TruncaterTest extends TestCase
{
    public function test_Trancate(): void
    {
        $truncater1 = new Truncater();
        $truncater2 = new Truncater(['length' => 7]);
        self::assertSame("Hello...", $truncater1->truncate("Hello, World!", ['length' => 5]));
        self::assertSame("Hello, World!", $truncater1->truncate("Hello, World!"));
        self::assertSame("Hello, Wor---",
            $truncater2->truncate("Hello, World!", ['length' => 10, 'separator' => '---']));
        self::assertSame("Hello, ...", $truncater2->truncate("Hello, World!"));
    }
}
