<?php
/**
 * Created by PhpStorm.
 * User: konstantin
 * Date: 13.08.17
 * Time: 13:28
 */


namespace app\models;

use yii\db\ActiveRecord;

class Profile extends ActiveRecord
{
    public static function TableName()
    {
        return '{{%profile}}';
    }

    public function Profile()
    {
    }
}

