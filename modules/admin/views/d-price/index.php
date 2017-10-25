<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dcprices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcprice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dcprice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'count',
            'price',
            'gold_cover',
            'barcode',
            // 'number',
            // 'signature',
            // 'magnet',
            // 'scketch',
            // 'emboss',
            // 'design',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
