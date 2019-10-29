<?php

    require_once("utils.php");


    function my_sum($arr) {
        $sum = 0;
        foreach ($arr as $plus) {
            $sum += $plus;
        }
        return $sum;
    }

    function shortener($shortMe) {
        $words = explode(" ", $shortMe);
        $arr = [];
        foreach ($words as $word) {
            $dlina = strlen($word);
            if ($dlina > 6){
                $arr[] = substr($word, 0 , 6) . "*";
                }else {
                    $arr [] = $word;
                }
        }
        return implode (" ", $arr);
    }


    function compare_ends($arr) {
        $natali = 0;
        foreach ($arr as $word) {
            if(strlen($word) > 1){
                $c = strlen($word) - 1;
                if ($word[0] == $word[$c]){
                    $natali++;
                }
            }
        }
        return $natali;
    }

    function reverse_string($str) {
        $natali = mb_strlen($str) - 1;
        $c15 = '';
        while ($natali >= 0){
            $c15 .= $str[$natali--];
        }
        return $c15;
    }

test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();