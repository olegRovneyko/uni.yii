<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="panel panel-primary">
    <div class="panel-heading">Визитные карточки</div>
    <a href="<?= Url::to(['offset/v-cards']) ?>">
        <div class="panel-body">
            <?= Html::img('@web/images/bcards.png', ['class' => 'pull-right']) ?>
            Изготовление визиток от 100 шт. цифровой, офсетной или шелкотрафаретной печатью
        </div>
    </a>
</div>

