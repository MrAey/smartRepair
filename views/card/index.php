<?php
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
$this->title = 'ใบส่งซ่อม';
?>
<div class="row">
     <div class="col-lg-12">
             <h1 class="page-header"><i class="fa fa-edit fa-fw"></i> ใบส่งซ่อม</h1>
     </div>        
</div>
<?php
	Modal::begin([
		'id' => 'myModal',
		'header' => '<h3 class="modal-title"><i class="fa fa-pencil"></i> เขียนใบส่งซ่อม</h3>',
		'headerOptions' => ['style' => 'color: #fff;background: #428bca;border-top-left-radius: 5px;border-top-right-radius: 5px;'],
	]);
	Modal::end();
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-edit"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li><a data-toggle="modal" data-target="#myModal" style="cursor:pointer;"><i class="fa fa-plus"></i> เพิ่มใบส่งซ่อม</a></li>
      </ul>
      
	  	<form class="navbar-form from-group navbar-right" role="search" method="get" action="?p=search">
	 
	    <input type="text" class="form-control" name="q" placeholder="ระบุชื่อ/ฝ่ายหรือเลขที่ใบส่งซ่อม เพื่อค้นหา" size="50" autofocus autocomplete="off">
	    <input type="hidden" name="p" id="p" value="search" >
	 
		</form>
	</div>
 
  </div>
</nav>