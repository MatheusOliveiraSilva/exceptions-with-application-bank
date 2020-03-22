<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'autoload.php';

use Validation;
use CheckingAccount;

$johnAccount = new CheckingAccount('John', 1010, '1010-10', 2000.00);

$johnAccount->deposit(100);


echo PHP_EOL;

try { 
	$johnAccount->withdraw(99999);
} catch(\exception\InsufficientBalanceException $e) {
	$johnAccount->withdrawalsNotAlloweds++;
	echo $e->getMessage();
} catch(Exception $e) {
	echo $e->getMessage();	
}

echo PHP_EOL;
var_dump($johnAccount);