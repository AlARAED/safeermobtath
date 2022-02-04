<?php


if (!function_exists('generateCode')) {
    function generateCode($min = 0, $max = 9, $quantity = 4)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        return implode(array_slice($numbers, 0, $quantity));
    }
}

?>
