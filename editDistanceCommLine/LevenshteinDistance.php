<?php

/**
 * Hamming Levenshtein class.
 *
 * Description: This class was created to find Levenshtein distance between two strings as only have 
 * substitute operations (ex. substitute letter X with letter Y), pad shorter text 
 * with spaces..
 *
 * @since 11/2/2022
 */
class LevenshteinDistance
{
    /**
     * This function us used to calculate the minimal number of characters you have to replace,
     *  insert or delete to transform firstString into secondString. The complexity of the algorithm is
     *  O(m*n), where n and m are the length of firstString and secondString 
     
     * @param firstString First string 
     * @param secondString Second string 
     * 
     * @author Sara Habaibeh
     * @return int
     */

    public static function levenshtein_dis($firstString, $secondString)
    {
        $firstLength = strlen($firstString);
        $secondLength = strlen($secondString);
        $lengthArray = [];
        // Fill lengthArray[][] in bottom up manner
        for ($i = 0; $i <= $firstLength; $i++) {
            for ($j = 0; $j <= $secondLength; $j++) {

                // If first string is empty,
                // only option is to insert
                // all characters of second string
                if ($i == 0)
                    $lengthArray[$i][$j] = $j; // Min. operations = j

                // If second string is empty,
                // only option is to remove
                // all characters of second string
                else if ($j == 0)
                    $lengthArray[$i][$j] = $i; // Min. operations = i

                // If last characters are same,
                // ignore last char and recur
                // for remaining string
                else if ($firstString[$i - 1] == $secondString[$j - 1])
                    $lengthArray[$i][$j] = $lengthArray[$i - 1][$j - 1];

                // If last character are different,
                // consider all possibilities and
                // find minimum
                else {
                    $lengthArray[$i][$j] = 1 + min(
                        $lengthArray[$i][$j - 1],      // Insert
                        $lengthArray[$i - 1][$j],      // Remove
                        $lengthArray[$i - 1][$j - 1]   // Replace
                    ); 
                }
            }
        }
        return $lengthArray[$firstLength][$secondLength];
    }
}
