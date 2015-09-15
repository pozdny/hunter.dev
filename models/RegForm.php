<?php
namespace app\models;

use yii\base\Model;
use Yii;

class RegForm extends Model{
    public $nickname;
    public $email;
    public $password;
    public $repeat_password;
    public $captcha;

    public function rules(){
        return [
          [
              ['nickname','email','password','repeat_password','captcha'],
              'required'
          ]
        ];
    }
}