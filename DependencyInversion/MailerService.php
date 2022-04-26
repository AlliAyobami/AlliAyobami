<?php

class MailerService
{
    private LoggerInterface $logger;
 
    public function sendEmail()
    {
        try {
            // ..
        } catch (SomeException $exception) {
            $this->logger->logError($exception->getMessage());
        }
    }
}