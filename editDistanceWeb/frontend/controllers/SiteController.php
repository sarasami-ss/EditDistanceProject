<?php

namespace frontend\controllers;

use frontend\models\EditDistance;
use frontend\models\HammingDistance;
use frontend\models\LevenshteinDistance;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * This function is used to display home page (index view)
     * 
     * @author Sara Habaibeh
     * @return testCasesView
     */
    public function actionIndex()
    {
        $model = new EditDistance();
        if ($model->load(Yii::$app->request->post())) {
            $hamming_distance = HammingDistance::hamming_dis($model->firstString, $model->secondString);
            $levenshtein_dist = LevenshteinDistance::levenshtein_dis($model->firstString, $model->secondString);
        }
        return $this->render('index', [
            'model' => $model,
            'hamming_distance' => isset($hamming_distance) ? $hamming_distance : null,
            'levenshtein_dist' => isset($levenshtein_dist) ? $levenshtein_dist : null
        ]);
    }

    /**
     * This function is used to display testCases view
     * 
     * @author Sara Habaibeh
     * @return testCasesView
     */
    public function actionTestCases()
    {
        //define test cases array
        $testCasesArray = [
            'firstTest' => ['firstString' => 'this is a test', 'secondString' => 'this is test'],
            'secondTest' => ['firstString' => 'this is test', 'secondString' => 'the is test'],
            'ThirdTest' => ['firstString' => 'dog', 'secondString' => 'duck'],
            'FouthTest' => ['firstString' => 'cat', 'secondString' => 'car'],
        ];
        return $this->render('testCases', ['testCasesArray' => $testCasesArray]);
    }
}
