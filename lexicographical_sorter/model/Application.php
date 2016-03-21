<?php
require_once __DIR__ . '/../ui/Items.php';
use Sorter\Sorter;
use UI\Items;

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
