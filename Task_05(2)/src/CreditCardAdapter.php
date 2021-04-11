<?php

namespace App;

use App\CreditCard;
use App\PaymentAdapterInterface;

class CreditCardAdapter implements PaymentAdapterInterface
{
    private CreditCard $adaptee;

    public function __construct(CreditCard $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function collectMoney($amount): string
    {
        return $this->adaptee->authorizeTransaction();
    }
}
