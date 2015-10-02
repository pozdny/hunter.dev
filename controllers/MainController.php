<?php

namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\Users;

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

        if ($model->load(Yii::$app->request->post()) && $model->validate()):
            if($model->reg()):
                /*return $this->goHome();*/
                Yii::$app->session->setFlash('warning', 'Регистрация прошла успешно');
                Yii::warning('Регистрация прошла успешно');
            else:
                Yii::$app->session->setFlash('error', 'Возникла ошибка при регистрации');
                Yii::error('Ошибка при регистрации');

                return $this->refresh();/*echo '<pre>'; print_r( Yii::$app->session); echo '</pre>';*/
            endif;
        endif;

        return $this->render(
            'reg',
            ['model' => $model]
        );
    }

}
