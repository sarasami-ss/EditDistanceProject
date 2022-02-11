<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="site-distance">

    <p>Please enter strings to check Edit Distance</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'distance-form']); ?>

            <?= $form->field($model, 'firstString')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'secondString')->textInput(['autofocus' => true]) ?>


            <div class="form-group">
                <?= Html::submitButton('Calculate Distance', ['class' => 'btn btn-primary', 'name' => '']) ?>
            </div>

            <?php ActiveForm::end();
            if (!is_null($hamming_distance)) {
                echo 'Hamming distance between strings: ' . $model->firstString . ' and ' .  $model->secondString . ' is <strong>' . $hamming_distance . '</strong><br>';
            }
            if (!is_null($levenshtein_dist)) {
                echo 'Levenshtein distance between strings: ' . $model->firstString . ' and ' .  $model->secondString . ' is <strong>' . $levenshtein_dist . '</strong>';
            }
            ?>

        </div>
    </div>
</div>