<?php

class randomClass{
    
    // Generate Random Number
    public function randomNumber($min, $max, $quantity)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        $rand = array_slice($numbers, 0, $quantity);
        return implode("", $rand);
    }

    // Generate Random Alphabet
    public function randomAlpha($num){
        $alpha = str_split('abcdefghijklmnopqrstuvwxyz');
        shuffle($alpha);
        $rand = '';
        foreach (array_rand($alpha, $num) as $i) {
            $rand .= $alpha[$i];
        }

        return $rand;
    }

}
