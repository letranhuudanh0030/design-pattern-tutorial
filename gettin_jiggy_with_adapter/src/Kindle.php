<?php

namespace Acme;

use Acme\EReaderInterface;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        d('turn the kindle on');
    }
    public function pressNextButton()
    {
        d('press the next button on the kindle');
    }
}
