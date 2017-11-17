<?php

namespace app\components;

use yii\base\Widget;

class SideBarDCardsWidget extends Widget
{
    public function run()
    {
        return $this->render('side_bar_d_cards');
    }
}