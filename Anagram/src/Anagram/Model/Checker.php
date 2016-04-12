<?php
namespace Anagram\Model;

class Checker
{
    private $primeNumbers = [
        2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
        41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83,
        89, 97, 101
    ];

    private $englishAlphabet = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
        'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 
        's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];

    public function areAnagrams(Word $firstWord, Word $secondWord)
    {
        $sumFirstWord = 0;
        foreach ($firstWord->letters() as $letter) {
            $sumFirstWord += $this->primeNumbers[array_search($letter, $this->englishAlphabet)];
        }

        $sumSecondWord = 0;
        foreach ($secondWord->letters() as $letter) {
            $sumSecondWord += $this->primeNumbers[array_search($letter, $this->englishAlphabet)];
        }

        return $sumFirstWord === $sumSecondWord;
    }
}
