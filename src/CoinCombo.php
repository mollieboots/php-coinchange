<?php
    class CoinCombo
    {
        function deconstruct($input)
        {
            $coin_result = array();
            while ($input >= 0) {
                if ($input % 25 < $input) {
                    array_push($coin_result, 25);
                    $input= $input - 25;
                } elseif ($input % 10 < $input) {
                    array_push($coin_result, 10);
                    $input= $input - 10;
                } elseif ($input % 5 < $input) {
                    array_push($coin_result, 5);
                    $input= $input - 5;
                } elseif ($input % 1 < $input) {
                    array_push($coin_result, 1);
                    $input= $input - 1;
                }
            }
            return $coin_result;
        }
    }
 ?>
