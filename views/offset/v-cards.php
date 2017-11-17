<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="text-center" style="min-height: 79px;">
    <?= LinkPager::widget(['pagination' => $pages]) ?>
</div>
<div class="row">
    <div class="gallery top-indent bottom-indent col-sm-9">
        <?php
        $this->title = 'галерея работ';
        $this->params['breadcrumbs'][] = $this->title;
        ?>
        <ul class="thumbnails list-unstyled" data-toggle="lightbox">
            <?php foreach($products as $product) : ?>
                <li class="col-xs-6 col-md-4 shadow-box">
                    <a href="<?= Url::to('@web/images/offset/gallery/' . $product->image . '.png') ?>" class="thumbnail" title="" data-description="изображение">
                        <?= Html::img('@web/images/offset/gallery/thumbnails/' . $product->image . '.png', ['alt' => 'визитные карточки']) ?>
                        <div class="caption">
                            <p class='text-center'><?=$product->vendor_id?></p>
                        </div>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="col-sm-3">
        <ul class="nav nav-pills nav-stacked list-group">
        <?php foreach ($categories as $category) : ?>
            <li>
                <a href="<?= Url::to(['offset/v-cards', 'id' => $category->id]) ?>"
                   class="list-group-item<?php if ($id == $category->id) echo ' active'; ?>">
                <i class="fa fa-chevron-left" aria-hidden="true">&nbsp;&nbsp;</i>
                <?= $category->title ?>
                <span class="badge pull-right"><?= count($category->products) ?></span></a>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>

        <div class="panel panel-primary">
            <div class="panel-heading">Визитные карточки</div>
            <div class="panel-body">
                <?= Html::img('@web/images/bcards.png', ['class' => 'pull-right']) ?>
                Изготовление визиток от 100 шт. цифровой, офсетной или шелкотрафаретной печатью
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Знаки безопасности</div>
            <div class="panel-body">
                <?= Html::img('@web/images/signs.png', ['class' => 'pull-right']) ?>
                Изготовление знаков пожарной безопасности согласно ГОСТ 12.4.026-76 и ДСТУ ISO 6309:2007
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Пластиковые карточки</div>
            <div class="panel-body">
                <?= Html::img('@web/images/pcards.png', ['class' => 'pull-right']) ?>
                Изготовление любых пластиковых карточек: дисконтных, клубных, а также картонных скретч-карт оплаты
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <?= LinkPager::widget(['pagination' => $pages]) ?>
</div>
