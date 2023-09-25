<?php
/*Create a PHP function called generatePassword($length)
that generates a random password of the specified length.
The password should include lowercase letters, uppercase letters,
numbers, and special characters (!@#$%^&*()_+). Write a PHP program
to generate a password
with a length of 12 characters using this function and print the password.*/


// Function to generate a random password
function generatePassword($length)
{
    // Define the character sets for lowercase, uppercase, numbers, and special characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';


    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;


    $password = '';


    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $password;

