<?php

namespace app\controllers;

use Yii;

class DecolController extends AppController
{
    public $layout = 'site';

    public function actionIndex()
    {
        return $this->render('index');
    }
}