<?php
namespace WordSort;
require_once __DIR__ . '/../WordSort.php';

class WordSortTest extends \PHPUnit_Framework_TestCase
{
    private $wordSort=null;

    public function setUp()
    {
        $this->wordSort = new WordSort();
    }

    public function testWithGoodOptionsICanRetrieveSortedWords()
    {
        $options = <<<EOT
1
This is a sample piece of text to illustrate this problem
EOT;
        $this->assertEquals(
            'a illustrate is of piece problem sample text this to',
            $this->wordSort->sort($options)
        );
    }

    public function testWithGoodOptionsOn2LinesICanRetrieveSortedWords()
    {
        $options = <<<EOT
2
This is a sample piece of text to illustrate this
problem
EOT;
        $this->assertEquals(
            'a illustrate is of piece problem sample text this to',
            $this->wordSort->sort($options)
        );
    }

    /**
     * @expectedException InvalidArgumentException 
     */
    public function testWithInvalidOptionsICantSortWords()
    {
        $this->wordSort->sort('');
    }
}
