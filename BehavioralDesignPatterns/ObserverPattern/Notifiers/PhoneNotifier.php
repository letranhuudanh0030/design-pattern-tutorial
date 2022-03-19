<?php
require_once "./Base/Observer.php";
require_once "./Base/Subject.php";

class PhoneNotifier implements Observer
{
    public function __construct(Subject $subject = null)
    {
        if ($subject) {
            $subject->attach($this);
        }
    }

    public function handle($obj)
    {
        print "
        \n
        Notify all subscribers via PHONE with new data
            \n\tName: {$obj->getTitle()}
            \n\tDescription: {$obj->getDescription()}
            \n\tFile Name: {$obj->getFileName()}
        ";
    }
}