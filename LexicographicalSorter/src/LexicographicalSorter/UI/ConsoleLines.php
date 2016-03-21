<?php
namespace LexicographicalSorter\UI;

class ConsoleLine
{
    public function output(array $output)
    {
        return implode(
            PHP_EOL,
            array_map(
                function($element) {
                    return implode(', ', $element); 
                },
                $output
            )
        );
    }
}
