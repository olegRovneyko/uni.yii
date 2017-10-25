<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DCOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dcorder-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'count')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cover')->dropDownList(['white' => 'белый', 'silver' => 'серебро', 'gold' => 'золото']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'barcode')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'number')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
    <?= $form->field($model, 'signature')->textInput() ?>
        </div>
        <div class="col-md-3">
    <?= $form->field($model, 'magnet')->textInput() ?>
        </div>
        <div class="col-md-3">
    <?= $form->field($model, 'scketch')->textInput() ?>
        </div>
        <div class="col-md-3">
    <?= $form->field($model, 'emboss')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'design')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
    <?= $form->field($model, 'created_at')->textInput() ?>
        </div>
        <div class="col-md-3">
    <?= $form->field($model, 'updated_at')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'sum')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
