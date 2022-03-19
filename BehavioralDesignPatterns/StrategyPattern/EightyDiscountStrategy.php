<?php
require_once "IPromoteStrategy.php";

class EightyDiscountStrategy implements IPromoteStrategy
{

    public function doDiscount(float $price)
    {
        return $price * 0.80;
    }

    public function getClass()
    {
        return get_class($this);
    }
}