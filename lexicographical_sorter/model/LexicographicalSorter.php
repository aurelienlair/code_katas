<?php
namespace Sorter;
require_once __DIR__ . '/Sorter.php';
require_once __DIR__ . '/../ui/Items.php';
use UI\Items;

class LexicographicalSorter implements Sorter
{
    public function sort(Items $items)
    {
        return $this->addNumberOfDistinctWords(
            $this->sortLexically(
                $this->removeDuplicateWords($items)
            )
        );
    }

    private function removeDuplicateWords(Items $items)
    {
        return array_unique(
            array_map('strtolower', $items->toArray())
        );
    }

    private function sortLexically(array $words)
    {
        usort($words, 'strcasecmp');

        return $words;
    }

    private function addNumberOfDistinctWords(array $words)
    {
        array_unshift($words, count($words));

        return $words;
    }
}
