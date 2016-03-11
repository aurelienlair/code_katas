<?php

class Book implements IteratorAggregate
{
    private $title;
    private $author;
    private $chapters;

    public function construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->chapter = [];
    }

    public function getIterator()
    {
        return new ArrayIterator($this->chapters);
    }

    public function addChapter(Chapter $chapter)
    {
        $this->chapters[] = $chapter;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}
