<?php

class Square implements ShapeArea
{
    protected int $edge;

    public function __construct(int $edge)
    {
        $this->edge = $edge;
    }

    public function shapeArea(): int
    {
        return $this->edge ** 2;
    }
}
