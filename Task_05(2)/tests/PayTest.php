<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PayPal;
use App\CreditCard;
use App\PayPalAdapter;
use App\CreditCardAdapter;

class PayTest extends TestCase
{
    public function testAdapters(): void
    {
        $paypal = new PayPal('customer@aol.com', 'password');
        $cc = new CreditCard(1234567890123456, "09/22");
        $paypalAdapter = new PayPalAdapter($paypal);
        $ccAdapter = new CreditCardAdapter($cc);
        self::assertSame("Authorization code:", $ccAdapter->collectMoney(1340));
        self::assertSame("PayPal Success!", $paypalAdapter->collectMoney(100));
    }
}
