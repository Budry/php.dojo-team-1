<?php

namespace App;

class Main
{
    public function add($number): string
    {
        if ($number == "") {
            return "0";
        }
        if (str_ends_with($number, ",")) {
            return "Number expected but EOF found";
        }

        $regex = "~//(\[.+?\])+\n(.+)~";
        preg_match($regex, $number, $matches);
        if (!empty($matches)) {
            $separator = $matches[1];

            $pos = strpos($matches[2], ",");

            if ($pos !== false) {
                return "'|' expected, but ',' found at position " . $pos;
            }

            $parts = explode($separator, $matches[2]);

            $negatives = [];
            foreach ($parts as $part) {
                if ($part < 0) {
                    $negatives[] = $part;
                }
            }

            if (!empty($negatives)) {
                return "Negative not allowed : " . implode(",", $negatives);
            }

            $parts = array_filter($parts, fn ($item) => $item <= 1000);

            return (string)array_sum($parts);
        }

        $fuk = strpos($number, ",\n");
        if ($fuk != false) {
            return "Invalid input on pos: " . $fuk;
        }

        $parts = explode(",", $number);
        $out = [];

        foreach ($parts as $part) {
            $out = array_merge($out, explode("\n", $part));
        }

        $out = array_filter($out, fn ($item) => $item <= 1000);

        $negatives = [];
        foreach ($out as $x) {
            if ($x < 0) {
                $negatives[] = $x;
            }
        }
        if ($negatives) {
            return "Negative not allowed : " . implode(",", $negatives);
        }


        return (string)array_sum($out);
    }
}
