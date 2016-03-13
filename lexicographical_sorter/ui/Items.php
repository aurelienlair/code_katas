<?php
namespace UI;
use InvalidArgumentException;

class Items
{
    private $allWords = [];
    private $numberOfLines;

    public function __construct($input)
    {
        if (empty($input)) {
            $this->throwException($input);
        }

        $items = explode(PHP_EOL, $input);
        $this->numberOfLines = array_shift($items);

        if (!is_numeric($this->numberOfLines) || $this->numberOfLines < 1) {
            $this->throwException($input);
        }

        foreach ($items as $index => $line) {
            $this->allWords = array_merge($this->allWords, explode(' ', $line));
        }
    }  

    public function toArray()
    {
        return $this->allWords;
    }

    private function throwException($input)
    {
        throw new InvalidArgumentException(
            var_export($input, true) . ' are not valid items'
        );
    }
}
