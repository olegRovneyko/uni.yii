<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:300,400,700" rel="stylesheet">

    <link href="<?= Url::base(true) ?>/web/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <?php $this->head() ?>
</head>

<body id="home" style="">
<?php $this->beginBody() ?>
<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo Starts -->
                <a class="navbar-brand" href="<?= Url::home() ?>"><span style="color: red;">Uni</span>Print</a>
                <!-- #Logo Ends -->

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right scroll">
                     <li class=""><a href="<?= Url::base(true) ?>/#home"><i class="fa fa-home fa-lg"></i></a></li>
                     <li class=""><a href="<?= Url::base(true) ?>/#plastic-cards">пластиковые карточки</a></li>
                     <li class=""><a href="<?= Url::base(true) ?>/#pad-printing">тампопечать</a></li>
                     <li class=""><a href="<?= Url::base(true) ?>/#silkscreen">шелкотрафаретная печать</a></li>
                     <li class="active"><a href="<?= Url::base(true) ?>/#contact">контакты</a></li>
                </ul>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Ends -->

<div class="container">
    <?php if (isset($this->blocks['banner'])) :?>
       <?=$this->blocks['banner']?>
    <?php endif; ?>

    <?=$content?>

    <!-- Footer Starts -->
    <div class="footer text-center">
    ©<a href="<?= Url::base(true) ?>"> uniprint</a>
    </div>
    <!-- # Footer Ends -->

    <!-- arrow to up -->
    <a href="<?= Url::base(true) ?>/#home" class="gototop ">
        <i class="fa fa-angle-up  fa-3x"></i>
    </a>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>