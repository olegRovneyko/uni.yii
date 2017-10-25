<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 27.09.2017
 * Time: 8:53
 */

namespace app\models;

use yii\base\Model;


class SendForm extends Model
{
    public $name;
    public $company;
    public $phone;
    public $email;
    public $text;
    public $verifyCode;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone', 'text'], 'required', 'message' => 'заполните поле'],
            // email has to be a valid email address
            ['email', 'email', 'message' => 'поле не содержит адрес'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'message' => 'код неверный'],
            ['company', 'trim'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => 'проверочный код',
        ];
    }

}