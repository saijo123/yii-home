<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_table".
 *
 * @property string $username
 * @property string $useremail
 * @property string $password
 */
class UserTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'useremail'], 'required'],
            [['username'], 'string', 'max' => 10],
            [['useremail'], 'string', 'max' => 52],
            [['password'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'useremail' => 'Useremail',
            'password' => 'Password',
        ];
    }
}
