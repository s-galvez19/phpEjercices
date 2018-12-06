<?php
// <!-- If you have and array $arr = [0,1,2,3,4]; How do you extract the third value? -->
$a[ 3 ];


// <!-- If you have an array $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; How do you extract the third value? -->

$a[ "three" ];

// Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".
$a = explode( ",", $a );

// <!-- With the result array from 3, create a new array where each element is both key and value. In other words, the result should be: ["a"=>"a", "b"=>"b", "c"=>"c”,   "d"=>"d", "e"=>"e"] -->
array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
)



// Write a PHP function to generate a string with 11 random letters and numbers.
$str = get_rand_letters(11)
$str = get_rand_numbers(8);