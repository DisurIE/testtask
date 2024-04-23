<?php

namespace App\Services;

class MainService
{
    public function reverse(string $words)
    {
        return strrev($words);
    }
}
