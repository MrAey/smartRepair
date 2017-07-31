<?php
 
use yii\helpers\Html; 
use yii\grid\GridView; 
 
/* @var $this yii\web\View */
$this->title = 'ครุภัณฑ์คอมพิวเตอร์';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-desktop fa-fw"></i> ครุภัณฑ์คอมพิวเตอร์</h1>
    </div>
</div>       
<div class="asset-master-index">
  <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li><a href="index.php">หน้าแรก</a></li>
              <li class="active">ครุภัณฑ์คอมพิวเตอร์</li>
          </ol>
      </div>
  </div>
   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   <p>
       <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> เพิ่มครุภัณฑ์คอมพิวเตอร์'), ['create'], ['class' => 'btn btn-success']) ?>
   </p>
   <?= GridView::widget([
       'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
       'columns' => [
           ['class' => 'yii\grid\SerialColumn'],
           // 'code',
           'sap_code',
           // 'budget_year',
           // 'regis_date',
           'aname',
           // 'dept',
           // 'positions',
           // 'floorno',
           // 'roomno',
           // 'groupid',
           // 'catagory',
           // 'brand',
           // 'asize',
           // 'model',
           // 'serial_no',
           // 'price',
           // 'pur_date',
           // 'doc_no',
           // 'pur_docno',
           // 'receive_date',
           // 'bud_id',
           // 'asset_note:ntext',
           // 'pict_path',
           // 'a_status',
           [
           	'attribute' => 'a_status',
           	'value' => function ($model){
			           		return $model->astatus->descriptions;
			           }
           ],
           ['class' => 'yii\grid\ActionColumn'],
       ],
   ]); ?>
</div>
 