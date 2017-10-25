<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DCOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dcorder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?php /* echo $form->field($model, 'cover')->textInput(['maxlength' => true])*/ ?>
    <?= $form->field($model, 'cover')->dropDownList(['white' => 'белый', 'silver' => 'серебро', 'gold' => 'золото']) ?>

    <?= $form->field($model, 'barcode')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'signature')->textInput() ?>

    <?= $form->field($model, 'magnet')->textInput() ?>

    <?= $form->field($model, 'scketch')->textInput() ?>

    <?= $form->field($model, 'emboss')->textInput() ?>

    <?= $form->field($model, 'design')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
