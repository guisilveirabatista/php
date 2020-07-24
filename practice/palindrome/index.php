<?php

function run()
{
    $palindrome = "Banana";
    $aux = "";
    $longest = "";
    echo "Palindromes found:<br/>";
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
        echo "<br/>Longest:<br/>" . $longest;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function checkIsPalindrome($aux)
{
    if ($aux == strrev($aux)) {
        echo $aux . "<br/>";
    }
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
