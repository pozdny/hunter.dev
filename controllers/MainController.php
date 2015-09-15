<?php

namespace app\controllers;

use Yii;
use app\models\RegForm;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    { echo '123';
        $model = new RegForm();
        return $this->render('index',
            ['model' => $model]);
    }
    public function actionReg(){ echo '4444';
        $model = new RegForm();
        return $this->render(
            'main',
            ['model' => $model]
        );
    }

}
