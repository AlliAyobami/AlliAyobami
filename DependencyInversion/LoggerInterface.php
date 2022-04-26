<?php

interface LoggerInterface
{
    public function logError(string $message): void;
}