<?php
use LexicographicalSorter\Model\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testApplicationHappyPath()
    {
        $sorter = $this->getMock('LexicographicalSorter\Model\Sorter');
        $sorter->expects($this->once())
            ->method('sort')
            ->willReturn([
                '10', 'a', 'illustrate', 'is',
                'of', 'piece', 'problem', 'sample',
                'text', 'this', 'to'
            ]);
        $application = new Application($sorter);
        $input = <<<EOT
1
This is a sample piece of text to illustrate this problem
EOT;
        $application->run($input);
    }
}
