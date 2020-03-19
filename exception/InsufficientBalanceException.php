<?php
class InsufficientBalanceException extends Exception 
{
    public function __construct($message, $code = null, $exception = null) 
    {
        parent::__construct($message, $code = null, $exception = null);
    }
}