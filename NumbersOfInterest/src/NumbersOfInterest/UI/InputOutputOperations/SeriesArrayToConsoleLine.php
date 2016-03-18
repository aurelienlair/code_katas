<?php
namespace NumbersOfInterest\UI\InputOutputOperations;

class SeriesArrayToConsoleLine
{
    public function output(array $series)
    {
        return implode(
            PHP_EOL,
            array_map(
                function($element)
                {
                    return implode(", ", $element); 
                },
                $series
            )
        );
    }
}
