<?php

class Dog implements Communicative
{
    public function speak(): string
    {
        return 'woof woof';
    }
}