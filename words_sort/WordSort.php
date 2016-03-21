<?php
namespace WordSort;

class WordSort
{
    public function sort($options='')
    {
        if (empty($options)) {
            throw new \InvalidArgumentException(
                var_export($options, true) . ' are not valid options'
            );
        }

        $lines = explode(PHP_EOL, $options);
        $numberOfLines = array_shift($lines);
        if (!is_numeric($numberOfLines) || $numberOfLines < 1) {
            throw new \InvalidArgumentException(
                var_export($options, true) . ' are not valid options'
            );
        }

        $words = $this->sortLexically(
            $this->removeDuplicates(
                $this->joinLines($lines)
            )
        );

        return implode(' ', $words);
    }

    private function removeDuplicates(array $words)
    {
        return array_unique(array_map('strtolower', $words));
    }

    private function sortLexically(array $words)
    {
        usort($words, 'strcasecmp');

        return $words;
    }

    private function joinLines(array $lines)
    {
        return explode(
            ' ',
            implode(
                ' ',
                $lines
            )
        );
    }
}
