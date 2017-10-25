<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Product extends ActiveRecord
{

    public static function tableName()
    {
        return 'product';
    }

    /*public function getImagePath()
    {
        return 'images/offset/gallery/' . $this->image . '.png';
    }

    public function getThumbImagePath()
    {
        return 'images/offset/gallery/thumbnails/' . $this->image . '.png';
    }*/

    public function getSSCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}