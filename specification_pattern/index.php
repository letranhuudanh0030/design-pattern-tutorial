<?php 
class CustomerIsGold {

    public function isStatisfiedBy(Customer $customer)
    {
        $customer->type == 'gold';
    }
}

