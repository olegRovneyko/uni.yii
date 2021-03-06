<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="col-md-9">

<?php
$this->params['breadcrumbs'][] = ['label' => 'дисконтные карточки', 'url'=> ['d-card/']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <strong>Размер</strong> макета должен быть 90х57 мм., без скругления углов.
        Вся полезная информация должна вписываться в 86х54мм.
        На примере размер 86х54мм. обозначен горизонтальными и вертикальными направляющими.
    </p>
    <blockquote>
        Почему фон в макете должен быть больше чем размер пластиковой карты?
        Потому что есть допуск на вырубку пластиковых карт примерно +-1мм.
        И следовательно, если размеры фона макета будут равны размеру карты (86х54мм.), то может получиться у края полоса незапечатиного пластика.
        В таком случае придется растянуть фон в макете до нужного размера(90х57мм.).
        Что в свою очередь может нарушить пропорциональность изображений.
    </blockquote>
    <p>
        <strong>Разрешение</strong> растровых изображений в макете должно быть не менее 300 dpi (пикселов на дюйм).
    </p>
    <?= Html::img('@web/images/d-cards/card2.svg', ['width' => '400', 'class' => 'pull-left right-indent']) ?>
    <p>
        <strong>Текст</strong> должен быть переведен в кривые. Располагать текст на макете не ближе 2,5мм от края карты(86х54мм) и не ближе 5мм от магнитной полосы или полосы для подписи.
        Текст, который используется для печати переменной информации, НЕ нужно переводить в кривые. При использовании для переменной информации шрифтов отличных от стандартных, данный шрифт приложить к макету. Все шрифты находятся в папке “C:\WINDOWS\Fonts”.
    </p>
    <p>
        <strong>Эмбоссирование</strong> должно располагаться на карте на расстоянии не менее 5 мм от верхнего, нижнего края карты, и на расстоянии не менее 8 мм от левого и правого края карты.
        Так же эмбоссирование не должно располагаться ближе 5 мм от магнитной полосы.
        При эмбоссировании символы выдавливаются только горизонтально.
    </p>
    <p>
        <strong>Стандартный размер эмбоссируемых символов:</strong>
        Большой шрифт — 3,5 х 4,5 мм;
        Малый шрифт — 2,5 х 3 мм;
    </p>
    <p>
        <strong>Большой шрифт</strong> может содержать только цифры: 0123456789
        <strong>Малый шрифт</strong> — цифры и заглавные буквы английского алфавитов, включая символы: ".", ",", " ’", "-", "/", "&".
    </p>
    <p>
        <strong>Количество символов в одной строке составляет:</strong>
        — для большого шрифта (4,5 мм) — 20 знаков.
        — для малого шрифта (3 мм) — 26 знаков.
    </p>
    <p>
        Если эмбоссированные символы окрашиваются, то <strong>зона окрашивания</strong> (типирования) имеет следующие ограничения :
        от верхнего края карты– не менее 8 мм.
    </p>
    <p>
        Будьте внимательны, чтобы эмбоссирование не забивало важную информацию на обратной стороне карты!
    </p>
    <blockquote>
        Для размещения эмбоссируемых символов на макете используйте шрифт OCR A Std
        16 пунктов для большого шрифта.
        11 пунктов для малого шрифта.
    </blockquote>
    <?= Html::img('@web/images/d-cards/card3.svg', ['width' => '400', 'class' => 'pull-right left-indent']) ?>
    <p>
        <strong>Магнитная полоса.</strong> Магнитные карточки.
        Для стандартных считывающих устройств (ридеров) используется магнитная полоса шириной 12,7 мм (0,5 дюйма). Магнитная полоса располагается на расстоянии 4 мм от края Дисконтной карты.
        Магнитная полоса содержит три дорожки.
        Все три дорожки магнитной полосы обычно используются в крупных банковских платежных системах. В дисконтных картах и картах доступа используется чаше всего одна дорожка (как правило вторая).
    </p>
    <p>
        <strong>Дорожки могут быть закодированы следующим способом:</strong>
        <br><strong>1-дорожка</strong> – может содержать цифробуквенную информацию: до 76 знакомест QWERTYUIOPASDFGHJKLZXCVBNM1234567890 : ; = + ( ) – ‘ " ! @ # ^ & * < > / Все латинские буквы ЗАГЛАВНЫЕ. Информация будет окружена служебными символами: " % " — в начале строки, " ? " в конце строки. Служебный знак „?” добавляется в конце каждой строки и означает конец записи на магнитную полосу и при считывании не отображается.
        <br><strong>2-дорожка</strong> – только цифры: 1234567890 и знак „=”, до 37 знакомест пробел отображается на магнитной полосе знаком „=”, знак „?” означает конец записи на магнитную полосу и при считывании не отображается. Информация будет окружена служебными символами: " ; " — в начале строки, " ? " в конце строки.
        <br><strong>3-дорожка</strong> – только цифры: 1234567890 и знак „=”, до 104 знакомест пробел отображается на магнитной ленте знаком „=”, знак „?” означает конец записи на магнитную ленту и при считывании не отображается. Информация будет окружена служебными символами: " _ " — в начале строки, " ? " в конце строки.
    </p>
    <p>
        <strong>Полоса для подписи.</strong> Не следует располагать ближе 2 мм от края карточки. На карточках с магнитной полосой нельзя располагать подписную панель таким образом, чтобы она попадала в зону проката читающей головки, как на лицевой, так и на оборотной стороне, т.к. это может приводить к засорению ридера и к повреждению самой подписной панели с подписью. Поэтому панель для подписи наносят над/под магнитной полосой с отступом не менее 5 мм от ее края.
    </p>
    <p>
        <strong>Штрих-код</strong> на Дисконтной карточке должен располагаться с отступом не менее 2.5 мм от любого края карточки и от магнитной полосы.
        Конечно, можно сделать штрих код и в срез карты и даже под любым углом. Длина значения, которое можно записать в штрих код зависит от типа штрих-кода.
        К примеру, в штрих код EAN13 можно записать число длинной в 12 знаков.(000000000001 или 125954789562) <br>
        Только при печати под штрих кодом чисел будет 13!!! <br>
        13 число - это контрольная сумма штрих кода. Контрольная сумма подставляется в штрих код автоматически при генерации штрих кода.
        Для занесения штрих кодов-EAN13 в программу учета, к примеру, в 1С, КОНТРОЛЬНАЯ СУММА НЕ НУЖНА!!
        Для импорта штрих кодов EAN13 в 1С, Вам нужно знать только 12 чисел.
    </p>
    <p>
        Многие штрих-кода имеют возможность кодировать не только цифры, но и буквы. Набор кодируемых символов конкретного штрих-кода указывается в соответствующей спецификации.
        При размещении штрих-кодов необходимо учитывать их минимально допустимые размеры для последующего уверенного считывания. Высота штрих-кода должна быть не менее 10 мм.
        <br>
        Возможна печать следующих типов штрих-кодов:
        CodeBar, Code 39(Extended), Code 93(Extended), Code 128 (все типы), EAN/JAN-13, EAN/JAN-8 и т.д. Возможность печати, не указанного выше, штрих-кода дополнительно необходимо уточнить у менеджера.
    </p>
    <p>
        Штрих-код печатается черным цветом, цвет фона, как правило белого цвета - зависит от чувствительности оборудования считывания. Но можно и так.
    </p>
</div>
<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">Шелкотрафаретная печать</div>
        <div class="panel-body">
            <a href="<?= Url::to(['silk-screen/']) ?>">
                <?= Html::img('@web/images/silkscreen/gallery/thumbnails/o005.png', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
                <p>Печать на текстиле и не только</p>
            </a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Тампопечать</div>
        <div class="panel-body">
            <a href="<?= Url::to(['pad-printing/']) ?>">
                <?= Html::img('@web/images/pad-printing/pp.jpg', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
                <p>Тампопечать используется для брендирования самых востребованных промоподарков с плоской или выпуклой поверхностью: ручек, брелков, зажигалок, светоотражателей.</p>
            </a>
        </div>
    </div>
</div>
