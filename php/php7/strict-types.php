<?php

declare(strict_types=1);

function calcTotal(float $price, float $shipping): float {
    return $price + $shipping;
}

$calcTotal = calcTotal('1.23', 4.56);

var_dump($calcTotal);
