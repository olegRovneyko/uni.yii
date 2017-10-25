<h2 style="color: #ff0000">Сообщение от uniprint.com.ua</h2>
<p>
    <strong>Имя:</strong> <?= $model->name ?>
</p>
<p>
    <strong>Телефон:</strong> <?= $model->phone ?>
</p>
<?php if (!empty($model->company)) : ?>
<p>
    <strong>Организация:</strong> <?= $model->company ?>
</p>
<?php endif; ?>
<?php if (!empty($model->email)) : ?>
<p>
    <strong>E-mail:</strong> <?= $model->email ?>
</p>
<?php endif; ?>
<div style="border: 1px solid green; margin: 10px 0; padding: 10px; background-color: #cfffcf; color: green">
    <strong>Сообщение:</strong>
    <p>
        <?= $model->text ?>
    </p>
</div>