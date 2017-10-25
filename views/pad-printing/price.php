<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="row">
    <div class="col-md-9">

        <?php
        $this->params['breadcrumbs'][] = ['label' => 'тампопечать', 'url'=> ['pad-printing/']];
        $this->params['breadcrumbs'][] = $this->title;
        ?>

        <h1><?= Html::encode($this->title) ?></h1>
        <div class="well text-center top-indent bottom-indent">
            <p class="text-info">
            <strong class="lead">Минимальный заказ - 100 грн.</strong><br>
            Стоимость зависит от количества цветов и  площади запечатки.<br>
            Цену на печать, а также на авторучки, зажигалки, брелки, флешки и другие сувенирные изделия уточняйте у наших менеджеров.
            </p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Шелкотрафаретная печать</div>
            <div class="panel-body">
                <a href="<?= Url::to(['silk-screen/']) ?>">
                    <?= Html::img('@web/images/silkscreen/gallery/thumbnails/o005.png', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
                    <p>Печать на текстиле и не только</p>
                </a>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Дисконтные карточки</div>
            <div class="panel-body">
                <a href="<?= Url::to(['d-card/']) ?>"><?= Html::img('@web/images/d-cards/card.svg', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
                    <p>Изготовление дисконтных карточек в любом колличестве</p></a>
            </div>
        </div>
    </div>
</div>


