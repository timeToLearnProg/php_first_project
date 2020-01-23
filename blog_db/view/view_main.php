<!-- <!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="media1/add.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="css/add.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <title><?=$title?></title>
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="header line">
                <div class="wrapper">
                    <div class="logo"></div>
                    <div class="slogan">
                        <div class="title">Стейки и бургеры</div>
                        <div class="subtitle">Всем по стейку, всем по бургеру.</div>
                    </div>
                    <div class="phone">8 800 800 80 80</div>
                </div>
            </div>
            <div class="menu line">
                <div class="wrapper">
                    <nav>
                        <div class="show_menu">Меню</div>
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="login.php">Войти</a></li>
                            <li><a href="listNews.php">Статьи</a></li>
                            <li><a href="add.php">Добавить статью</a></li>
                            <li><a href="register.php">Регистрация</a></li>
                            <?=$content1?>
                            <?=$content2?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section>
            <div class="content line">
                <div class="wrapper">
                    <?=$content?>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer line">
                <div class="wrapper">
                    <span class="copy">&copy; ООО Рога и Копыта, Москва 2014, все права защищены!</span>
                </div>
            </div>
        </footer>
    </div> -->
    <!-- <script src="media1/js/jquery-1.11.0.min.js" type="text/javascript"></script> -->
    <!-- <script src="media1/js/scripts.js" type="text/javascript"></script> -->
<!-- </body>
</html> -->








<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
       <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
        <header>
            <div class="head_name">
            <div class="text_name">
                <h1 align="center">Мои опыты в программировании</h1>
            <h2 align="center">На PHP</h2>
            </div>
        </div>
        <!-- <hr size="2px"> -->
        <div class="menu_mane">
            <ul class="pages">
                 <li><a href="../index.php">Главная</a></li>
                <li><a href="login.php">Войти</a></li>
                <li><a href="listNews.php">Статьи</a></li>
                <li><a href="add.php">Добавить статью</a></li>
                <li><a href="register.php">Регистрация</a></li>
                <?=$content1?>
                            <!-- <?=$content2?> -->
            </ul>
        </div>
        </header>
        <!-- <div class="wrapper"> -->
            <div >
                 <!-- <div> -->
                    <!-- <div > -->
                        <!-- <fieldset> -->
                            <?=$content?>
                        <!-- </fieldset> -->

                    <!-- </div> -->
                <!-- </div> -->
            </div>


            <footer>
                <ul class="foot">
                    <li>г. Сургут - 2020</li>
                    <li>&copy; </li>
                    <li>Авраменко В.А.</li>
                    <li>+7(902-6)-901-131</li>
                    <li>avadim08@gmail.com</li>
                </ul>
                <ul class="help_foot">
                    <li>Использованны материалы с сайтов:</li>
                    <li class="help_foot1"><a href="https://www.php.net/manual/ru/intro-whatis.php">Мануал PHP, </a></li>
                    <li class="help_foot2"><a  href="https://www.youtube.com/results?search_query=%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%D0%BD%D0%B0+php&sp=EgIQAw%253D%253D">Youtube, </a></li>
                    <li class="help_foot3"><a  href="https://git-scm.com/">Git</a></li>
                </ul>
            </footer>
        </div>
    </body>
</html>

