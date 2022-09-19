<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Подключение библиотеки с анимацией-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Подлкючаем Jquery -->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>СохранимЛес</title>
</head>
<body>
    <!-- Шапка -->
    <header class="d-flex justify-content-between align-items-center container">
        <a href="index.php"><img class="logo" src="../img/logo.svg" alt="logo"></a>
        <!-- Навигационная панель -->
        <nav class="d-flex align-items-center">
            <ul class="d-flex align-items-center">
                <li class="mx-3"><a href="#instruct">Инструкция</a></li>
                <li class="mx-3"><a href="pages/personalLK.php">Посадить дерево</a></li>
                <li class="mx-3"><a href="pages/about.php">О нас</a></li>
                <li class="mx-3"><a href="#help">Помощь</a></li>
            </ul>
        </nav>
        <!-- Проверка php - если пользователь не зарегистрированный, то у него будет кнопка с регистрацией -->
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col">
                    <h1 class="h_reg text-center">Форма регистрации</h1>
                    <form class="d-flex justify-content-around flex-column m-auto needs-validation" action="/pages/check.php" method="POST">
                        <input type="text" class="form-control" required name="login" id="login" placeholder="Введите логин"><span id="valid4"></span><br>
                        <input type="text" class="form-control" required name="name" id="name" placeholder="Введите имя"><span id="valid3"></span><br>
                        <input type="password" class="form-control" required name="pass" id="pass" placeholder="Введите пароль"><span id="valid5"></span><br>
                        <input type="file" name="img" id="img"><br><br>
                        <!-- Кнопка регистрации -->
                        <button class="btn btn-success" id="sub" type="submit">Зарегистрировать</button>
                    </form>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <!-- Кнопка перехода на pop-up авторизации -->
                <button class="btn btn-outline-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Авторизация</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Модальное окно -->
        
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col">
                    <h1 class="h_reg fs-5 text-center">Форма авторизации</h1>
                    <form class="d-flex justify-content-around flex-column" action="/pages/auth.php" method="POST">
                        <input type="text" class="form-control" required name="login" id="login" placeholder="Введите логин"><span id="valid4"></span><br>
                        <input type="password" class="form-control" required name="pass" id="pass" placeholder="Введите пароль"><span id="valid5"><br>
                        <!-- Кнопка авторизации -->
                        <button class="fv_button btn btn-success px-5 my-3" id="sub" type="submit">Авторизоваться</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Кнопка перехода на регистрацию -->
                <button class="btn btn-outline-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Регистрация</button>
            </div>
            </div>
        </div>
        </div>
        
        <?php else: ?>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <?php if($_COOKIE['user'] == ''): ?>
                <h5 class="modal-title" id="exampleModalToggleLabel2">Авторизация</h5>
                <?php else: ?>
                <h5 class="modal-title" id="exampleModalToggleLabel2">Вы авторизированы</h5> 
                <?php endif; ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Привет <? echo($_COOKIE['user'])?> <!--Сюда фото-->. Чтобы выйти нажмите <a href="/pages/exit.php">здесь</a></p>
                <?php endif; ?>
            </div>
            </div>
        </div>
        </div>
        <?php if($_COOKIE['user'] == ''): ?>
        <a class="btn btn-outline-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Регистрация</a>
        <?php else: ?>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2"><? echo($_COOKIE['user'])?></button>
        <?php endif; ?>
    </header>
    <main>
        <section class="first_view d-flex justify-content-between align-items-center">
            <div class="first_view_container container mb-5">
                <h1 class="text-start">Сохраним лес</h1>
                <h2 class="text-start">Восстановление лесов</h2>
                <p class="text-start">Мы занимаемся восстановлением леса по всей территории РФ.
                    <br>Помоги нам восстановить лес - посади своё дерево!</p>
                <button type="button" class="fv_button btn btn-success px-5 my-3">Помочь</button>
                <button type="button" class="fv_button btn btn-outline-success mx-2 my-3">Вперёд</button>
            </div>
        </section>
        <section id="about" class="first_block d-flex justify-content-center align-items-center pt-3">
            <img data-aos="flip-left" class="three mx-3" src="../img/tree.svg" alt="pict">
            <div data-aos="flip-up" class="d-flex flex-column mx-3">
                <h3>Наши цели на 2022 год</h3>
                <p>Посадить в стране более 70 000 000 деревьев!
                <br>Организовать охрану наших лесов!</p>
            </div>
        </section>
        <section class="second_block d-flex justify-content-center align-items-center container">
            <h3 class="text-end">Наш прогресс за прошлый год</h3>
            <div class="d-flex justify-content-center align-items-center flex-column">
                <div class="round_bg d-flex justify-content-center align-items-center">
                    <p class="my-2">95%</p>
                </div>
                <button type="button" class="fv_button btn btn-success px-5 my-3">Посадить дерево</button>
            </div>
            <p class="text_progress fs-5">Мы посадили более 50 000 000 деревьев по всей РФ.
            <br>К нам присоединилось более 1 000 000 новых активистов!</p>
        </section>
        <section id="instruct" class="third_block">
            <h3 class="text-center my-4 py-5">Как узнать где вам посадить дерево?</h3>
            <div class="d-flex d-flex justify-content-around align-items-center container">
                <div data-aos="zoom-in" class="instruction d-flex justify-content-between align-items-center flex-column">
                    <img src="../img/instruction1.svg" alt="pict">
                    <p class="text-center">Выбери свой регион на карте</p>
                </div>
                <div data-aos="zoom-in" class="instruction d-flex justify-content-between align-items-center flex-column">
                    <img src="../img/instruction2.svg" alt="pict">
                    <p class="text-center">Вы увидите точки с местами высадки</p>
                </div>
                <div data-aos="zoom-in" class="instruction d-flex justify-content-between align-items-center flex-column">
                    <img src="../img/instruction3.svg" alt="pict">
                    <p class="text-center">При клике на точку появиться дата и время</p>
                </div>
                <div data-aos="zoom-in" class="instruction d-flex justify-content-between align-items-center flex-column">
                    <img src="../img/instruction4.svg" alt="pict">
                    <p class="text-center">Весь инвентарь будет выдан организацией</p>
                </div>
            </div>
        </section>
        <section class="fourth_block">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7dfa8e6dd653740f0f6d8c5a923bb5d7fa70ad35678570251dc645381910f34f&amp;source=constructor" frameborder="0"></iframe>
        </section>
    </main>
    <footer class="d-flex justify-content-between align-items-center my-3 container">
        <a href="index.php"><img class="footer_logo" src="../img/logo.svg" alt="logo"></a>
        <div id="help">
            <h3>+7-977-76-82</h3>
            <p>Если у вас возникли вопросы или вы хотели бы
            <br>записаться к нам в команду - звоните по номеру телефона.</p>
            <div class="icons d-flex justify-content-between align-items-center">
                <a href="https://www.youtube.com/"><img src="../img/icon1.svg" alt="social"></a>
                <a href="https://www.instagram.com/"><img src="../img/icon2.svg" alt="social"></a>
                <a href="https://www.facebook.com/"><img src="../img/icon3.svg" alt="social"></a>
                <a href="https://www.vk.com/"><img src="../img/icon4.svg" alt="social"></a>
            </div>
        </div>
    </footer>
    <script src="js/validate.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/aoc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>