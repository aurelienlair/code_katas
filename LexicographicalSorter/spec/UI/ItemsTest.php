<?php
namespace LexicographicalSorter\UI;

class ItemsTest extends \PHPUnit_Framework_TestCase
{
    public function testWithValidItemsIRetrieveCorrectWords()
    {
        $input = <<<EOT
1
This is a sample piece of text to illustrate this problem
EOT;

        $items = $this->items($input);

        $this->assertEquals(
            $this->expectedWords(),
            $items->toArray()
        );
    }

    public function testWithGoodItemsOn2LinesICanRetrieveCorrectWords()
    {
        $input = <<<EOT
2
This is a sample piece of text to illustrate this
problem
EOT;
        $items = $this->items($input);
        $this->assertEquals(
            $this->expectedWords(),
            $items->toArray()
        );
    }

    /**
     * @expectedException InvalidArgumentException 
     */
    public function testWith0AsNumberOfLinesICantSortWords()
    {
        $input = <<<EOT
0
This is a sample piece of text to illustrate this problem
EOT;

        $this->items($input);
    }

    /**
     * @expectedException InvalidArgumentException 
     */
    public function testWithAnInvalidNumberOfLinesICantSortWords()
    {
        $input = <<<EOT
FourtyTwo
This is a sample piece of text to illustrate this problem
EOT;

        $this->items($input);
    }

    /**
     * @expectedException InvalidArgumentException 
     */
    public function testWithInvalidItemsICantSortWords()
    {
        $this->items('');
    }

    private function items($input)
    {
        return new Items($input);
    }

    private function expectedWords()
    {
        return [
            'This', 'is', 'a', 'sample', 
            'piece', 'of', 'text', 'to', 
            'illustrate', 'this', 'problem'
        ];
    }
}
