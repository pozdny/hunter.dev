<?php
namespace app\models;

use yii\base\Model;
use Yii;

class RegForm extends Model{
    public $family;
    public $name;
    public $father;
    public $login;
    public $password;
    public $repeat_password;
    public $email;
    public $phone;
    public $captcha;

    public function rules(){
        return [
          [
              ['login','email','password','repeat_password','captcha','family','name'],
              'required'
          ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'family' => 'Фамилия*',
            'name' => 'Имя*',
            'father' => 'Отчество',
            'login' => 'Логин в игре*',
            'password' => 'Пароль*',
            'repeat_password' => 'Повтор пароля*',
            'email' => 'Email*',
            'phone' => 'Телефон',
            'captcha' => 'Капча*'
        ];
    }
}