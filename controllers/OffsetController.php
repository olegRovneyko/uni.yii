<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use app\models\Product;
use app\models\Category;

class OffsetController extends AppController
{

    public $layout = 'site';

    public function actionIndex()
    {

    }

    public function actionVCards($id = 5)
    {
        $this->setMeta('Визитные карточки', $this->keywords, $this->description);

        $products = Product::find()->where(['category_id' => $id, 'available' => '1']);
        $categories = Category::find()->where('parent_id = 7')->all();
        $pages = new Pagination([
            'defaultPageSize' => '21',
            'totalCount' => $products->count(),
        ]);
        $products = $products->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('v-cards', compact('products', 'pages', 'id', 'categories'));
    }

    public function actionPrice()
    {

    }

}