<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Подключение библиотеки с анимацией-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>СохранимЛес</title>
</head>
<body>
    <!-- Шапка -->
    <header class="d-flex justify-content-between align-items-center container">
        <a href="../index.php"><img class="logo" src="../img/logo.svg" alt="logo"></a>
        <!-- Навигационная панель -->
        <nav class="d-flex align-items-center">
            <ul class="d-flex align-items-center">
                <li class="mx-3"><a href="#instruct">Инструкция</a></li>
                <li class="mx-3"><a href="personalLK.php">Посадить дерево</a></li>
                <li class="mx-3"><a href="about.php">О нас</a></li>
                <li class="mx-3"><a href="help.php">Помощь</a></li>
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
                    <form class="d-flex justify-content-around flex-column m-auto" action="/pages/check.php" method="POST">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <input type="file" name="img" id="img"><br><br>
                        <!-- Кнопка регистрации -->
                        <button class="btn btn-success" type="submit">Зарегистрировать</button>
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
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <!-- Кнопка авторизации -->
                        <button class="fv_button btn btn-success px-5 my-3" type="submit">Авторизоваться</button>
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
        <section class="first_block_help my-5 container shadow p-3 mb-5 bg-light">
            <div class="kontakt my-3 container">
                <h2>Контакты</h2>
                <br>
                <p>Приём волонтёров</p>
                <p>+7-(888)-888-88-88</p><br>
                <p>Главный специалист по посадке деревьев</p>
                <p>+7-(888)-888-88-88</p><br>
                <p>Глава нашего движения</p>
                <p>+7-(888)-888-88-88</p>
            </div>
            <h2 class="my-5 text-center">Наши партнёры и организаторы</h2>
            <div class="organizate_block my-3 d-flex container flex-row justify-content-around">
                <a href="#"><img class="shadow p-3 mb-5 bg-white rounded mx-5" src="../img/org1.jpeg" alt="organizate1"></a>
                <a href="#"><img class="shadow p-3 mb-5 bg-white rounded mx-5" src="../img/org2.jpeg" alt="organizate1"></a>
                <a href="#"><img class="shadow p-3 mb-5 bg-white rounded mx-5" src="../img/org3.jpeg" alt="organizate1"></a>
                <a href="#"><img class="shadow p-3 mb-5 bg-white rounded mx-5" src="../img/org4.png" alt="organizate1"></a>
            </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/aoc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>