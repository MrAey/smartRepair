<?php
 
use yii\helpers\Html; 
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\helpers\ArrayHelper; 
 
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
  <!-- <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li><a href="index.php">หน้าแรก</a></li>
              <li class="active">ครุภัณฑ์คอมพิวเตอร์</li>
          </ol>
      </div>
  </div> -->
   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   <p>
       <?= Html::button('<i class="glyphicon glyphicon-plus"></i> เพิ่มครุภัณฑ์คอมพิวเตอร์',['value'=>  Url::to('index.php?r=computer/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
   </p>
   <?php
        Modal::begin([
            // 'header'=>'<h4><i class="glyphicon glyphicon-plus"></i> เพิ่มครุภัณฑ์คอมพิวเตอร์</h4>',
            'id'=>'modal',
            'size'=>'modal-lg',
            'options'=>['tabindex' => false],
            'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();

        Modal::begin([
            // 'header' => ' Detail',
            'id' => 'modalView',
            'size' => 'modal-md',
            'options'=>['tabindex' => false],
            'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
        ]);

        Modal::end();
        $this->registerJS("$('#modalView').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var modal = $(this)
            var title = button.data('title')
            var href = button.attr('href')
            modal.find('.modal-title').html(title)
            modal.find('.modal-body').html('')
            $.post(href)
            .done(function( data ) {
            modal.find('.modal-body').html(data)
            });
        });",\yii\web\View::POS_READY);

        Modal::begin([
            // 'header' => ' Update',
            'id' => 'modalUpdate',
            'size' => 'modal-lg',
            'options'=>['tabindex' => false],
            'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
        ]);

        Modal::end();
        $this->registerJS("$('#modalUpdate').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var modal = $(this)
            var title = button.data('title')
            var href = button.attr('href')
            modal.find('.modal-title').html(title)
            modal.find('.modal-body').html('')
            $.post(href)
            .done(function( data ) {
            modal.find('.modal-body').html(data)
            });
        });",\yii\web\View::POS_READY);
    ?>  
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
            'filter' => ArrayHelper::map(app\models\AssetAstatus::find()->asArray()->all(), 'a_status', 'descriptions'),
           	'value' => function ($model){
			           		return $model->astatus->descriptions;
			           }
           ],
           // ['class' => 'yii\grid\ActionColumn'],
           [   'class' => 'yii\grid\ActionColumn', 
                'template' => '{view} {update} {delete}',
                'headerOptions' => ['width' => '12%', 'class' => 'activity-view-link',],        
                    'contentOptions' => ['class' => 'padding-left-5px', 'align' => 'middle', 'noWrap' => true],

                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a(
                        '<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                        'class' => 'btn btn-info btn-xs',
                        'data-toggle' => 'modal', 'data-target' => '#modalView',
                        'data-title' => 'Detail Data']
                        );
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a(
                        '<span class="glyphicon glyphicon-pencil"></span>', $url, [
                        'class' => 'btn btn-success btn-xs',
                        'data-toggle' => 'modal', 'data-target' => '#modalUpdate',
                        'data-title' => 'Update Data']
                        );
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a(
                        '<span class="glyphicon glyphicon-trash"></span>', $url, [
                        'class' => 'btn btn-danger btn-xs',
                        'data-toggle' => 'modal', 'data-target' => '#modalDelete',
                        'data-title' => 'Update Data']
                        );
                    },
                ],


            ],
       ],
   ]); ?>
</div>
 