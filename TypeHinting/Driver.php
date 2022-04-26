<?php

interface Driver {
    public function sayYourName($name);
    }

// NOTE: With this interface, we can have other classes who needs this method accept and follow it. 
// The Driver interface will give room to diffrent types of drivers 