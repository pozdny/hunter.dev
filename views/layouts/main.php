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
<div id="branches_left"></div>
<div id="branches_right"></div>
<section>
    <div class="container">
        <div class="main_container">
            <h4>Уважаемые охотники</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>

            <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>

            <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.</p>

            <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc</p>
            <hr>
            <div id="news">
                <h4>Свежие новости</h4>
                <ul type="none">
                    <li>
                        <a href="#">
                            <h4>Новость 1(01.01.15)</h4>
                            <p>Тут будет описание
                                новости. вот такое вот
                                совсем коротенькое.
                                Пыщ пыщ ололо</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h4>Новость 2(01.01.15)</h4>
                            <p>Тут будет описание
                                новости. вот такое вот
                                совсем коротенькое.
                                Пыщ пыщ ололо</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h4>Новость 3(01.01.15)</h4>
                            <p>Тут будет описание
                                новости. вот такое вот
                                совсем коротенькое.
                                Пыщ пыщ ололо</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h4>Новость 4(01.01.15)</h4>
                            <p>Тут будет описание
                                новости. вот такое вот
                                совсем коротенькое.
                                Пыщ пыщ ололо</p>
                        </a>
                    </li>
                </ul>
            </div>
            <hr>
            <div id="rating">
                <h4>Рейтинги игроков:</h4>
                <ul type="none">
                    <li>Гарри Поттер<span>999</span></li>
                    <li>Гермиона Грейнджер<span>998</span></li>
                    <li>Рон Уизли<span>990</span></li>
                    <li>Волан-Де-Морт<span>879</span></li>
                    <li>Альбус Дамблдор<span>765</span></li>
                    <li>Северус Снегг<span>649</span></li>
                    <li>Драко Малфой<span>613</span></li>
                    <li>Минерва Макгонагалл<span>588</span></li>
                </ul>
            </div>
            <div id="counters">
                <ul type="none">
                    <li><h4>Игроков в игре:</h4><span></span></li>
                    <li><h4>Всего введено игроками:</h4><span></span></li>
                    <li><h4>Всего выведено игроками:</h4><span></span></li>
                </ul>
            </div>
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
