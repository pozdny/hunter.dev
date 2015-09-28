<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $login
 * @property string $family
 * @property string $name
 * @property string $father
 * @property string $email
 * @property string $pass
 * @property string $phone
 * @property string $rights
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_NOT_ACTIVE = 1;
    const STATUS_ACTIVE = 10;

    public $password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'family', 'name', 'father', 'email', 'password', 'phone', 'rights'], 'filter', 'filter' => 'trim'],
            [['login', 'family', 'name', 'father', 'email', 'password', 'phone', 'rights'], 'required'],
            ['email','email'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['login', 'family', 'name', 'pass'], 'string', 'min'=> 3,'max' => 255],
            ['login','unique','message'=>'Этот логин уже зарегистрирован'],
            ['email','unique','message'=>'Эта почта уже зарегистрирована'],
            ['phone','unique','message'=>'Этот телефон уже зарегистрирован']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'family' => 'Family',
            'name' => 'Name',
            'father' => 'Father',
            'email' => 'Email',
            'password' => 'Pass',
            'phone' => 'Phone',
            'rights' => 'Rights',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
