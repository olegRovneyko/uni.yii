<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\captcha\Captcha;
?>
<?php
?>
<div class="wrapper">
    <?php $this->beginBlock('banner'); ?>
    <div class="banner">
        <div class="overlay" style="position: relative">
            <!-- main banner-->
            <h1 class="text-center">Изготовление печатной продукции — <br> Выгодно, качественно и быстро‎</h1>
            <div class="wowload flipInY animated" data-wow-delay="1.5s" class="wow zoomInUp" style="width: 250px; position: absolute; top: 400px; left: 50%; margin-left: -125px;">
                <?= Html::img('@web/images/UniPrint_logo.svg', ['alt' => '', 'class' => 'img img-responsive']) ?>
            </div>
            <!-- main banner-->

            <!-- service -->
            <div class="service row text-center  wowload fadeInDownBig animated" style="visibility: visible; animation-name: fadeInDownBig;">
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-handshake-o  fa-4x"></i><h3>долговременное сотрудничество</h3>
                    <p>взаимовыгодное сотрудничество<br>подразумевает бонусы</p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-pencil  fa-4x"></i><h3>изготовление<br> макетов</h3>
                    <p>творческий подход к виду<br>вашей конечной продукции</p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-gear  fa-4x"></i><h3>Собственное производство</h3>
                    <p>вы работаете с нами <br>без посредников</p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-calendar-check-o fa-4x"></i><h3>Оперативное изготовление</h3>
                    <p>вы получаете заказ<br>уже «вчера»</p>
                </div>
            </div>
            <!-- service -->
        </div>
    </div>
    <?php $this->endBlock(); ?>

    <!-- plastic-cards -->
    <div id="plastic-cards" class="plastic-cards">
        <div class="row">
            <div class="col-sm-5 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="spacer"><h2><i class="fa fa-credit-card-alt"></i> Пластиковые карточки</h2>
                    <p>Область применения дисконтных пластиковых карточек очень широка и на сегодняшний день их использование приобретает всё большую популярность. Их используют как небольшие компании так и крупные корпорации. </p>
                    <p>Бонусы и скидки, которые предоставляются ими, позволяют не только удержать клиентов и сделать их постоянными, но это простой и удобный способ показать вашим клиентам внимание и заботу о них.</p>
                    <div class="more">
                        <a href="<?= Url::to(['d-card/calculate']) ?>" class="btn btn-success pull-right" style="padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;"><i class="fa fa-calculator"></i> рассчитайте стоимость заказа</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 wowload fadeInRight animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div id="carousel-plastic-cards" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <?= Html::img('@web/images/carousel/dc1.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['d-card/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <?= Html::img('@web/images/carousel/dc2.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['d-card/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item active">
                            <?= Html::img('@web/images/carousel/dc3.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['d-card/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-plastic-cards" role="button" data-slide="prev"><i class="fa fa-3x fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#carousel-plastic-cards" role="button" data-slide="next"><i class="fa fa-3x fa-angle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- plastic-cards -->

    <!-- pad-printing -->
    <div id="pad-printing" class="plastic-cards">
        <div class="row">
            <div class="col-sm-7 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div id="carousel-pad-printing" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <?= Html::img('@web/images/carousel/pp1.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['pad-printing/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <?= Html::img('@web/images/carousel/pp2.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['pad-printing/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item active">
                            <?= Html::img('@web/images/carousel/pp4.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['pad-printing/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-pad-printing" role="button" data-slide="prev"><i class="fa fa-3x fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#carousel-pad-printing" role="button" data-slide="next"><i class="fa fa-3x fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-sm-5 wowload fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="spacer"><h2><i class="fa fa-cubes" aria-hidden="true"></i> Тампопечать</h2>
                    <p>Тампопечать — одна из самых популярных технологий нанесения изображения на промопродукцию и бизнес-подарки. Это вид глубокой печати, в процессе которой краска переносится с печатной формы на изделие с помощью специального тампона.</p>
                    <p>Тампопечать используют для нанесения фирменной символики, в первую очередь, на предметы из пластика и ПВХ — ручки, брелки, флешки, часы и другие аксессуары для офиса. Наиболее популярна тампопечать на пластике.</p>

                    <div class="more">
                        <?= Html::a('<i class="fa fa-info-circle"></i> подробнее</a>', ['pad-printing/'], ['class' => 'btn btn-success', 'style' => 'padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pad-printing -->

    <!-- silkscreen -->
    <div id="silkscreen" class="silkscreen">
        <div class="row">

            <div class="col-sm-5 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="spacer">
                    <h2><i class="fa fa-cube"></i> Шелкотрафаретная печать</h2>
                    <p>Трафаретная (шелкотрафаретная) печать является универсальным методом нанесения изображения. Основное преимущество данного вида производства заключается в том, что можно нанести рисунок практически на любой материал и любую поверхность.</p>
                    <p>Мы предлагаем свои услуги в сфере полиграфии, наша специализация «Шелкотрафаретная печать по текстилю». Преимущественно это печать на футболках, майках, кепках, зонтах, сумках, крое любой формы и других изделиях из ткани.</p>
                </div>
                <div class="more">
                    <?= Html::a('<i class="fa fa-info-circle"></i> подробнее</a>', ['silk-screen/'], ['class' => 'btn btn-success pull-right', 'style' => 'padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;']) ?>
                </div>
            </div>

            <div class="col-sm-7 wowload fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div id="carousel-silkscreen" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <?= Html::img('@web/images/carousel/ss1.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['silk-screen/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <?= Html::img('@web/images/carousel/ss2.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['silk-screen/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <?= Html::img('@web/images/carousel/ss3.jpg', ['class' => 'img img-responsive']) ?>
                            <a href="<?= Url::to(['silk-screen/']) ?>" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-silkscreen" role="button" data-slide="prev">
                        <i class="fa fa-3x fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#carousel-silkscreen" role="button" data-slide="next">
                        <i class="fa fa-3x fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- silkscreen -->

    <div id="contact" class="contact">
        <div class="row">
            <div class="col-sm-7 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2610.178776748722!2d33.43009831568439!3d49.14022997931613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d751f910b030c9%3A0xcf2d96a0075c0490!2z0LLRg9C70LjRhtGPINCc0L7Qu9C-0LTRltC20L3QsCwgMzksINCa0YDQtdC80LXQvdGH0YPQuiwg0J_QvtC70YLQsNCy0YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1505368451539" width="786" height="510" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- <img src="./Monkey Digital_files/map.jpg" class="img-responsive"> -->
            </div>
            <div class="col-sm-5 wowload fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="spacer">
                    <h2><i class="fa fa-pencil"></i> Связаться с нами</h2>
                    <div class="wowload fadeInRightBig animated" style="visibility: visible; animation-name: fadeInRightBig;">

                        <?php $form = ActiveForm::begin(['options'=>['id'=>'sendForm']]) ?>
                            <div class="row">
                                <?= $form->field($model, 'name', ['options'=>['class'=>'col-md-6']])
                                ->textInput(['autofocus' => false, 'placeholder'=>'имя'])->label(false) ?>
                                <?= $form->field($model, 'company', ['options'=>['class'=>'col-md-6']])->textInput(['placeholder'=>'организация'])->label(false) ?>
                            </div>
                            <div class="row">
                            	<?= $form->field($model, 'phone', ['options'=>['class'=>'col-md-6']])
                                ->textInput(['autofocus' => false, 'placeholder'=>'телефон'])->label(false) ?>
                                <?= $form->field($model, 'email', ['options'=>['class'=>'col-md-6']])->textInput(['placeholder'=>'e-mail'])->label(false) ?>
                            </div>
                            <?= $form->field($model, 'text')->textarea(['rows' => 5, 'placeholder'=>'сообщение'])->label(false) ?>

                            <div class="row">
                            	<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="col-md-3">{image}</div><div class="col-md-5">{input}</div>',
                                'options' => ['placeholder'=>'код подтверждения', 'class' => 'form-control']])->label(false) ?>
                                <?= Html::submitButton('<i class="fa fa-paper-plane"></i> отправить', ['class' => 'btn btn-success col-md-4', 'style' => 'padding: 7px 20px; margin-top: -4px']) ?>
                            </div>
                        <?php ActiveForm::end() ?>

                        <hr class="top-indent-collapse">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;068-650-50-55, 097-274-51-21
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;info@uniptint.com.ua
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div style="position: fixed; left: 50%; top: 100px; width: 600px; background-color: #31708f; margin-left: -321px; color: #fff; text-align: center; padding: 20px; border: 1px solid #fff"
         class="wowload flipInY animated" data-wow-delay="0.5s">
        <i class="fa fa-window-close" aria-hidden="true" style="position: absolute; top: 10px; right: 10px; cursor: pointer"
        onclick="$(this).parent('div').hide()"></i>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
    <?php endif; ?>
    <?php if (Yii::$app->session->hasFlash('error')) : ?>
    <div style="position: fixed; left: 50%; top: 100px; width: 600px; background-color: #ff0000; margin-left: -321px; color: #fff; text-align: center; padding: 20px; border: 1px solid #fff"
         class="wowload flipInY animated" data-wow-delay="0.5s">
        <i class="fa fa-window-close" aria-hidden="true" style="position: absolute; top: 10px; right: 10px; cursor: pointer"
        onclick="$(this).parent('div').hide()"></i>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
    <?php endif; ?>
    <?php
    $url = Url::to(['silk-screen/gallery']);
$script = <<<JS
    var content = '<p class="text-center"><a href="$url" class="btn btn-success"><i class="fa fa-external-link"></i><b> перейти</b></a></p>';
    $('[data-toggle="popover"]').popover({
        placement: 'auto right',
        html: true,
        title: '<lead>Каталог печати по текстилю</lead>',
        content: content,
        delay: {show: 200, hide: 200}
    });
    $('[data-toggle="popover"]').popover('show');
    $('.popover').addClass('wow shake animated').data('wow-iteration', 20).data('wow-duration', '3s').css('opacity', '.85');
JS;
$this->registerJs($script, yii\web\View::POS_LOAD);
    ?>