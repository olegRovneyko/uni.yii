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
    <title>Админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
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
                        ['label' => 'Галерея работ', 'url' => ['silk-screen/gallery']],
                        ['label' => 'Прайс лист', 'url' => ['silk-screen/price']],
                    ]
                ],
                ['label' => 'Дисконтные карточки',
                    'url' => ['d-card/index'],
                    'options'=>['class'=>'dropdown'],
                    'template' => '<a href="{url}" class="url-class">{label}</a>',
                    'items' => [
                        ['label' => 'Заказы', 'url' => ['/admin/d-card']],
                        ['label' => 'Прайс лист', 'url' => ['/admin/d-price']],
                    ]
                ],
                ['label' => 'Контакты', 'url' => ['/site/contact']],

                Yii::$app->user->isGuest ? (
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
                )
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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
