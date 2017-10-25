<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dc_order".
 *
 * @property integer $id
 * @property integer $count
 * @property string $cover
 * @property integer $barcode
 * @property integer $number
 * @property integer $signature
 * @property integer $magnet
 * @property integer $scketch
 * @property integer $emboss
 * @property integer $design
 * @property string $name
 * @property string $company
 * @property string $phone
 * @property string $email
 * @property string $info
 * @property string $created_at
 * @property string $updated_at
 * @property double $sum
 */
class DcOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dc_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count', 'name', 'phone', 'created_at', 'updated_at', 'sum'], 'required'],
            [['count', 'barcode', 'number', 'signature', 'magnet', 'scketch', 'emboss', 'design'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['sum'], 'number'],
            [['cover'], 'string', 'max' => 20],
            [['name', 'company', 'phone', 'email', 'info'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'count' => 'кол-во',
            'cover' => 'пластик',
            'barcode' => 'штрихкод',
            'number' => 'нумерация',
            'signature' => 'полоса для подписи',
            'magnet' => 'магнитная полоса',
            'scketch' => 'стираемая полоса',
            'emboss' => 'эмбоссирование',
            'design' => 'разработка макета',
            'name' => 'имя',
            'company' => 'компания',
            'phone' => 'тел.',
            'email' => 'e-mail',
            'info' => 'примечание',
            'created_at' => 'дата создания',
            'updated_at' => 'дата изменения',
            'sum' => 'цена',
        ];
    }
}
