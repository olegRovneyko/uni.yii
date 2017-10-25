<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DCPrice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dcprice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'count')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'gold_cover')->textInput() ?>

    <?= $form->field($model, 'barcode')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'signature')->textInput() ?>

    <?= $form->field($model, 'magnet')->textInput() ?>

    <?= $form->field($model, 'scketch')->textInput() ?>

    <?= $form->field($model, 'emboss')->textInput() ?>

    <?= $form->field($model, 'design')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
