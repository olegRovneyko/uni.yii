<h2 style="color: #ff0000">Заказ от uniprint.com.ua</h2>
<table style="width: 90%; margin: auto; border: 1px solid #444" cellpadding="15">
    <thead>
    <tr>
        <th style="border: 1px solid #444; background: #eee">
            кол-во
        </th>
        <th style="border: 1px solid #444; background: #eee">
            пластик
        </th>
        <th style="border: 1px solid #444; background: #eee">
            штрихкод
        </th>
        <th style="border: 1px solid #444; background: #eee">
            нумерация
        </th>
        <th style="border: 1px solid #444; background: #eee">
            полоса для подписи
        </th>
        <th style="border: 1px solid #444; background: #eee">
            магнитная полоса
        </th>
        <th style="border: 1px solid #444; background: #eee">
            стирающая полоса
        </th>
        <th style="border: 1px solid #444; background: #eee">
            эмбоссирование
        </th>
        <th style="border: 1px solid #444; background: #eee">
            разработка макета
        </th>
        <th style="border: 1px solid #444; background: #ee0; color: #c00">
            цена
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="border: 1px solid #444; text-align: center">
            <?= $order->count ?>
        </td>
        <td style="border: 1px solid #444; text-align: center"">
            <?php
                switch($order->cover) {
                    case 'white':
                        echo 'белый';
                        break;
                    case 'silver':
                        echo 'серебро';
                        break;
                    case 'gild':
                        echo 'золото';
                        break;
                    default:
                        echo 'не указан';
                }
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->barcode) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->number) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->signature) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->magnet) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->scketch) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->emboss) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center">
            <?php
                if($order->design) echo '<span style="color: green">+</span>'; else echo '-';
            ?>
        </td>
        <td style="border: 1px solid #444; text-align: center; color: #c00"">
            <?= $order->sum ?>
        </td>
    </tr>
    </tbody>
</table>
<p>
    <strong>Имя:</strong> <?= $order->name ?>
</p>
<p>
    <strong>Телефон:</strong> <?= $order->phone ?>
</p>
<?php if (!empty($order->company)) : ?>
<p>
    <strong>Организация:</strong> <?= $order->company ?>
</p>
<?php endif; ?>
<?php if (!empty($order->email)) : ?>
<p>
    <strong>E-mail:</strong> <?= $order->email ?>
</p>
<?php endif; ?>
<div style="border: 1px solid green; margin: 10px 0; padding: 10px; background-color: #cfffcf; color: green">
    <strong>Сообщение:</strong>
    <p>
        <?= $order->info ?>
    </p>
</div>