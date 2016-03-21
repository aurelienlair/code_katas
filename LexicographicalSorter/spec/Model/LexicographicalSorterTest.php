<?php
namespace LexicographicalSorter\Model;
use LexicographicalSorter\UI\Items;

class LexicographicalSorterTest extends \PHPUnit_Framework_TestCase
{
    private $lexicographicalSorter;

    public function setUp()
    {
        $this->lexicographicalSorter = new LexicographicalSorter();
    }

    public function testWithGoodItemsICanRetrieveSortedWords()
    {
        $input = <<<EOT
1
This is a sample piece of text to illustrate this problem
EOT;

        $this->assertEquals(
            $this->expectedOutput(),
            $this->lexicographicalSorter->sort($this->items($input))
        );
    }

    public function testWithGoodItemsOn2LinesICanRetrieveSortedWords() 
    {
        $input = <<<EOT
2
This is a sample piece of text to illustrate this
problem
EOT;

        $this->assertEquals(
            $this->expectedOutput(),
            $this->lexicographicalSorter->sort($this->items($input))
        );
    }

    private function items($input)
    {
        return new Items($input);
    }
    
    private function expectedOutput()
    {
        return [
            '10', 'a', 'illustrate', 'is',
            'of', 'piece', 'problem',
            'sample', 'text', 'this', 'to'
        ];
        
    }  
}
