<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<header>
    <div id="top">
        <div class="container">
            <div id="deers">
                <img src="img/deers.png">
            </div>
            <div id="logo">
                <img src="img/logo.png">
            </div>
            <div id="authorization">
                <form action="#" enctype="text/plain" id="header_log_in">
                    <input id="player_login" class="pole" type="text" placeholder="Логин">
                    <input id="player_password" class="pole" type="password" placeholder="Пароль">
                    <a id="log_in" href="">ВХОД</a>
                   <a id="registration" href="#" data-target="#w0" data-toggle="modal">РЕГИСТРАЦИЯ</a>

                </form>
            </div>
        </div>
    </div>
    <div id="main_menu">
        <div class="container">

            <ul type="none">
                <a href="/"><li class="active"><span>ГЛАВНАЯ</span></li></a>
                <a href="/site/registration"><li><span>РЕГИСТРАЦИЯ</span></li></a>
                <a href="/site/rules"><li><span class="long_word">ПРАВИЛА ИГРЫ</span></li></a>
                <a href="/site/faq"><li><span class="long_word">ОТВЕТЫ НА ВОПРОСЫ</span></li></a>
                <a href="/site/news"><li><span>НОВОСТИ</span></li></a>
                <a href="/site/forum"><li><span>ФОРУМ</span></li></a>
            </ul>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="main_container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>
</section>
<footer></footer>


<?php Modal::begin(
    [
        'header' => '<h2>Тест модалки</h2>',

    ]
);
echo 'Текст модалки';
/*    print_r($model);
echo '</pre>';

$form = ActiveForm::begin();
$form->field($model, 'nickname') ;
ActiveForm::end();*/

Modal::end();
?>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
