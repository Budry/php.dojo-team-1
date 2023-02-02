<?php

namespace App;

class Main
{
    public function add($number): string
    {
        if ($number == "") {
            return "0";
        }

        $parts = explode(",", $number);

        return (string)array_sum($parts);
    }
}
