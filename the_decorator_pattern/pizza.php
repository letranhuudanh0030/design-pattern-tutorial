<?php


interface IPizza
{
    public function doPizza();
}

class Pizza implements IPizza
{
    public function doPizza()
    {
        return 'I am a Pizza';
    }
}

class TomatoDecorator implements IPizza
{
    protected $ipizza;

    function __construct(IPizza $ipizza)
    {
        $this->ipizza = $ipizza;
    }

    public function doPizza()
    {
        return $this->ipizza->doPizza() . ' + Tomato';
    }
}

class CheeseDecorator implements IPizza
{
    protected $ipizza;

    function __construct(IPizza $ipizza)
    {
        $this->ipizza = $ipizza;
    }

    public function doPizza()
    {
        return $this->ipizza->doPizza() . ' + Cheese';
    }
}

class PepperDecorator implements IPizza
{
    protected $ipizza;

    function __construct(IPizza $ipizza)
    {
        $this->ipizza = $ipizza;
    }

    public function doPizza()
    {
        return $this->ipizza->doPizza() . ' + Pepper';
    }
}

$pizza = new TomatoDecorator(new PepperDecorator(new CheeseDecorator(new Pizza)));

echo $pizza->doPizza();
