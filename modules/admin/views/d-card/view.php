<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DCOrder */

$this->title = 'Заказ № ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcorder-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'count',
            //'cover',
            [
                'attribute' => 'cover',
                'value' => function($model)
                {
                    switch($model->cover) {
                        case 'white':
                            return 'золото';
                        case 'silver':
                            return 'серебро';
                        case 'gold':
                            return 'золото';
                    }
                }
            ],
            //'barcode',
            [
                'attribute' => 'barcode',
                'value' => ($model->barcode) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            //'number',
            [
                'attribute' => 'number',
                'value' => ($model->number) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            //'signature',
            [
                'attribute' => 'signature',
                'value' => ($model->signature) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            //'magnet',
            [
                'attribute' => 'magnet',
                'value' => ($model->magnet) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            //'scketch',
            [
                'attribute' => 'scketch',
                'value' => ($model->scketch) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            //'emboss',
            [
                'attribute' => 'emboss',
                'value' => ($model->emboss) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            //'design',
            [
                'attribute' => 'design',
                'value' => ($model->design) ? '<span class="text-success fa fa-check"></span>' : '<span class="text-danger fa fa-times"></span>',
                'format' => 'html',
            ],
            'name',
            'company',
            'phone',
            'email:email',
            'info',
            'created_at',
            'updated_at',
            'sum',
        ],
    ]) ?>

</div>
