#!/usr/bin/php
<?php

/**
 * User commnad line input.
 *
 * Description: This file created to calculate hamming and levenshtine distance
 * depeing on user inputs using command lines
 * 
 * @since 2/12/2022
 */


require_once 'HammingDistance.php';
require_once 'LevenshteinDistance.php';


//Get user inputs from command
$firstString = readline("Enter the first string : ");
$secondString = readline("Enter the second string : ");

//Check empty values
if (empty($firstString) || empty($secondString)) {
    exit("You need to enter string value to get your distance..!" . PHP_EOL);
}

//Echo results for hamming and levenshtine distance
echo 'The hamming distance between ' . $firstString . ' and ' . $secondString . ' is => ' . HammingDistance::hamming_dis($firstString, $secondString) . PHP_EOL;
echo 'The levenshtine distance between ' . $firstString . ' and ' . $secondString . ' is => ' . LevenshteinDistance::levenshtein_dis($firstString, $secondStringsa) . PHP_EOL;
