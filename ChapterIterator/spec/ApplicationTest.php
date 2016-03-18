<?php
use ChapterIterator\Model\Chapter;
use ChapterIterator\Model\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{ 
    public function testWithMyApplicationICanIterateOnBookChapters()
    {
        $chapters = [
            new Chapter('Foreword', 'This is the introduction'),
            new Chapter('Chapter 1', 'Content'),
            new Chapter('Chapter 2', 'Content'),
        ];
        $book = $this->getMock('IteratorAggregate');
        $book->expects($this->any())
            ->method('getIterator')
            ->will($this->returnValue(
                new \ArrayIterator($chapters)
            ));
        $application = new Application($book);
        $expectedTitles = '- Foreword' . PHP_EOL . '- Chapter 1' . PHP_EOL . '- Chapter 2' . PHP_EOL;
        $this->assertEquals(
            $expectedTitles,
            $application->run()
        );
    }
}
