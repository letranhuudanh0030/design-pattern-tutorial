<?php

namespace Acme;

use Acme\BookInterface;

class Book implements BookInterface
{
    public function open()
    {
        d('opening the paper book.');
    }

    public function turnPage()
    {
        d('turning the page of the paper book.');
    }
}
