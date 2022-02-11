<?php

use frontend\models\HammingDistance;
use frontend\models\LevenshteinDistance;


?>
<div class="site-distance">

    <h3>Test cases for hamming and levenshtine distance</h3>

    <?php

    //loop through test cases array to display rach test case as table
    foreach ($testCasesArray as $key => $value) {
        echo '<table>';
        echo '<tr><td><strong> First String </strong></td> <td> ' . $value['firstString'] . '</td></tr>';
        echo '<tr><td><strong> Second String </strong></td><td> ' . $value['secondString'] . '</td></tr>';
        echo '<tr><td><strong> Hamming Distance </strong></td> <td> ' . HammingDistance::hamming_dis($value['firstString'], $value['secondString']) . '</td></tr>';
        echo '<tr><td><strong> Levenshtein Distance </strong></td> <td> ' .
            LevenshteinDistance::levenshtein_dis($value['firstString'], $value['secondString']) . '</td></tr>';
        echo '</table><br><br>';
    }
