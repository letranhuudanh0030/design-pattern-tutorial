<?php
require_once('IPromoteStrategy.php');

class QuarterDiscountStrategy implements IPromoteStrategy
{

    public function doDiscount(float $price)
    {
        return $price * 0.75;
    }


    public function getClass()
    {
        return get_class($this);
    }
}