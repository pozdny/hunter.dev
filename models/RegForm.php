<?php
namespace app\models;

use yii\base\Model;
use Yii;
use yii\web\User;

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
    public $status;

    public function rules(){
        return [
            [['login','email','password'/*,'repeat_password','captcha'*/,'family','name'], 'required'],
            [['login', 'family', 'name', 'father', 'email', 'phone'], 'filter', 'filter' => 'trim'],
            ['email','email'],
            [['login', 'family', 'name'], 'string', 'min'=> 3,'max' => 255],
            ['password', 'string', 'min'=> 6,'max' => 255],
            ['login','unique','targetClass'=>Users::className(),
                'message'=>'Этот логин уже зарегистрирован'],
            ['email','unique','targetClass'=>Users::className(),
                'message'=>'Эта почта уже зарегистрирована'],
            ['phone','unique','targetClass'=>Users::className(),
                'message'=>'Этот телефон уже зарегистрирован'],
/*            ['status','default','value'=>User::STATUS_ACTIVE,'on'=>'default'],
            ['status','in','range'=>[
                User::STATUS_NOT_ACTIVE,
                User::STATUS_ACTIVE
            ]],*/
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
            //'repeat_password' => 'Повтор пароля*',
            'email' => 'Email*',
            'phone' => 'Телефон',
            //'captcha' => 'Капча*'
        ];
    }

    public function reg(){
        $user = new Users();
        $user->family=$this->family;
        $user->name=$this->name;
        $user->father=$this->father;
        $user->login=$this->login;
        $user->setPassword($this->password);
        $user->email=$this->email;
        $user->phone=$this->phone;
        //$user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}