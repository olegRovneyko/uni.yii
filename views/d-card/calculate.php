<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>
<div class="col-md-9">

    <?php
    $this->params['breadcrumbs'][] = ['label' => 'Дисконтные карточки', 'url'=> ['d-card/']];
    $this->params['breadcrumbs'][] = $this->title; 
 ?>
<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'cardConstructor']]) ?>
    <div class="row">
        <section class="col-md-6" id="priceMaker">
            <div class="card-image">
                <object type="image/svg+xml" data="<?= Url::to('@web/images/d-cards/card.svg') ?>" width="100%">
                </object>
            </div>
            <h3>Конструктор карт</h3>

            <div class="row">
                <div class="col-md-6"><?= $form->field($order, 'count')->input('number', ['min' => 10, 'step' => 10, 'value' => 10]) ?></div>
                <div class="col-md-6"><?php echo $form->field($order, 'cover')->dropDownList([
                    'white' => 'белый',
                    'silver' => 'серебрянный',
                    'gold'=>'золотой'
                    ]/*[,

                        'prompt' => 'Выберите цвет'
                    ]*/); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($order, 'barcode')->checkbox() ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($order, 'number')->checkbox() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($order, 'signature')->checkbox() ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($order, 'magnet')->checkbox() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($order, 'scketch')->checkbox() ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($order, 'emboss')->checkbox() ?>
                </div>
            </div>
            <?= $form->field($order, 'design')->checkbox() ?>
            <div class="hidden-fields">
                <?= $form->field($order, 'sum')->hiddenInput()->label(false); ?>
            </div>
            <div class="panel panel-info price-info">
                <div class="panel-body lead">
                    цена за 1 карту: <span id="single-price" class="pull-right text-danger"></span><br>
                    к оплате: <span id="full-price" class="pull-right text-danger"></span>
                </div>
            </div>

        </section>
        <section class="col-md-6">
            <h3>Оформление заказа</h3>
            <?= $form->field($order, 'name') ?>
            <?= $form->field($order, 'company') ?>
            <?= $form->field($order, 'phone') ?>
            <?= $form->field($order, 'email')->input('email') ?>
            <?= $form->field($order, 'info')->textarea(['rows' => 6]) ?>
            <?= $form->field($order, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8" style="margin-top: 10px">{input}</div></div>',
            ]) ?>
            <?= Html::submitButton('оформить заказ', ['class' => 'btn btn-success']) ?>
        </section>
    </div>
<?php ActiveForm::end() ?>

</div>
<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">Тампопечать</div>            
        <div class="panel-body">
            <a href="<?= Url::to(['pad-printing/']) ?>">
                <?= Html::img('@web/images/pad-printing/pp.jpg', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
                <p>Тампопечать используется для брендирования самых востребованных промоподарков с плоской или выпуклой поверхностью: ручек, брелков, зажигалок, светоотражателей.</p>
            </a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Шелкотрафаретная печать</div>            
        <div class="panel-body">
        <a href="<?= Url::to(['silk-screen/']) ?>">
            <?= Html::img('@web/images/silkscreen/gallery/thumbnails/o005.png', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
            <p>Печать на текстиле и не только</p>
        </a>
        </div>  
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", checkPriceForm);

    function checkPriceForm() {
        $('#priceMaker').on('change', function() {
            var data = {};
            data.count = $('#dcorder-count').val();
            data.cover = $('#dcorder-cover').val();
            data.barcode = $('#dcorder-barcode').is(':checked');
            data.number = $('#dcorder-number').is(':checked');
            data.signature = $('#dcorder-signature').is(':checked');
            data.magnet = $('#dcorder-magnet').is(':checked');
            data.scketch = $('#dcorder-scketch').is(':checked');
            data.emboss = $('#dcorder-emboss').is(':checked');
            data.design = $('#dcorder-design').is(':checked');
           $.ajax({
                url: "<?= Url::to(['d-card/calculate']) ?>",
                data: {data: data},
                type: 'post',
                success: function (res) {
                    if(!res) {
                        alert('error???');
                    } else {
                        res = $.parseJSON(res)
                        $('.price-info #single-price').text(res.price);
                        $('.price-info #full-price').text(res.sum);
                        $('#dcorder-sum').val(res.sum);
                        console.log(res);
                    }
                },
                error: function () {
                    alert('error!!!');
                }
            });
        });
    }
</script>