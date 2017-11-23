<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MenusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'icon') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'label') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'badge') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
