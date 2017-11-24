<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\SiteAppAsset;

SiteAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
    <link href="<?= Url::base(true) ?>/web/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php $this->head() ?>
</head>
<body id="home">
<?php $this->beginBody() ?>

<div class="wrap" style="background: url(<?= '/images/' . setBackgroungSeason()?>)">
	<div>
		<?php
		NavBar::begin([
			/*'brandLabel' => 'UniPrint',*/
			'brandLabel' => Html::img('@web/images/UniPrint_logo2.svg', ['alt' => 'UniPrint', 'width' => '140', 'style' => 'margin-top: -9px'] ),
			'brandUrl' => Url::home(),
			'options' => [
				'class' => 'navbar-inverse navbar-fixed-top brand-color',
			],
		]);
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => [
				['label' => '', 'url' => ['/site/index'], 'linkOptions' => ['class' => 'fa fa-home fa-lg']],
				['label' => 'О компании', 'url' => ['/site/about']],
				['label' => 'Шелкотрафарет',
					'url' => ['silk-screen/index'],
					'options'=>['class'=>'dropdown'],
					'template' => '<a href="{url}" class="url-class">{label}</a>',
					'items' => [
						['label' => 'Каталог печатной продукции', 'url' => ['silk-screen/gallery']],
						['label' => 'Прайс лист', 'url' => ['silk-screen/price']],
					]
				],
				['label' => 'Дисконтные карточки',
					'url' => ['d-card/index'],
					'options'=>['class'=>'dropdown'],
					'template' => '<a href="{url}" class="url-class">{label}</a>',
					'items' => [
						['label' => 'Требования к макету', 'url' => ['d-card/demands']],
						['label' => 'Расчет стоимости', 'url' => ['d-card/calculate']],
					]
				],
				['label' => 'Тампопечать',
					'url' => ['pad-printing/index'],
					'options'=>['class'=>'dropdown'],
					'template' => '<a href="{url}" class="url-class">{label}</a>',
					'items' => [
						['label' => 'Требования к макету', 'url' => ['pad-printing/demands']],
						['label' => 'Прайс лист', 'url' => ['pad-printing/price']],
					]
				],
				['label' => 'Контакты', 'url' => ['/site/contact']],
        /* ['label' => 'Админ', 'url' => ['/admin']], */

        /*Yii::$app->user->isGuest ? (
				['label' => 'Login', 'url' => ['/site/login']]
				) : (
					'<li>'
					. Html::beginForm(['/site/logout'], 'post')
					. Html::submitButton(
						'Logout (' . Yii::$app->user->identity->username . ')',
						['class' => 'btn btn-link logout']
					)
					. Html::endForm()
					. '</li>'
				)*/
			],
		]);
		NavBar::end();
		?>

		<?php if (isset($this->blocks['jumbotron'])) { 
    	echo $this->blocks['jumbotron'];  
  	} ?>
    
		
		<div class="container main-container">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= $content ?>
		</div>
	</div>
</div>

<footer class="footer">
	<div class="container">
        <div class="row">
            <div class="col-md-3">
                <p>
                    &copy; UniPrint <?= date('Y') ?>
                </p>
            </div>
            <div class="col-md-6">
                    <i class="fa fa-phone"></i>&nbsp;&nbsp;068-650-50-55, 097-274-51-21
										&nbsp;|&nbsp;
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;info@uniptint.com.ua
            </div>
            <div class="col-md-3 text-right">
                <p><?= Yii::powered() ?> <em>(Yes It Is!)</em></p>
            </div>
            <a href="#home" class="gototop ">
                <i class="fa fa-angle-up  fa-3x"></i>
            </a>
<?php $script = <<<JS
            		$('.gototop').click(function(e) {
            			e.preventDefault();
            			$('html, body').animate({scrollTop: 0}, 600,'swing');
            		});
JS;
$this->registerJs($script, yii\web\View::POS_LOAD); ?>
        </div>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
