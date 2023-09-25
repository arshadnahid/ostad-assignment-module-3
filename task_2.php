<?php
/*Create an array called $numbers
containing the numbers 1 to 10.
Write a PHP function which takes the "$numbers" array
as an argument to remove the even numbers
 from the array and print the resulting array.*/


function removeEvenNumbers($numbers)
{
    $oddNumbers = array();
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }
    print_r($oddNumbers);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);

