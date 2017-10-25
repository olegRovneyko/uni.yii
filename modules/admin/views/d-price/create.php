<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DCPrice */

$this->title = 'Create Dcprice';
$this->params['breadcrumbs'][] = ['label' => 'Dcprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcprice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
