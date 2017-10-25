<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\data\Pagination;

class PadPrintingController extends AppController
{

    public $layout = 'site';

    public function actionIndex()
    {
        $this->view->title ='Тампопечать';
        $this->setMeta('Тампопечать', $this->keywords, $this->description);
        return $this->render('index');
    }

    public function actionPrice()
    {
        $this->setMeta('Прайс на тампопечать', $this->keywords, $this->description);
        return $this->render('price');
    }

    public function actionDemands()
    {
        $this->setMeta('Требования к макетам на тампопечать', $this->keywords, $this->description);
        return $this->render('demands');
    }

}