<?php

namespace app\controllers;

use Yii;
use app\models\RegForm;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new RegForm();
        return $this->render('index',
            ['model' => $model]);
    }
    public function actionReg(){
        $model = new RegForm();
        return $this->render(
            'reg',
            ['model' => $model]
        );
    }

}
