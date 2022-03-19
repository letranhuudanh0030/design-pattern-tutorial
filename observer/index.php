<?php
interface Subject
{
    public function attach($observable);
    public function detach($index);
    public function notify();
}

interface Observer
{
    public function handle();
}

class Login implements Subject
{

    protected $observers = [];

    public function attach($observable)
    {
        if(is_array($observable)){
            $this->attachObservers($observable);
            return;
        }
        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    private function attachObservers($observable){
        foreach($observable as $observer){
            if(!$observer instanceof Observer)
                throw new Exception;

            $this->attach($observer);
        }
    }

    public function fire()
    {
        $this->notify();
    }
}

class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('log something important');
    }
}

class EmailNotifier implements Observer
{
    public function handle()
    {
        var_dump('fire off an email.');
    }
}

class LoginReporter implements Observer
{
    public function handle()
    {
        var_dump('do something form of reporting.');
    }
}

$login = new Login();
$login->attach([
    new LogHandler,
    new EmailNotifier,
    new LoginReporter
]);

$login->fire();
