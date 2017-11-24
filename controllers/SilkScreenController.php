<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use app\models\Product;
use app\models\Category;
use app\models\SSPrice;

class SilkScreenController extends AppController
{

    public $layout = 'site';

    public function actionIndex()
    {
        $this->setMeta('Шелкотрафаретная печать', $this->keywords, $this->description);
        $categories = Category::find()->where('parent_id = 6')->all();
        return $this->render('index', compact('categories'));
    }

    public function actionGallery($id = 1)
    {
        $this->setMeta('Каталог печатной продукции', $this->keywords, $this->description);
        $products = Product::find()->where(['category_id' => $id]);
        $categories = Category::find()->where('parent_id = 6')->all();
        $pages = new Pagination([
            'defaultPageSize' => '21',
            'totalCount' => $products->count(),
        ]);
        $products = $products->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('gallery', compact('products', 'pages', 'id', 'categories'));
    }

    public function actionPrice()
    {
        $this->setMeta('Стоимость шелкотрафаретной печати', $this->keywords, $this->description);
        $a6 = SSPrice::findAll(['size' => 'a6']);
        $a3 = SSPrice::findAll(['size' => 'a3']);
        return $this->render('price', compact('a6', 'a3'));
    }

}