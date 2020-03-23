<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


use Validation;
use CheckingAccount;

$johnAccount = new CheckingAccount('John', 1010, '1010-10', 2000.00);
$mariaAccount = new CheckingAccount('Maria', 5050, '5050-10', 3000.00);
$johnAccount->deposit(100);

echo PHP_EOL;
try { 
	$johnAccount->transfer(true, $mariaAccount);
} catch(\exception\InsufficientBalanceException $e) {
	$johnAccount->withdrawalsNotAlloweds++;
	echo $e->getMessage() . " | Balance into account: " . $e->balance . " | Value of withdraw: " . $e->value ;
} catch(\exception\OperationNotRealizedException $e) {
	echo $e->getMessage();	

} catch(\Exception $e) {
		//echo $e->getPrevious()->getMessage();
		echo $e->getPrevious()->getTraceAsString();

}

echo PHP_EOL;

echo "Operations not realizeds: " . CheckingAccount::$operationNotRealized;

var_dump($johnAccount);

