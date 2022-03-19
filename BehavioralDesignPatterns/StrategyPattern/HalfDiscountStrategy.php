<?php
require_once('IPromoteStrategy.php');

class HalfDiscountStrategy implements IPromoteStrategy
{

    public function doDiscount(float $price)
    {
        return $price * 0.5;
    }

    public function getClass()
    {
        return get_class($this);
    }
}