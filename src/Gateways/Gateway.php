<?php

namespace DoubleThreeDigital\SimpleCommerce\Gateways;

interface Gateway
{
    public function completePurchase($data);

    public function rules(): array;

    public function paymentForm();

    public function refund($payment);

    public function name(): string;
}
