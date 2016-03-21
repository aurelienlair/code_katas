<?php
namespace LexicographicalSorter\Model;
use LexicographicalSorter\UI\Items;

class Application
{
    private $sorter;

    public function __construct(Sorter $sorter)
    {
        $this->sorter = $sorter;
    }

    public function run($items)
    {
        $this->sorter->sort(new Items($items));  
    }
}
