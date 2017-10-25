<?php

namespace app\controllers;

use app\models\DCPrice;
use Yii;
use app\models\DCOrder;

class DCardController extends AppController
{
    public $layout = 'site';

    public function actionIndex()
    {
    	return $this->render('index');
    }

    public function actionCalculate()
    {
        $this->setMeta('Расчет стоимости', $this->keywords, $this->description);
        if(Yii::$app->request->isAjax) {
            extract(Yii::$app->request->post());
            $price = DCPrice::recoutPrice($data);
            return json_encode($price);
        } else {
            $order = new DCOrder();
            if ($order->load(Yii::$app->request->post())) {
                if($order->save()) {
                    $order->contact(Yii::$app->params['adminEmail'], ['order' => $order]);
                    Yii::$app->session->setFlash('success', 'Ваш заказ принят. Менеджер свяжется с вами в ближайшее время');
                    return $this->refresh();
                } else {
                    Yii::$app->session->setFlash('error', 'Во время отправки сообщения произошла ошибка');
                }
            }

            return $this->render('calculate', compact('order'));
        }

    }

    public function actionDemands()
    {
        $this->setMeta('Требования к макету дисконтной карты', $this->keywords, $this->description);
        return $this->render('demands');
    }

}