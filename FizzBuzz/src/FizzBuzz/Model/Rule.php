<?php
namespace FizzBuzz\Model;

class Rule
{
    private $factor;
    private $output;

    private function __construct($factor, $output)
    {
        $this->factor = $factor;
        $this->output = $output;
    }

    public static function fromFactorAndOutput($factor, $output) 
    {
        return new self($factor, $output);
    }

    public function output($input)
    {
        if ($this->isFactorOf($input)) {
            return $this->output;
        }

        return '';
    }

    private function isFactorOf($input)
    {
        if ($input % $this->factor === 0) {
            return true;
        }

        return false;
    }
}
