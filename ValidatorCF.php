<?php

require_once ("Validator.php");

class ValidatorCF extends Validator
{
    public function validate()
    {
        return (preg_match('/[A-Z]{6}[0-9]{2}[A-Z]{1}[0-9]{2}[A-Z]{1}[0-9]{3}[A-Z]{1}/m', $this->value) ? true : false);
    }
}


$ValidatorCF = new ValidatorCF('AAAAAA00A00A000A');

echo $ValidatorCF->validate();
