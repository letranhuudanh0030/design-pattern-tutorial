<?php

class CustomerIsGoldTest extends PHPUnit_Framework_TestCase{

    /** @test */
    function test_a_customer_is_gold_if_they_have_respective_type()
    {
        $specification = new CustomerIsGold;
        $goldCustomer = new Customer(['type' => 'gold']);
        $silverCustomer = new Customer(['type' => 'silver']);
        $this->assertTrue($specification->isStatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isStatisfiedBy($silverCustomer));
    }
}
