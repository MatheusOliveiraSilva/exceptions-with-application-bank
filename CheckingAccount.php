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

		self::$totalOfAccounts++;

		try {
			if(self::$totalOfAccounts < 1) {
				throw new Exception("Valor inferior a zero");
			}
			self::$operationTax =30/ self::$totalOfAccounts;
		} catch(Exception $e) {
			echo $e->getMessage();
			exit;
		}
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

	public function transfer($value, CheckingAccount $account){                                                                                                         if(!is_numeric($value)){
		throw new InvalidArgumentException("Just numeric values are allowed");
                }

		if($value <= 0) {
			throw new Exception("The value should to be bigger than 0");
		}
                $this->sacar($valor);

                $contaCorrente->deposit($value);

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
