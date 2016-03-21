<?php
namespace LexicographicalSorter\Model;
use LexicographicalSorter\UI\Items;

interface Sorter
{
    public function sort(Items $items);
}
