<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AssetMaster */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Asset Master',
]) . $model->code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Asset Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="asset-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
