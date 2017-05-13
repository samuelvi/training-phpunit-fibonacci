<?php

class Fibonacci
{
    public static function getNextItemNumber($number)
    {
        return round(pow((sqrt(5) + 1) / 2, --$number) / sqrt(5));
    }

    public static function getNextItemNumberGoodSolution($number)
    {
        $first = 0;
        $second = 1;
        for ($i = 0, $total = ($number - 1); $i < $total; $i++) {
            $third = $first + $second;
            $first = $second;
            $second = $third;
        }
        return $first;
    }
}