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
            </div>
            <div id="logo">
            </div>
            <div id="authorization">
                <a id="forgot" href="">Забыли пароль?</a>
                <form action="#" enctype="text/plain" id="header_log_in">
                    <input id="player_login" class="pole" type="text" placeholder="Логин">
                    <input id="player_password" class="pole" type="password" placeholder="Пароль">
                    <a id="log_in" href="">ВХОД</a>
                    <a id="registration" href="#">РЕГИСТРАЦИЯ</a>
                </form>
            </div>
        </div>
    </div>
    <div id="main_menu">
        <div class="container">
            <!--<ul type="none">
                <a href="/web/"><li class="active"><span>ГЛАВНАЯ</span></li></a>
                <a href="/web/site/registration"><li><span>РЕГИСТРАЦИЯ</span></li></a>
                <a href="/web/site/rules"><li><span class="long_word">ПРАВИЛА ИГРЫ</span></li></a>
                <a href="/web/site/faq"><li><span class="long_word">ОТВЕТЫ НА ВОПРОСЫ</span></li></a>
                <a href="/web/site/news"><li><span>НОВОСТИ</span></li></a>
                <a href="/web/site/forum"><li><span>ФОРУМ</span></li></a>
            </ul>-->
            <?php
            NavBar::begin([
                'brandLabel' => '',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-main ',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav '],
                'items' => array_filter([
                    ['label' => 'ГЛАВНАЯ', 'url' => ['/']],
                    ['label' => 'РЕГИСТРАЦИЯ', 'url' => ['main/reg']],
                    ['label' => 'ПРАВИЛА', 'url' => ['/site/rules']],
                    ['label' => 'ВОПРОСЫ', 'url' => ['/site/faq']],
                    ['label' => 'НОВОСТИ', 'url' => ['/site/news']],
                    ['label' => 'ФОРУМ', 'url' => ['/site/forum']]
                ]),
            ]);
            NavBar::end();
            ?>
        </div>
    </div>
</header>
<div id="bg"></div>
<div id="branches_left"></div>
<div id="branches_right"></div>
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


<?php /*Modal::begin(
    [
        'header' => '<h2>Тест модалки</h2>',

    ]
);
echo 'Текст модалки';*/
/*    print_r($model);
echo '</pre>';

$form = ActiveForm::begin();
$form->field($model, 'nickname') ;
ActiveForm::end();*/

/*Modal::end();*/
?>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
