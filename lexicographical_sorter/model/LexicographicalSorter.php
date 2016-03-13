<?php
namespace Sorter;
require_once __DIR__ . '/Sorter.php';
require_once __DIR__ . '/../ui/Items.php';
use UI\Items;

class LexicographicalSorter implements Sorter
{
    private $output;
    private $items;

    public function sort(Items $items)
    {
        $this->removeDuplicateWords($items);
        $this->sortLexically();
        $this->addNumberOfDistinctWords();

        return $this->output;
    }

    private function removeDuplicateWords(Items $items)
    {
        $this->output = array_unique(array_map('strtolower', $items->toArray()));
    }

    private function sortLexically()
    {
        usort($this->output, 'strcasecmp');
    }

    private function addNumberOfDistinctWords()
    {
        array_unshift($this->output, count($this->output));
    }
}
