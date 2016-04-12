<?php
namespace Anagram\Model;

final class Word
{
    private $letters;

    private function __construct(array $letters)
    {
        $this->letters = $letters;
    }  

    public static function fromString($string)
    {
        return new self(
            str_split($string)
        );
    }

    public function letters()
    {
        return $this->letters; 
    }

    public function numberOfLetters()
    {
        return count($this->letters); 
    }
}
