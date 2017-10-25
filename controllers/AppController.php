<?php

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller{

    public $keywords = 'UniPrint, Юнипринт, Унипринт, типография, рекламное агентство, дизайн студия, Кременчуг';
    public $description = 'рекламно-полиграфическая компания UniPrint (ЮниПринт) - рекламное агентство полного цикла и типография специальных видов печати.';

    protected function setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }

}