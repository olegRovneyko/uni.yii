<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="panel panel-primary">
    <div class="panel-heading">Пластиковые карточки</div>
    <a href="<?= Url::to(['d-card/']) ?>">
        <div class="panel-body">
            <?= Html::img('@web/images/pcards.png', ['class' => 'pull-right']) ?>
            Изготовление любых пластиковых карточек: дисконтных, клубных, а также картонных скретч-карт оплаты
        </div>
    </a>
</div>

