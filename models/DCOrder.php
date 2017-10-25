<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 18.10.2017
 * Time: 10:24
 */

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
use Yii;

class DCOrder extends ActiveRecord
{
    public static function tableName()
    {
        return 'dc_order';
    }

    public $verifyCode;

    public function rules()
    {
        return [
            [['count', 'cover', 'name', 'phone'], 'required'],
            ['email', 'email'],
            [['name', 'email'], 'string', 'max' => 255],
            [['barcode', 'number', 'signature', 'magnet', 'scketch', 'emboss', 'design', 'date', 'company', 'sum', 'created_at', 'updated_at'], 'safe'],
            ['info', 'trim'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'count' => 'колличество',
            'cover' => 'пластик',
            'barcode' => 'штрихкод',
            'number' => 'нумерация',
            'signature' => 'полоса для подписи',
            'magnet' => 'магнитная полоса',
            'scketch' => 'скретч полоса',
            'emboss' => 'эмбоссирование',
            'design' => 'разработка макета',
            'verifyCode' => 'проверочный код',
            'name' => 'имя',
            'company' => 'организация',
            'phone' => 'телефон',
            'email' => 'e-mail',
            'info' => 'дополнительная информация',
        ];
    }

    public function contact($email, $data = [])
    {
        Yii::$app->mailer->compose('dc_card', $data)
            ->setTo($email)
            ->setFrom(['oleg.rovneyko@gmail.com'])
            ->setSubject('Заказ на изготовление пластиковых карточек')
            ->setTextBody($this->info)
            ->send();
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }

}