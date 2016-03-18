<?php
namespace ChapterIterator\Model;
use IteratorAggregate;

class Application
{
    private $book;

    public function __construct(IteratorAggregate $book)
    {
        $this->book = $book;
    }

    public function run()
    {
        $sumUp = '';
        foreach ($this->book as $index => $chapter) {
            $sumUp .= "- " . $chapter->getTitle() . PHP_EOL;
        }

        return $sumUp;
    }
}
