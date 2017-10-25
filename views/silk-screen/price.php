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
			<caption class="lead text-danger bottom-collapse">до размера А-4</caption>
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
				<?php foreach($a4 as $item) : ?>
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