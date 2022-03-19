<?php

abstract class Subject
{
    protected array $observers;

    public function attach($observable)
    {
        if (is_array($observable)) {
            $this->attachObservers($observable);
            return;
        }
        $this->observers[] = $observable;

        return $this;
    }

    public function detach($observable)
    {
        $index = array_search($observable, $this->observers);
        unset($this->observers[$index]);
    }

    public function notify($obj)
    {

        foreach ($this->observers as $observer) {
            $observer->handle($obj);
        }
    }

    private function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer)
                throw new Exception;

            $this->attach($observer);
        }
    }
}