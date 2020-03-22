<?php
namespace exception;

class InsufficientBalanceException extends \Exception 
{
    private $value;
    private $balance;

    public function __construct($message, $value, $balance) 
    {
        $this->value = $value;
        $this->balance = $balance;

        parent::__construct($message, null, null);
    }

    public function __get($param)
    {
        return $this->$param;
    }
}