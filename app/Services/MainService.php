<?php

namespace App\Services;

class MainService
{

    public function check_upper($str)
    {
        return mb_strtoupper($str) === $str;
    }
    public function reverseCase(string $word)
    {
        $charArray = mb_str_split($word);

        for ($i = 0; $i < count($charArray) / 2; $i++) {
            if($this->check_upper($charArray[$i]) && $this->check_upper($charArray[count($charArray) - 1 - $i])){
                continue;
            }
            else if ($this->check_upper($charArray[$i])) {
                $charArray[count($charArray) - 1 - $i] = mb_strtoupper($charArray[count($charArray) - 1 - $i]);
                $charArray[$i] = mb_strtolower($charArray[$i]);
            }
            else if($this->check_upper($charArray[count($charArray) - 1 - $i])){
                $charArray[count($charArray) - 1 - $i] = mb_strtolower($charArray[count($charArray) - 1 - $i]);
                $charArray[$i] = mb_strtoupper($charArray[$i]);
            }
        }

        return implode('', $charArray);
    }
    function utf8_strrev(string $str)
    {
        preg_match_all('/./us', $str, $ar);
        return join('', array_reverse($ar[0]));
    }
    public function reverse(string $words)
    {
        $words = preg_split('/(\s+)/', $words, -1, PREG_SPLIT_DELIM_CAPTURE);
        $reversedWords = [];

        foreach ($words as $word) {
            if (!preg_match('/^\s+$/', $word)) {
                $reversedWord = preg_replace_callback('/[^\p{P}\p{Z}]+/u', function($matches) {
                    return $this->reverseCase($this->utf8_strrev($matches[0]));
                }, $word);
                $reversedWords[] = $reversedWord;
            } else {
                $reversedWords[] = $word;
            }
        }

        return implode('', $reversedWords);
    }
}
