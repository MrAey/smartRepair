<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AssetMaster */

$this->title = $model->code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Asset Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'sap_code',
            'budget_year',
            'regis_date',
            'aname',
            'dept',
            'positions',
            'floorno',
            'roomno',
            'groupid',
            'catagory',
            'brand',
            'asize',
            'model',
            'serial_no',
            'price',
            'pur_date',
            'doc_no',
            'pur_docno',
            'receive_date',
            'bud_id',
            'asset_note:ntext',
            'pict_path',
            'a_status',
        ],
    ]) ?>

</div>
