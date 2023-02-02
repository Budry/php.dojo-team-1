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
		$out = [];

		foreach ($parts as $part) {
			$out = array_merge($out, explode("\n", $part));
		}

        return (string) array_sum($out);
    }
}
