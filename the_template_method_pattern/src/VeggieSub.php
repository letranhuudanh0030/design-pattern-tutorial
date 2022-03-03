<?php

namespace App;

class VeggieSub extends Sub
{


    public function addPrimaryTopping()
    {
        var_dump('add some veggies');
        return $this;
    }
}
