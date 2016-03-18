<?php
namespace FizzBuzz\Model;

class FizzBuzz
{
    private $rules = [];
    private $validators = [];

    public function __construct(array $rules, array $validators)
    {
        $this->rules = $rules;
        $this->validators = $validators;
    }

    public function play($input)
    {
        foreach ($this->validators as $validator) {
            if (!$validator->isValid($input)) {
                throw new \InvalidArgumentException(
                    $input . ' is not a valid number'
                );
            }
        }

        $output = '';

        foreach ($this->rules as $rule) {
            $output .= $rule->output($input);
        }

        if (strlen($output)) {
            return $output;
        }

        return $input;
    }
}
