<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class SSPrice extends ActiveRecord
{ 
	public static function tableName()
	{
		return 'ss_price';
	}
}