<?php
require_once('IPromoteStrategy.php');

class Ticket
{
    private IPromoteStrategy $_promoteStrategy;
    private float $_price;
    private string $_name;

    /**
     * @return IPromoteStrategy
     */
    public function getPromoteStrategy(): IPromoteStrategy
    {
        return $this->_promoteStrategy;
    }

    /**
     * @param IPromoteStrategy $_promoteStrategy
     */
    public function setPromoteStrategy(IPromoteStrategy $_promoteStrategy): void
    {
        $this->_promoteStrategy = $_promoteStrategy;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->_price;
    }

    /**
     * @param float $_price
     */
    public function setPrice(float $_price): void
    {
        $this->_price = $_price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param string $_name
     */
    public function setName(string $_name): void
    {
        $this->_name = $_name;
    }

    public function __construct(IPromoteStrategy $promoteStrategy = null)
    {
        if ($promoteStrategy) {
            $this->_promoteStrategy = $promoteStrategy;
        }
    }


    public function getPromotedPrice(): float
    {
        return $this->_promoteStrategy->doDiscount($this->_price);
    }

    public function getClass()
    {
        echo $this->_promoteStrategy->getClass();
    }

}