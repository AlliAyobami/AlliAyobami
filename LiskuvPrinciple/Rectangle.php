<?php
class Rectangle implements ShapeArea
{
    protected int $width;
    protected int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function shapeArea(): int
    {
        return $this->width * $this->height;
    }
}