<?php

class Car {
    protected $driver;
    
    public function __construct(Driver $driver)
    {
    $this -> driver = $driver;
    }
    public function getDriver()
    {
    return $this -> driver;
    }
    }


    // The constructor sets the value of the $driver. The $driver in the constructor is a parameter, 
    //but it has been type hinted with Driver which means it is expecting an object of type driver
    // The Car class gets the driver object injected to its constructor
