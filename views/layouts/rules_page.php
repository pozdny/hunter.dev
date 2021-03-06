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
                <div id="profile_menu">
                    <div>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <p>Добро пожаловать! <span>Имя игрока</span></p>
            </div>
        </div>
    </div>
    <div id="main_menu">
        <div class="container">
            <ul type="none">
                <a href="#"><li><span>ГЛАВНАЯ</span></li></a>
                <a href="#"><li><span>РЕГИСТРАЦИЯ</span></li></a>
                <a href="#"><li class="active"><span class="long_word">ПРАВИЛА ИГРЫ</span></li></a>
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
            <h2>Правила игры</h2>
            <br>
            <h5>Аккаунт пользователя.</h5>
            После регистрации каждому пользователю предоставляется аккаунт. Для входа в аккаунт используйте логин и пароль, отправленные Вам на почту. Никогда не сообщайте и не передавайте свой пароль для входа в аккаунт и информацию, необходимую для восстановления доступа к аккаунту, третьим лицам. Вся ответственность за использование аккаунта лежит только на Вас.
            После авторизации пользователя на сайте, открывается боковое меню слева. Данное меню позволяет управлять игровым процессом. В подарок Вам даётся самодельное одноствольное ружьё и 10 обычных патронов.
            Для выхода из игры используйте кнопку «Выйти», старайтесь избегать аварийного закрытия страницы (нажатием на крестик в правом верхнем углу браузера), до того как вы выйдите из аккаунта.
            По всем, интересующим Вас вопросам Вы можете писать в Нашу службу поддержки. Ответы на часто задаваемые вопросы Вы можете посмотреть в разделе «Часто задаваемые вопросы». Если Вы хотите обсудить игровые моменты или просто пообщаться с другими игроками, посетите Наш «Форум».
            <br>
            <h5>Охота</h5>
            Для выхода на охоту необходимо чтобы у охотника было надето ружьё, и были в наличии патроны. Откройте в левом боковом меню раздел «Охтиться». Затем выберите понравившееся место для охоты. Всего на выбор предоставляется 4 места для охоты это – широколиственный лес, хвойный лес, смешанный лес и камыши. На каждом участке присутствует своя дичь. Шансы встретить крупного и дорого зверя намного ниже, чем шансы на встречу с мелким и распространённым в данном лесу зверьке. Если все условия для охоты соблюдены и выбран участок для охоты, начинается охота, которая длится 4 часа. По истечении данного времени Ваш персонаж вернётся с охоты и принесёт добычу, которую, затем, Вы сможете продать.
            <br>
            <h5>Оружие</h5>
            В игре существуют ружья одноствольные и двуствольные, каждое из которых отличается по качеству. Качественное ружьё имеет меньший шанс на осечку и имеет более высокую точность. Для качественных оружий необходимо использовать только качественные патроны, обычные патроны не годятся для них. После каждой 10 охоты оружие необходимо чистить. Чистящее средство можно приобрести в магазине.
            Одноствольное оружие используется только для охоты на мелкого и среднего зверя. Для охоты на крупного зверя оно не годится. Двуствольное оружие – универсально, оно годится для охоты на любых животных.
            Самодельное ружьё можно использовать только для охоты на мелкую дичь в камыше.
            <br>
            <h5>Патроны</h5>
            Патроны существуют с дробью и с пулей, которые, как и оружия отличаются по качеству. Качественные патроны имеют меньший шанс на осечку и подходят только для любого вида оружия. Обычные патроны годятся для использования только в обычных ружьях.
            Для охоты на мелкую дичь необходимо брать патроны с дробью. Для охоты на среднего и крупного зверя нужно брать патроны с пулей.
            Максимальное количество патронов, которое охотник может взять с собой на охоту равно 15 штук.
            <br>
            <h5>Амуниция</h5>
            Патронташ – увеличивает количество патронов до 48 штук.
            Камуфляжная одежда – увеличивает шансы на поражение цели на 10%.
            Чистящее средство для ружья. После каждой 10 охоты ружьё необходимо чистить. Если этого не делать, ружьё нельзя будет одеть на охоту.
            Сух. паёк для охотника – увеличивает шансы на поражение цели на 5%. Расходуется единоразово.
        </div>
    </div>
</section>
<footer></footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
