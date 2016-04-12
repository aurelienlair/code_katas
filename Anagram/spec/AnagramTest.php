<?php
namespace Anagram;
use Anagram\Model\Checker;
use Anagram\Model\Word;

class AnagramTest extends \PHPUnit_Framework_TestCase
{
    public function testDogIsAnAnagramOfGod()
    {
        $anagramChecker = new Checker();
        $this->assertTrue(
            $anagramChecker->areAnagrams(
                Word::fromString('dog'), 
                Word::fromString('god')
            )
        );
    }

    public function testViewersIsAnAnagramOfReviews()
    {
        $anagramChecker = new Checker();
        $this->assertTrue(
            $anagramChecker->areAnagrams(
                Word::fromString('viewers'), 
                Word::fromString('reviews')
            )
        );
    }

    public function testProgrammerIsNotAnAnagramOfGeek()
    {
        $anagramChecker = new Checker();
        $this->assertFalse(
            $anagramChecker->areAnagrams(
                Word::fromString('programmer'), 
                Word::fromString('geek')
            )
        );
    }
}
