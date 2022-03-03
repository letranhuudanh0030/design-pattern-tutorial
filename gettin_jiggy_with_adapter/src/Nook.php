<?php

namespace Acme;

use Acme\EReaderInterface;

class Nook implements eReaderInterface
{
    public function turnOn()
    {
        d('turn the Nook on');
    }
    public function pressNextButton()
    {
        d('press the next button on the Nook');
    }
}
