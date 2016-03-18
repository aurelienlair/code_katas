<?php
namespace FizzBuzz\Model;

class PositiveIntegerValidator implements BaseValidator
{
    public function isValid($input)
    {
        if ((is_int($input) || ctype_digit($input)) && (int)$input>= 0) { 
            return true;
        }

        return false;
    } 
}
