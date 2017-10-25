<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 19.10.2017
 * Time: 8:53
 */

namespace app\models;

use yii\db\ActiveRecord;

class DCPrice extends ActiveRecord
{
    public static function tableName()
    {
        return 'dc_price';
    }
    
    public static function recoutPrice($data)
    {
        $row = self::takePrice($data['count']);
        $price = $row->price;
        if($data['cover'] != 'white') $price += $row->gold_cover;
        if($data['barcode'] == 'true') $price += $row->barcode;
        if($data['number'] == 'true') $price += $row->number;
        if($data['signature'] == 'true') $price += $row->signature;
        if($data['magnet'] == 'true') $price += $row->magnet;
        if($data['scketch'] == 'true') $price += $row->scketch;
        if($data['emboss'] == 'true') $price += $row->emboss;
        $sum = $price * $data['count'];
        if($data['design'] == 'true') $sum += $row->design;
        return compact('price', 'sum');
    }

    private static function takePrice($count)
    {
        switch($count) {
            case ($count < 100) :
                return self::findOne(['count' => 'до 99']);
            case ($count >= 100 && $count < 300) :
                return self::findOne(['count' => 'от 100 до 299']);
            case ($count >= 300 && $count < 500) :
                return self::findOne(['count' => 'от 300 до 499']);
            case ($count >= 500 && $count < 1000) :
                return self::findOne(['count' => 'от 500 до 999']);
            case ($count >= 1000 && $count < 2000) :
                return self::findOne(['count' => 'от 1000 до 1999']);
            case ($count >= 2000 && $count < 3000) :
                return self::findOne(['count' => 'от 2000 до 2999']);
            case ($count >= 3000 && $count < 5000) :
                return self::findOne(['count' => 'от 3000 до 4999']);
            case ($count >= 5000) :
                return self::findOne(['count' => 'более 5000']);
            default:
                return false;
        }
    }
}