<?php

interface IPromoteStrategy
{
    public function doDiscount(float $price);

    public function getClass();

}