<?php
class CheckingAccount {

	private $holder;
	public $agency;
	private $number;
	private $balance;
	public static $totalOfAccounts;
	public static $operationTax;

	public function __construct($holder, $agency, $number, $balance) 
	{
		$this->holder = $holder;
		$this->agency = $agency;
		$this->number = $number;
		$this->balance = $balance;

		try {
			self::$operationTax = intDiv(30, self::$totalOfAccounts);
		} catch(Error $e) {
			echo "It's not possible to divide by 0";
			exit;
		}

		self::$totalOfAccounts++;

	}

	public function __get($attribute)
	{
		Validation::protectAttribute($attribute);
		return $this->$attribute;
	}
	
	public function __set($attribute, $value)
	{

		Validation::protectAttribute($attribute);
		$this->$attribute = $value;
	}

	public function withdraw($value) 
	{
		Validation::verifyNumeric($value);
		$this->saldo = $this->saldo - $valor;
		return $this;
	}


	public function deposit($value) 
	{
		Validation::verifyNumeric($value);
		$this->saldo = $this->saldo + $valor;
		return $this;
	}

	public function formatBalance() 
	{
		return "R$" . number_format($this->saldo, 2, ",", ".");
	}

	public function __toString()
	{
		return $this->saldo;
	}

	public function setNumber($number) 
	{
		return $this->number;
	}


	public function getHolder()
	{
		return $this->holder;
	}

	public function getBalance()
	{
		return $this->formatBalance();
	}
}
