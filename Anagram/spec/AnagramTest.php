<?php
namespace Anagram;
use Anagram\Model\Checker;
use Anagram\Model\Word;

class AnagramTest extends \PHPUnit_Framework_TestCase
{
    private $anagramChecker;

    public function setUp()
    {
        $this->anagramChecker = new Checker();
    }

    public function testDogIsAnAnagramOfGod()
    {
        $this->assertTrue(
            $this->anagramChecker->areAnagrams(
                Word::fromString('dog'), 
                Word::fromString('god')
            )
        );
    }

    public function testViewersIsAnAnagramOfReviews()
    {
        $this->assertTrue(
            $this->anagramChecker->areAnagrams(
                Word::fromString('viewers'), 
                Word::fromString('reviews')
            )
        );
    }

    public function testProgrammerIsNotAnAnagramOfGeek()
    {
        $this->assertFalse(
            $this->anagramChecker->areAnagrams(
                Word::fromString('programmer'), 
                Word::fromString('geek')
            )
        );
    }

    public function testQAisNotAnagramOfR()
    {
        $this->assertFalse(
            $this->anagramChecker->areAnagrams(
                Word::fromString('qa'),
                Word::fromString('r')
            )
        );
    }
}
