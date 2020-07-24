<?php

function run()
{
    $palindrome = "Sanaskrit";
    $aux = "";
    $longest = "";
    try {
        $palindrome = strtolower($palindrome);
        for ($i = 0; $i < strlen($palindrome); $i++) {
            $aux = $palindrome[$i];
            for ($j = $i + 1; $j < strlen($palindrome); $j++) {
                $aux .= $palindrome[$j];
                if (checkIsPalindrome($aux)) {
                    $longest = updateLongest($aux, $longest);
                }
            }
        }
        echo $longest;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function checkIsPalindrome($aux)
{
    return $aux == strrev($aux);
}

function updateLongest($aux, $longest)
{
    if (strlen($aux) > strlen($longest)) {
        return $aux;
    } else {
        return $longest;
    }
}

run();
