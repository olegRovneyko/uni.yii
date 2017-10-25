<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказ на изготовление дисконтных карточек';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcorder-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'count',
            // 'cover',
            // 'barcode',
            // 'number',
            // 'signature',
            // 'magnet',
            // 'scketch',
            // 'emboss',
            // 'design',
            'name',
            'company',
            'phone',
            'email:email',
            'info',
            'created_at',
            // 'updated_at',
            'sum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
