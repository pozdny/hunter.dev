<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\AlertWidget;
use yii\captcha\Captcha;


/* @var $this yii\web\View */
/* @var $model app\models\RegForm */
/* @var $form ActiveForm */
?>
<div class="main-reg">

    <?php $form = ActiveForm::begin(); ?>
        <?= AlertWidget::widget() ?>
        <?= $form->field($model, 'family') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'father') ?>
        <?= $form->field($model, 'login') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'repeat_password')->passwordInput() ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'captcha')->widget(Captcha::className()) ?>

        <div class="form-group">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- main-reg -->
