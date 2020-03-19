<?php

class Validation
{
	public static function protectAttribute($attribute)
	{
		if($attribute == 'holder' || $attribute == 'balance') {
			throw new Exception("The attribute {$attribute} is private");

		}

	}

	public static function verifyNumeric($value) 
	{
		if(!is_numeric($value)) {
			throw new InvalidArgumentException("The value is not numeric");
		}
	}
}
