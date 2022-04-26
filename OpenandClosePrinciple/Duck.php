<?php
class Duck implements Communicative
{
    public function speak(): string
    {
        return 'quack quack';
    }
}