<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <title>Личный кабинет</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center container">
        <a href="../index.php"><img class="logo" src="../img/logo.svg" alt="logo"></a>
        <nav class="d-flex align-items-center">
            <ul class="d-flex align-items-center">
                <li class="mx-3"><a href="#instruct">Инструкция</a></li>
                <li class="mx-3"><a href="personalLK.php">Посадить дерево</a></li>
                <li class="mx-3"><a href="#about">О нас</a></li>
                <li class="mx-3"><a href="#help">Помощь</a></li>
                <?php
                 if($_COOKIE['user'] == ''):
                ?>
                <button type="button" class="btn btn-outline-success mx-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Войти</button>
                <?php
                    else:
                ?>
                <button type="button" class="btn btn-outline-success mx-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?=$_COOKIE['user']?></button>
                <?php
                    endif;
                ?>
            </ul>
        </nav>
       
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <?php
                    if($_COOKIE['user'] == ''):
                ?>
                <h5 class="modal-title" id="staticBackdropLabel">Авторизируйтесь</h5>
                <?php else: ?>
                    <h5 class="modal-title" id="staticBackdropLabel">Вы авторизированы</h5>
                <?php endif; ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
                    if($_COOKIE['user'] == ''):
                ?>
                <div class="col">
                    <h1 class="h_reg fs-5 text-center">Форма авторизации</h1>
                    <form class="d-flex justify-content-around flex-column" action="auth.php" method="POST">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                        <button class="fv_button btn btn-success px-5 my-3" type="submit">Авторизоваться</button>
                    </form>
                </div>
                <?php else: ?>
                    <p>Привет <?=($_COOKIE['user'])?> <!--Сюда фото-->. Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
                <?php endif; ?>
                </div>
                <div class="modal-footer">
                <?php
                    if($_COOKIE['user'] == ''):
                ?>
                <a href="reg.php"><button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Регистрация</button></a>
                <?php
                    endif;
                ?>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
            </div>
        </div>
    </header>
    <main>
        <h2 class="text-center my-5">Личный кабинет</h2>
        <!-- Страница для админа -->
        <?php
            if($_COOKIE['user'] == 'admin'):
        ?>
        
        <?php
                $link = mysqli_connect('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

                $sql = 'SELECT id, login, pass, img, name FROM users';

                $result = mysqli_query($link, $sql);
        ?>

        <div class="formcaption d-flex flex-column align-items-center">
        <h2>Зарегистрированные пользователи</h2>
            <div class="tables row">
            <table class="table col-8 my-5 table-hover">
                <thead>
                    <tr class="coloring">
                    <th scope="col">Логин</th>
                    <th scope="col">Пароль</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Удалить</th>
                    <th scope="col">Изменить</th>
                    </tr>
                </thead>
                <tbody>
            <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?=$row['login']?></td>
                    <td><?=$row['pass']?></td>
                    <td><?=$row['name']?></td>
                    <td><a style="color: red;" href="redaction/users/delete.php?id=<?=$row['id']?>">Удалить</a></td>
                    <td><a style="color: blue;" href="redaction/users/update.php?id=<?=$row['id']?>">Изменить</a></td>
                </tr>
            <?php
                endwhile;
            ?>
                </tbody>
            </table>

        <?php
                $link = mysqli_connect('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

                $sql = 'SELECT id, name, surname, city, urban, telnumber FROM callback';

                $result = mysqli_query($link, $sql);
        ?>

        <div class="formcaption d-flex flex-column align-items-center">
            <h2>Пользователи отправившие запрос</h2>
            <div class="tables row">
            <table class="table col-8 my-5 table-hover">
                <thead>
                    <tr class="coloring">
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Город</th>
                    <th scope="col">Область</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Удалить</th>
                    </tr>
                </thead>
                <tbody>
            <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?=$row['name']?></td>
                    <td><?=$row['surname']?></td>
                    <td><?=$row['city']?></td>
                    <td><?=$row['urban']?></td>
                    <td><?=$row['telnumber']?></td>
                    <td><a style="color: red;" href="redaction/callback/delete.php?id=<?=$row['id']?>">Удалить</a></td>
                </tr>
            <?php
                endwhile;
            ?>
                </tbody>
            </table>
            <?php
                $link = mysqli_connect('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

                $sql = 'SELECT sum, login FROM donate';

                $result = mysqli_query($link, $sql);
            ?>
            <h2 class="text-center">Пользователи отправившие финансовую поддержку</h2>
            <table class="table col-3 my-5 table-hover">
                <thead>
                    <tr class="coloring">
                    <th scope="col">Сумма</th>
                    <th scope="col">Имя</th>
                    </tr>
                </thead>
                <tbody>
            <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?=$row['sum']?></td>
                    <td><?=$row['login']?></td>
                </tr>
            <?php
                endwhile;
            ?>
                </tbody>
            </table>
            </div>   
        </div>

        <?php
            else:
        ?>
        <?php
            if($_COOKIE['user'] == ''):
        ?>
            <div class="notauth">
                <div class="d-block m-auto">
                    <p class="text-center">Пожалуйста, войдите</p>
                    <button type="button" class="d-block m-auto btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Войти</button>
                </div>
            </div>
        <?php
            else:
        ?>
        <section class="d-flex justify-content-around container-fluid account my-5">
            <div class=" d-flex flex-column justify-content-start align-items-center user_info">
                <div class="modul_width container d-flex justify-content-start align-items-center my-4">
                    <img class="avatar" src="../img/<?=($_COOKIE['img'])?>" alt="Картинка">
                    <div class="container">
                        <p class="fs-5 m-0"><b>Логин: </b> <?=($_COOKIE['login'])?></p>
                        <p class="fs-5 m-0"><b>Имя: </b> <?=($_COOKIE['user'])?></p>
                    </div>
                </div>
                <div class="lkline m-0"></div>
                <div class="modul_width d-flex align-items-start justify-content-between my-5">
                    <div class="tree_block d-flex flex-column justify-content-start align-items-center">
                        <img class="tree_user" src="../img/treeus.jpg" alt="дерево">
                        <p class="text-center label_img mt-2">Дерево "<?=($_COOKIE['user'])?>"</p>
                    </div>
                    <div class="text_block d-flex flex-column justify-content-around">
                        <h3 class="text-left">Дерево "<?=($_COOKIE['user'])?>"</h3>
                        <p>Дерево — жизненная форма деревянистых растений с единственной, отчётливо выраженной, многолетней, в разной степени одревесневшей, сохраняющейся в течение всей жизни, разветвлённой главной осью — стволом. <br> Это дерево мы назвали в честь вашего имени, потому что вы уже сделали для нас очень много - зарегистрировались на нашем сайте, тем самым поддержав восстанавление лесов РФ.</p>
                    </div>
                </div>
            </div>



            <div class="donation_help d-flex flex-column justify-content-between">


                <div class="donation d-flex flex-column justify-content-around align-items-start p-5 mb-5">
                    <h2>Помочь нам</h2>
                    <form class="formadonat my-3" action="donate.php" method="POST">
                        <label for="usname">Имя пользователя</label>
                        <input type="text" readonly class="form-control my-2 b-0" name="login" id="usname" placeholder="Введите ваш логин" value="<?=($_COOKIE['user'])?>"><br>
                        <label for="sum" class="form-label">Выберите сумму</label>
                        <input type="range" name="sum" class="form-range" min="1000" max="10000" step="1000" id="sum" value="1000">
                        <div class="w-100 d-flex justify-content-between m-0">
                            <p class="m-0">1000</p>
                            <b><p class="fs-4" id="current_sum">1000</p></b>
                            <p class="m-0">10000</p>
                        </div>
                        <button class="btn btn_style my-3" type="submit">Пожертвовать</button>
                    </form>
                    
                </div>

                
                <div class=" help container d-flex flex-column justify-content-around align-items-start p-5 ">
                    <h2 class="text-center">Приглашаем вас на волонтёрство</h2>
                            <p class="text-start">«Лесные волонтёры» — платформа FSC России, объединяющая волонтёрские проекты. Здесь встречаются люди и организации, заинтересованные в сохранении лесов: те, кому нужна помощь, и те, кто готов её оказать.</p>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn_style">Откликнуться</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Приглашаем вам на волонтёрство!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Форма -->
                                <form class="row g-3 needs-validation formacallback d-flex" action="callback.php" method="POST" novalidate>
                                    <div class="col-6">
                                        <label for="validationCustom01" class="form-label">Имя</label>
                                        <input type="text" name="name" class="form-control" id="validationCustom01" value="Иван" required>
                                        <div class="valid-feedback">
                                        Все хорошо!
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationCustom02" class="form-label">Фамилия</label>
                                        <input type="text" name="surname" class="form-control" id="validationCustom02" value="Петров" required>
                                        <div class="valid-feedback">
                                        Все хорошо!
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationCustom03" class="form-label">Город</label>
                                        <input type="text" name="city" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">
                                        Укажите действующий город.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationCustom04" class="form-label">Область</label>
                                        <select class="form-select" name="urban" id="validationCustom04" required>
                                        <option selected disabled value="">Выберите...</option>
                                        <option>Московская</option>
                                        <option>Новосибирская</option>
                                        <option>Екатеринбургская</option>
                                        <option>Здесь нет моей области</option>
                                        </select>
                                        <div class="invalid-feedback">
                                        Пожалуйста, выберите корректный город.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="validationCustom03" class="form-label">Телефон</label>
                                        <input type="tel" name="telnumber" class="form-control tel" id="validationCustom03" required>
                                        <div class="invalid-feedback">
                                        Укажите действующий номер телефона.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Примите условия и <a href="https://assistentus.ru/forma/soglashenie/">соглашения</a>
                                        </label>
                                        <div class="invalid-feedback">
                                            Вы должны принять перед отправкой.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Отправить форму</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            endif;
        ?>
        <?php
            endif;
        ?>
    </main>
    <footer class="d-flex justify-content-between align-items-center my-3 container">
        <a href="../index.php"><img class="footer_logo" src="../img/logo.svg" alt="logo"></a>
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
    <script src="../js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/validation.js"></script>
    <script src="../js/aoc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>