<?php
use yii\helpers\Html;
?>
<?php
$this->title = 'Uni-Print';
?>
<div class="wrapper">
    <?php $this->beginBlock('banner'); ?>
    <div class="banner">
        <div class="overlay" style="position: relative">
            <!-- main banner-->
            <h1 class="text-center">Изготовление печатной продукции — <br> Выгодно, качественно и быстро‎</h1>
            <div class="wowload flipInY animated" data-wow-delay="1.5s" class="wow zoomInUp" style="width: 250px; position: absolute; top: 400px; left: 50%; margin-left: -125px;"><img src="images/UniPrint_logo.svg" alt="" class="img img-responsive" style="opacity: .6"></div>
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

    <!-- aplastic-cards -->
    <div id="about" class="plastic-cards">
        <div class="row">
            <div class="col-sm-7 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div id="carousel-about" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <img src="images/carousel/dc1.jpg" class="img-responsive">
                            <a href="http://mvc/disccards" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <img src="images/carousel/dc2.jpg" class="img-responsive">
                            <a href="http://mvc/disccards" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item active">
                            <img src="images/carousel/dc3.jpg" class="img-responsive">
                            <a href="http://mvc/disccards" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="http://thebootstrapthemes.com/live/thebootstrapthemes-monkeydigital/#carousel-about" role="button" data-slide="prev"><i class="fa fa-3x fa-angle-left"></i></a>
                    <a class="right carousel-control" href="http://thebootstrapthemes.com/live/thebootstrapthemes-monkeydigital/#carousel-about" role="button" data-slide="next"><i class="fa fa-3x fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-sm-5 wowload fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="spacer"><h2><i class="fa fa-credit-card-alt"></i> Пластиковые карточки</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="more">
                        <a href="http://mvc/disccards" class="btn btn-success" style="padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;"><i class="fa fa-calculator"></i> рассчитайте стоимость заказа</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- plastic-cards -->

    <!-- silkscreen -->
    <div id="works" class="silkscreen">
        <div class="row">

            <div class="col-sm-5 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="spacer">
                    <h2><i class="fa fa-cube"></i> Шелкотрафаретная печать</h2>
                    <p>Трафаретная (шелкотрафаретная) печать является универсальным методом нанесения изображения. Основное преимущество данного вида производства заключается в том, что можно нанести рисунок практически на любой материал и любую поверхность.</p>
                    <p>Мы предлагаем свои услуги в сфере полиграфии, наша специализация «Шелкотрафаретная печать по текстилю». Преимущественно это печать на футболках, майках, кепках, зонтах, сумках, крое любой формы и других изделиях из ткани.</p>
                </div>
                <div class="more">
                    <?= Html::a('<i class="fa fa-info-circle"></i> подробнее</a>', ['silk-screen/gallery'], ['class' => 'btn btn-success pull-right', 'style' => 'padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;']) ?>
                </div>
            </div>

            <div class="col-sm-7 wowload fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <div id="carousel-works" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/carousel/ss1.jpg" class="img-responsive">
                            <a href="http://mvc/silkscreen" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <img src="images/carousel/ss2.jpg" class="img-responsive">
                            <a href="http://mvc/silkscreen" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                        <div class="item">
                            <img src="images/carousel/ss3.jpg" class="img-responsive">
                            <a href="http://mvc/silkscreen" class="view">
                                <i class="fa fa-external-link"></i> перейти
                            </a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="http://thebootstrapthemes.com/live/thebootstrapthemes-monkeydigital/#carousel-works" role="button" data-slide="prev">
                        <i class="fa fa-3x fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="http://thebootstrapthemes.com/live/thebootstrapthemes-monkeydigital/#carousel-works" role="button" data-slide="next">
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
                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" placeholder="имя" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" placeholder="организация" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" placeholder="телефон" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" placeholder="e-mail" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows="5" placeholder="сообщение" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <img src="http://via.placeholder.com/100x60" id="captcha" alt="">
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded",
                                        function() {
                                            $('#captcha').hover(
                                                function() {
                                                    console.log('in');
                                                    $(this).parent().css({'cursor': 'pointer', 'position': 'relative'}).append('<i id="spinner" style="color:white; position: relative; top: -36px; left: 36px" class="fa fa-spinner fa-spin fa-lg fa-fw"></i><span id="re" style="color: #31708f; position: relative; top: -70px; left: 120px;">обновить</span>');
                                                },
                                                function() {
                                                    $('#spinner, #re').remove();
                                                    console.log('out');
                                                }
                                            );
                                        }
                                    );
                                </script>
                                <div class="form-group col-md-5" style="margin-top: 24px;">
                                    <input type="text" name="captcha" placeholder="код подтверждения" class="form-control">
                                </div>
                                <div class="form-group col-md-4" style="margin-top: 24px;">
                                    <button class="btn btn-success pull-right" style="padding-top: 7px; padding-bottom: 7px; padding-left: 20px; padding-right: 20px;"><i class="fa fa-paper-plane"></i> отправить</button>
                                </div>
                            </div>
                        </form>
                        <hr class="top-indent-collapse">
                        <div class="row">
                            <div class="phone col-sm-6">
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;095-000-00-01
                            </div>
                            <div class="email col-sm-6">
                                <i class="fa fa-envelope"></i>&nbsp;&nbsp;boss@uniptint.ua
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

