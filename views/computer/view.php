<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AssetMaster */

$this->title = $model->code;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Asset Masters'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-master-view">

    <p>
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
