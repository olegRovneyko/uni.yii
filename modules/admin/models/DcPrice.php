<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dc_price".
 *
 * @property integer $id
 * @property string $count
 * @property double $price
 * @property double $gold_cover
 * @property double $barcode
 * @property double $number
 * @property double $signature
 * @property double $magnet
 * @property double $scketch
 * @property double $emboss
 * @property double $design
 */
class DcPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dc_price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count', 'price', 'gold_cover', 'barcode', 'number', 'signature', 'magnet', 'scketch', 'emboss', 'design'], 'required'],
            [['price', 'gold_cover', 'barcode', 'number', 'signature', 'magnet', 'scketch', 'emboss', 'design'], 'number'],
            [['count'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'count' => 'Count',
            'price' => 'Price',
            'gold_cover' => 'Gold Cover',
            'barcode' => 'Barcode',
            'number' => 'Number',
            'signature' => 'Signature',
            'magnet' => 'Magnet',
            'scketch' => 'Scketch',
            'emboss' => 'Emboss',
            'design' => 'Design',
        ];
    }
}
