<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
            <div id="profile">
                <p>Добро пожаловать! <span>Имя игрока</span></p>
            </div>
        </div>
    </div>
    <div id="main_menu">
        <div class="container">
            <ul type="none">
                <a href="#"><li class="active"><span>ГЛАВНАЯ</span></li></a>
                <a href="#"><li><span>РЕГИСТРАЦИЯ</span></li></a>
                <a href="#"><li><span class="long_word">ПРАВИЛА ИГРЫ</span></li></a>
                <a href="#"><li><span class="long_word">ОТВЕТЫ НА ВОПРОСЫ</span></li></a>
                <a href="#"><li><span>НОВОСТИ</span></li></a>
                <a href="#"><li><span>ФОРУМ</span></li></a>
            </ul>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="main_container">

        </div>
    </div>
</section>
<footer></footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
