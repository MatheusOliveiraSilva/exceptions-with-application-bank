<?php
namespace exception;

class OperationNotRealizedException extends \Exception 
{
    private $value;
    private $balance;

    public function __construct($message, $code, $ex) 
    {
        parent::__construct($message, $code, $ex);
    }

    public function __toString()
    {
        return $this->getCode() . ": " . $this->getMessage();
    }
}