<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="row top-indent">	
	<div class="col-md-9">
		<?php 
		$this->title = 'стоимость печати';
		$this->params['breadcrumbs'][] = ['label' => 'шелкотрафаретная печать', 'url'=> ['silk-screen/']];
		$this->params['breadcrumbs'][] = $this->title; 
		?>
		<h1>Стоимость шелкотрафаретной печати</h1>
		<blockquote class="text-info">
			<p>Стоимость шелкотрафаретной печати на ткани<br> формируется относительно тиража, количества цветов на изображении, а также от размера наносимого рисунка.</p>
		</blockquote>
		<table class="table table-bordered table-hover text-center">
			<caption class="lead text-danger bottom-collapse">до размера А-6</caption>
			<thead>
				<tr>
					<td class="success">тираж</td>
					<td colspan="6" class="info">колличество цветов</td>
				</tr>
				<tr class="text-danger">
					<td>&nbsp;</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($a6 as $item) : ?>
					<tr>
						<td><?= $item->count ?></td>
						<td><?= $item->one ?></td>
						<td><?= $item->two ?></td>
						<td><?= $item->three ?></td>
						<td><?= $item->four ?></td>
						<td><?= $item->five ?></td>
						<td><?= $item->six ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<p><small>Минимальная стоимость ЗАКАЗА –</small> <strong>700 грн.</strong></p>
		<table class="table table-bordered table-hover text-center">
			<caption class="lead text-danger bottom-collapse">до размера А-3</caption>
			<thead>
				<tr>
					<td class="success">тираж</td>
					<td colspan="6" class="info">колличество цветов</td>
				</tr>
				<tr class="text-danger">
					<td>&nbsp;</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($a3 as $item) : ?>
					<tr>
						<td><?= $item->count ?></td>
						<td><?= $item->one ?></td>
						<td><?= $item->two ?></td>
						<td><?= $item->three ?></td>
						<td><?= $item->four ?></td>
						<td><?= $item->five ?></td>
						<td><?= $item->six ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<p>
		<small>Минимальная стоимость ЗАКАЗА – </small><strong>900 грн.</strong><br>
		 	<small>Изготовление МАКЕТА</small> <strong>от 100 грн</strong><br>
		<small>Печать сольвентными красками, флюор и красками с добавками</small> <strong>+20%</strong><br>
		<small>Печать на готовых изделиях</small> <strong>+2 грн/шт</strong><br>
		<small>Услуга глянцевания</small> <strong>+5 грн/шт</strong><br>
		<small>При смене цвета, перестройке под разный крой</small> <strong>+30 грн/действие</strong><br>
		</p>
	</div>
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Дисконтные карточки</div>
			<div class="panel-body">
				<?= Html::img('@web/images/d-cards/card.svg', ['alt' => 'изготовление исконтных карточек', 'class' => 'img img-responsive']) ?>
				<p>Изготовление дисконтных карточек в любом колличестве</p>
			</div>
		</div>
	</div>
</div>