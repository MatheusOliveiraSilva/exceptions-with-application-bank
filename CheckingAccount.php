<?php
class CheckingAccount {

	private $holder;
	public $agency;
	private $number;
	private $balance;

	public function __construct($holder, $agency, $number, $balance) 
	{
		$this->holder = $holder;
		$this->agency = $agency;
		$this->number = $number;
		$this->balance = $balance;

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
