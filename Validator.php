<?php

abstract class Validator
{
    protected $value;
    public function __construct($value)
    {
        $this->value = $value;
    }

    abstract public function validate();
}
