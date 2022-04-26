<?php
class Communication
{
    public function communicate(Communicative $animal): string
    {
        return $animal->speak();
    }
}