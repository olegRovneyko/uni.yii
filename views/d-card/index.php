<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Пластиковые карточки';
?>
<?php $this->beginBlock('jumbotron'); ?>
<div class="jumbotron silkscreen bottom-indent-collapse">
	<div class="container">
		<div class="row">
			<h1><?= $this->title ?></h1>
			<p>Изготавливаем дисконтные или скидочные карты любыми тиражами. <br> Расчитать стоимость изготовления <strong>пластиковых карт</strong><br> вы можете с помощью встроенного калькулятора.</p>
			<?= Html::a('<i class="fa fa-calculator"></i> расчитать цену', ['d-card/calculate'], ['class' => 'btn btn-info btn-lg']) ?>
		</div>
	</div>
</div>
<?php $this->endBlock(); ?>
<div class="row">
	<div class="col-md-9">		
		<?php 
		$this->params['breadcrumbs'][] = $this->title;
		?>
		<h2><?= $this->title ?></h2>
			<blockquote>
				Мы успешно работаем более 10 лет. За это время мы приобрели огромный опыт работы и профессионализм в своей сфере деятельности. 
				И стали надежным партнером для наших клиентов.
			</blockquote>
			<?= Html::img('@web/images/d-cards/d-card.png', ['alt' => 'технология трафаретной печати', 'class' => 'pull-right', 'width' => '400']) ?>
			<p>Дисконтные карточки существуют на рынке более 60 лет, но актуальность использования только увеличивается. С помощью карт Вы можете вести учет совершенных покупок и планировать бизнес на долгосрочную перспективу. Красивые и яркие дисконтные карты создают ощущения повышенной лояльности и престижности сотрудничества с Вашей компанией.</p>
			<p>Дисконтная карта (купон, ваучер, талон и т. п.) — это средство, дающее возможность получение потребителем скидки в торговых точках продавца (-ов) или участников дисконтного клуба при соблюдении правил использования дисконтных карт.</p>
			<p>Дисконтные карты как правило выпускают сети магазинов, АЗС, автосалоны, спортивные клубы, аптеки, клиники, авиакомпании, салоны красоты, рестораны, клубы, интернет-провайдеры, мобильные операторы, автомастерские, зоомагазины и т. п. для обслуживания собственных программ лояльности клиентов.</p>
			<p>Наше оборудование позволяет изготавливать любую продукцию с применением самых современных технологий, получая изделия наивысшего качества.</p>
			<p>Область применения дисконтных пластиковых карточек очень широка и на сегодняшний день их использование приобретает всё большую популярность. Их используют как небольшие компании так и крупные корпорации. Бонусы и скидки, которые предоставляются ими, позволяют не только удержать клиентов и сделать их постоянными, но это простой и удобный способ показать вашим клиентам внимание и заботу о них.</p>	
		<div class="well text-center top-indent bottom-indent">
			<p class="text-info"><strong class="lead">Изготавливаем дисконтные или скидочные карты любыми тиражами.</strong><br> Расчитать стоимость изготовления пластиковых карт вы можете с помощью встроенного калькулятора.</p>
			<?= Html::a('<i class="fa fa-calculator"></i> ознакомится с ценами', ['d-card/calculate'], ['class' => 'btn btn-info btn-lg']) ?>
		</div>
		<div class="gallery row">
			<div class="col-sm-12">
				<h3 class="text-center">Галерея работ</h3>
			</div>
			<ul class="thumbnails list-unstyled" data-toggle="lightbox">
				<li class="col-xs-6 col-md-4 shadow-box">
					<a href="<?= Url::to('@web/images/d-cards/gallery/d001.png')?>" class="thumbnail" title="" data-description="изображение">
						<img src="<?= Url::to('@web/images/d-cards/gallery/thumbnails/d001.png')?>" alt="">
						<div class="caption">
							<p class='text-center'>Золото моё</p>
						</div>
					</a>
				</li>
				<li class="col-xs-6 col-md-4 shadow-box">
					<a href="<?= Url::to('@web/images/d-cards/gallery/d002.png')?>" class="thumbnail" title="" data-description="изображение">
						<img src="<?= Url::to('@web/images/d-cards/gallery/thumbnails/d002.png')?>" alt="">
						<div class="caption">
							<p class='text-center'>Аскида</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
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
</div>