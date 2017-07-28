<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= Html::csrfMetaTags() ?>
    <title><?php echo Html::encode($this->title); ?></title>
    <?php $this->head(); ?>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->theme->baseUrl ?>/css/datepicker.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/plugins/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap-combobox.css" rel="stylesheet">
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->theme->baseUrl ?>/css/iconset/ios7-set-filled-1/flaticon.css" rel="stylesheet" type="text/css">
    <!-- <link rel="shortcut icon" href="../media/favicon/<?php echo @$system_info->site_favicon;?>"/> -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl ?>/css/selectize.default.css">

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap-datepicker.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $this->theme->baseUrl ?>./js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    
    <script src="<?php echo $this->theme->baseUrl ?>/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/plugins/morris/morris.min.js"></script>
   

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/sb-admin-2.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap-combobox.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap-colorpicker.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/latest/typeahead.bundle.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/standalone/selectize.js"></script>

</head>

<body>
<?php $this->beginBody() ?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b>ระบบส่งซ่อมออนไลน์</b></a>
            </div>
            <!-- /.navbar-header -->
            <?php
                // echo Nav::widget([
                //     'options' => ['class' => 'navbar-nav navbar-right'],
                //     'items' => [
                //         ['label' => 'Home', 'url' => ['/site/index']],
                //         ['label' => 'About', 'url' => ['/site/about']],
                //         ['label' => 'Contact', 'url' => ['/site/contact']],
                //         Yii::$app->user->isGuest ? (
                //             ['label' => 'Login', 'url' => ['/site/login']]
                //         ) : ['label' => 'Logout', 'url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
                //     ],
                // ]);
            ?>
            <?php
                if (!Yii::$app->user->isGuest) {
            ?>
            <a href="#"><div class="box_user_right"><div class="box_img_cycle2"><img src="<?php echo $this->theme->baseUrl ?>/images/noimg.jpg" id="img_cycle2" alt=""/></div> Administrator </div></a>
            <?php } ?>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse collapse">
                    <ul class="nav" id="side-menu">
                       <li><a href="index.php" <?php if(@addslashes($_GET['r']) == ""){ echo 'class="active"';}?>><i class="fa fa-home fa-fw"></i> หน้าแรก </a></li>
                       <?php
                        if (!Yii::$app->user->isGuest){
                       ?>
                       <li><a href="?r=computer" <?php if(@addslashes($_GET['r']) == "computer"){ echo 'class="active"';}?>><i class="fa fa-desktop fa-fw"></i> ครุภัณฑ์คอมพิวเตอร์ </a></li>
                       <li><a href="?r=card/create" <?php if(@addslashes($_GET['r']) == "card/create"){ echo 'class="active"';}?>><i class="fa fa-edit fa-fw"></i> เขียนใบส่งซ่อม </a></li>
                       <li><a href="?r=card/report" <?php if(@addslashes($_GET['r']) == "card/report"){ echo 'class="active"';}?>><i class="fa fa-list fa-fw"></i> รายการส่งซ่อม</a></li>
                       <li><a href="?r=member" <?php if(@addslashes($_GET['r']) == "member"){ echo 'class="active"';}?>><i class="fa fa-users fa-fw"></i> สมาชิก </a></li>
                       <li><a href="?r=report" <?php if(@addslashes($_GET['r']) == "report"){ echo 'class="active"';}?>><i class="fa fa-pie-chart fa-fw"></i> รายงาน </a></li>
                       <li><a href="?r=setting" <?php if(@addslashes($_GET['r']) == "setting"){ echo 'class="active"';}?>><i class="fa fa-gear  fa-fw"></i> ตั้งค่า </a></li>
                       <li><a href="<?= Url::to(['site/logout'])?>" data-method="post"><i class="fa fa-lock fa-fw"></i> ออกจากระบบ </a></li>
                       <?php } else {
                            echo '<li><a href="?r=site/login" ';
                            if(@addslashes($_GET['r']) == "site/login"){ echo 'class="active"';}
                            echo '><i class="fa fa-users fa-fw"></i> เข้าสู่ระบบ </a></li>'; 
                        }?>
                    </ul> 
                    <div style="color:#CCC; text-align:center; padding-top:10px;">&copy;&nbsp;<?php echo @date("Y");?>&nbsp;</div>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="margin_top">
                <div class="col-lg-12">
                  <?php echo $content; ?>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->



<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage(); ?>
