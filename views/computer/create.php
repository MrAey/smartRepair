<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AssetMaster */

$this->title = Yii::t('app', 'Create Asset Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Asset Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
