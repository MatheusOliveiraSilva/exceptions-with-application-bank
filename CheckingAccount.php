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


}
