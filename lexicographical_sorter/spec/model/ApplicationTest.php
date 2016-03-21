<?php
require_once __DIR__ . '/../../model/Application.php';
require_once __DIR__ . '/../../model/Sorter.php';

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testApplicationHappyPath()
    {
        $sorter = $this->getMock('Sorter\Sorter');
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
