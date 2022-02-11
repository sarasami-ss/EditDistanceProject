<?php

/**
 * Hamming Distance class.
 *
 * Description: This class was created to find hamming distance between two strings as only have 
 * substitute operations (ex. substitute letter X with letter Y), pad shorter text 
 * with spaces..
 *
 * @since 11/2/2022
 */
class HammingDistance
{
    /**
     * This function created to find hamming distance between two strings,
     * it will return the number of substitute operations with time complexity O(n).
     *
     * @param firstString First string 
     * @param secondString Second string 
     * 
     * @author Sara Habaibeh
     * @return int
     */
    public static function hamming_dis($firstString, $secondString): int
    {
        //Initialize $count substitute variable to 0
        $count = 0;

        //Check two string difference length
        $count = self::checkLength($firstString, $secondString);

        $i = 0;

        //Looping text characters to check difference
        while (isset($firstString[$i]) != '') {
            if ($firstString[$i] != $secondString[$i])
                $count++;
            $i++;
        }

        //return hamming distance count
        return $count;
    }


    /**
     * This function created to calculate absolute length differance between two strings.
     *
     * @param firstString First string by reference
     * @param secondString Second string  by reference
     * 
     * @author Sara Habaibeh
     * @return int
     */

    private static function checkLength(&$firstString, &$secondString): int
    {
        //Calculate length difference between first and second strings
        $lengthDiff = strlen($firstString) - strlen($secondString);
        
        //If second string length is greater that first string length: swap values. 
        if ($lengthDiff > 0) {
            //save string in tmp variables
            $tmpFirst = $firstString;
            $tmpSecond = $secondString;
            //swap variables
            $firstString = $tmpSecond;
            $secondString = $tmpFirst;
        }

        //return absolute value for lengthDiff
        return abs($lengthDiff);
    }
}
