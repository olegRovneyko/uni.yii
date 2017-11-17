<?php

namespace app\components;

use yii\base\Widget;

class SideBarVCardsWidget extends Widget
{
    public function run()
    {
        return $this->render('side_bar_v_cards');
    }
}