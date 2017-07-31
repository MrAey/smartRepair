<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asset-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sap_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regis_date')->textInput() ?>

    <?= $form->field($model, 'aname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dept')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'positions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floorno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groupid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catagory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pur_date')->textInput() ?>

    <?= $form->field($model, 'doc_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pur_docno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receive_date')->textInput() ?>

    <?= $form->field($model, 'bud_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pict_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
