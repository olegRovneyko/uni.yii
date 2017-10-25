<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DCOrder */

$this->title = 'Create Dcorder';
$this->params['breadcrumbs'][] = ['label' => 'Dcorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
