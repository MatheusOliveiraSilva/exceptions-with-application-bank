<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Validation.php';
require 'CheckingAccount.php';
$johnAccount = new CheckingAccount('John', 1010, '1010-10', 2000.00);

$mariaAccount = new CheckingAccount('Maria', 2010, '4410-10', 20000.00);


$josephAccount = new CheckingAccount('Joseph', 2810, '5510-10', 45000.00);

$johnAccount->deposit(100);


echo PHP_EOL;

try { 
	$johnAccount->withdraw(99999);
} catch(Exception $e) {
	echo $e->getMessage();
}
