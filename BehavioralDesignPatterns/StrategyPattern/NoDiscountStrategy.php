<?php
require_once('IPromoteStrategy.php');

class NoDiscountStrategy implements IPromoteStrategy
{

    public function doDiscount(float $price)
    {
        return $price;
    }

    public function getClass()
    {
        return get_class($this);
    }
}