<?php

namespace Pipe;

class TextProcessor
{
    public function removeSpecialChars(string $text): string
    {
        return preg_replace('/[^a-zA-Z0-9\s]/', '', $text);
    }

    public function toLowerCase(string $text): string
    {
        return strtolower($text);
    }

    public function countWords(string $text): int
    {
        return count(array_filter(explode(' ', $text)));
    }
}
