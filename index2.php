<?php

class Person
{
    public $name;
    public $email;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function setEmail($email)
    {
        $this->name = $email;
    }

    function getName()
    {
        return "Name: {$this->name}\n";
    }
    function getEmail()
    {
        return "Email: {$this->email}";
    }
}

$person = new Person("MD. Anwar Sayeed Saif Kader", "anwar.saeed656@gmail.com");
echo $person->getName();
echo $person->getEmail();