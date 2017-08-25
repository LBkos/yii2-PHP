<?php
/**
 * Created by PhpStorm.
 * User: konstantin
 * Date: 13.08.17
 * Time: 13:28
 */



namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;


class Profile extends ActiveRecord
{
    public static function TableName()
    {
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id ]);
    }



    public function getId()
    {
        return $this->getPrimaryKey();
    }


}

