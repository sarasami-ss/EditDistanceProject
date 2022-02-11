<?php

namespace frontend\models;
use yii\base\Model;

/**
 * EditDistance class.
 *
 * Description: This class is the main class for edit distance types.
 * This is the parent class for Hamming distance and Levenshtein ditance types 
 * and can be used as parent for other types in the future.
 *
 * @since 11/2/2022
 */
class EditDistance extends Model
{
    //define properties to be reflected on web form
    public $firstString, $secondString;

    //define rules to validate input entered by user
    public function rules()
    {
        return [
            // firstString and secondString are required
            [['firstString', 'secondString'], 'required'],
            // firstString and secondString are string and minimum 1 character
            [['firstString', 'secondString'], 'string', 'min' => 1, 'max' => 255],
        ];
    }

}