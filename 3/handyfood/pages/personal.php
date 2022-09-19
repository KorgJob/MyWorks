<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/actions/db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Иконка для вкладки -->
    <link rel="icon" href="/img/logo.svg">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mdb.min.css">
    <script src="/js/jquery.js"></script>
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Handy Food</title>
</head>
<body>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];

        include "$root/php/elements/header.php";
    ?>
    <main>
        <section class="personal_first_section d-flex flex-column align-items-center justify-content-center">
            <?php if($_COOKIE['role'] == '2'): ?>  
            <h2 class="text_admin">АДМИН-ПАНЕЛЬ</h2>  
            <?php else: ?> 
            <a href="/index.php#third_block"><button type="button" style="font-size: 2em;" class="btn faq_btn btn-success">заказать</button></a>
            <?php endif; ?>
        </section>
        <?php if($_COOKIE['role'] == '2'): ?>
            <section class="container basic_section_admin my-5">
                <h2 class="text-center my-3">Заказы</h2>
                <div class="table-responsive table_order_admin">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `orders`";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <table class="table table-hover text-center table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">ID покупателя</th>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Статус заказа</th>
                                <th scope="col">Дата</th>
                                <th scope="col">Сумма</th>
							    <th scope="col">Отмена</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)):?>
                            <tr>
                                <th scope="row"><?=$row['user_id']?></th>
                                <th scope="row"><?=$row['order_number']?></th>
                                <td><a href="/php/redaction/status.php?order_id=<?=$row['order_id']?>"><?=$row['order_status']?></a></td>
                                <td><?=$row['order_date']?></td>
                                <td><?=$row['total_sum']?></td>
							    <td><a style="color: red;" href="/php/redaction/delete_orders.php?order_id=<?=$row['order_id']?>">Отменить заказ</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <h2 class="text-center my-3">Заявки на программу питания</h2>
                <div class="table-responsive table_order_admin">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `form_prog`";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <table class="table table-hover text-center table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Номер телефона</th>
                                <th scope="col">Кол-во дней</th>
							    <th scope="col">Удалить</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result)):?>
                            <tr>
                                <th scope="row"><?=$row['phone']?></th>
                                <th scope="row"><?=$row['tab_day']?></th>
							    <td><a style="color: red;" href="/php/redaction/delete_form_prog.php?id_prog=<?=$row['id_prog']?>">Удалить заявку</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        <?php else: ?> 
        <section class="container basic_section_personal my-5">
            <div class="row">
                <div class="col-3 shadow-5">
                    <!-- Tab navs -->
                    <div
                    class="nav nav-justified flex-column nav-tabs text-center tabs_navigation d-none d-lg-block"
                    id="v-tabs-tab"
                    role="tablist"
                    aria-orientation="vertical"
                    >
                    <a
                        class="nav-link active pt-5 pb-4"
                        id="v-tabs-home-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-home"
                        role="tab"
                        aria-controls="v-tabs-home"
                        aria-selected="true"
                        >Мои заказы</a
                    >
                    <a
                        class="nav-link pt-5 pb-4"
                        id="v-tabs-profile-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-profile"
                        role="tab"
                        aria-controls="v-tabs-profile"
                        aria-selected="false"
                        >Подписка</a
                    >
                    <a
                        class="nav-link pt-5 pb-4"
                        id="v-tabs-friend-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-friend"
                        role="tab"
                        aria-controls="v-tabs-friend"
                        aria-selected="false"
                        >Пригласи друга</a
                    >
                    <a
                        class="nav-link pt-5 pb-4"
                        id="v-tabs-bonus-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-bonus"
                        role="tab"
                        aria-controls="v-tabs-bonus"
                        aria-selected="false"
                        >Бонусы</a
                    >
                    <a
                        class="nav-link pt-5 pb-4"
                        id="v-tabs-messages-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-messages"
                        role="tab"
                        aria-controls="v-tabs-messages"
                        aria-selected="false"
                        >Настройки</a
                    >
                    </div>
                    <!-- Tab navs -->
                    <!-- Tab adapt -->
                    <div
                    class="nav nav-justified flex-column nav-tabs text-center tabs_navigation d-md-none adapt_tab_personal"
                    id="v-tabs-tab"
                    role="tablist"
                    aria-orientation="vertical"
                    >
                    <a
                        class="nav-link active pt-5 pb-4"
                        id="v-tabs-home-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-home"
                        role="tab"
                        aria-controls="v-tabs-home"
                        aria-selected="true"
                        ><i class="fa fa-2x fa-cart-arrow-down" aria-hidden="true"></i></a
                    >
                    <a
                        class="nav-link pt-5 pb-4"
                        id="v-tabs-profile-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-profile"
                        role="tab"
                        aria-controls="v-tabs-profile"
                        aria-selected="false"
                        ><i class="fa fa-2x fa-credit-card" aria-hidden="true"></i></a
                    >
                    <a
                        class="nav-link pt-5 pb-4"
                        id="v-tabs-friend-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-friend"
                        role="tab"
                        aria-controls="v-tabs-friend"
                        aria-selected="false"
                        ><i class="fa fa-2x fa-users" aria-hidden="true"></i></a
                    >
                    <a
                        class="nav-link pt-4 pb-4"
                        id="v-tabs-bonus-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-bonus"
                        role="tab"
                        aria-controls="v-tabs-bonus"
                        aria-selected="false"
                        ><i class="fa fa-2x fa-gift" aria-hidden="true"></i></a
                    >
                    <a
                        class="nav-link pt-4 pb-4"
                        id="v-tabs-messages-tab"
                        data-mdb-toggle="tab"
                        href="#v-tabs-messages"
                        role="tab"
                        aria-controls="v-tabs-messages"
                        aria-selected="false"
                        ><i class="fa fa-2x fa-cogs" aria-hidden="true"></i></a
                    >
                    </div>
                    <!-- Tab adapt end -->
                </div>

                <div class="col-9">
                    <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent">
                    <div
                        class="tab-pane fade show active"
                        id="v-tabs-home"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                    >
                        <h3 class="text-center">Заказы</h3>
                        <div class="order_block d-flex flex-column justify-content-center align-items-center">
                            <?php
                                $mysql = new mysqli('localhost', 'root', '', 'handy');
                                
                                $id = $_COOKIE['user_id'];
                                $result = $mysql->query("SELECT * FROM `orders` WHERE `user_id` = '$id'");
                                $orders_info = $result->fetch_assoc();

                                if($orders_info == ''):
                            ?>
                            <div class="d-flex flex-column justify-content-center align-items-center p-5">
                                <h4>У вас нет текущих заказов</h4>
                                <p>Информация появится тут, как только Вы сделаете заказ</p>
                                <a href="/pages/menu.php"><button type="button" class="btn btn-success">Сделать заказ</button></a>
                            </div>
                            <?php
                                else:
                            ?>
                            <div class="table-responsive table_order">
                                <table class="table table-hover text-center">
                                    <thead class="table-success">
                                        <tr>
                                        <th scope="col">Номер</th>
                                        <th scope="col">Статус</th>
                                        <th scope="col">Дата</th>
                                        <th scope="col">Сумма</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $link = mysqli_connect("localhost", "root", "", "handy");
                                            $id_user = $_COOKIE['user_id'];
                                            $sql = "SELECT * FROM `orders` WHERE `user_id`= $id_user";
                                            $result = mysqli_query($link, $sql); 
                                        ?>
                                        <?php while ($row = mysqli_fetch_array($result)):?>
                                        <tr>
                                            <th scope="row"><?=$row['order_number']?></th>
                                            <td><?=$row['order_status']?></td>
                                            <td><?=$row['order_date']?></td>
                                            <td><?=$row['total_sum']?></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                                endif;
                            ?>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="v-tabs-profile"
                        role="tabpanel"
                        aria-labelledby="v-tabs-profile-tab"
                    >
                        <h3 class="text-center">Что мне даёт подписка?</h3>
                        <div class="d-flex p-5 justify-content-center align-items-center order_block_second">
                            <div class="d-flex flex-column text_sub">
                                <h5>Скидку до 10 000 ₽ при оформлении подписки</h5>
                                <h5>Удобная понедельная оплата</h5>
                                <p>Если вы хотите сделать перерыв в питании, то можете использовать заморозку. При отмене подписки, в которой использовано менее 30 дней, с вашей карты спишется 990₽.</p>
                            </div>
                            <div class="sub_pic">
                                <img class="sub" src="/img/sub.png" alt="subscribe">
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="v-tabs-friend"
                        role="tabpanel"
                        aria-labelledby="v-tabs-friend-tab"
                    >
                        <h3 class="text-center">Пригласи друга</h3>
                        <div class="d-flex flex-column p-5 justify-content-center align-items-center order_block_four">
                            <p class="text-center">В данный момент программа "Пригласи друга" работает только в мобильных приложениях<br><br>
                            Мы уже работаем над этим вопросом!</p>
                            <div class="d-flex align-items-center icon_mobile">
                                <a href="#"><img class="mx-2" src="/img/ios.png" alt="ios"></a>
                                <a href="#"><img class="mx-2" src="/img/andr.png" alt="andr"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="v-tabs-bonus"
                        role="tabpanel"
                        aria-labelledby="v-tabs-bonus-tab"
                    >
                        <h3 class="text-center">Бонусы</h3>
                        <div class="d-flex flex-column p-5 justify-content-center align-items-center order_block_four">
                            <p class="text-center">Старая бонусная система прекратила действие 1 февраля 2021г<br><br>
                            Новая бонусная система будет доступна в мобильном приложении</p>
                            <div class="d-flex align-items-center icon_mobile">
                                <a href="#"><img class="mx-2" src="/img/ios.png" alt="ios"></a>
                                <a href="#"><img class="mx-2" src="/img/andr.png" alt="andr"></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="v-tabs-messages"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                    >
                        <h3 class="text-center">Настройки профиля</h3>
                        <!-- Pills navs -->
                        <ul class="nav nav-pills mb-3 info_pills_personal" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                            class="nav-link active"
                            id="ex1-tab-1"
                            data-mdb-toggle="pill"
                            href="#ex1-pills-1"
                            role="tab"
                            aria-controls="ex1-pills-1"
                            aria-selected="true"
                            >Личная информация</a
                            >
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                            class="nav-link"
                            id="ex1-tab-2"
                            data-mdb-toggle="pill"
                            href="#ex1-pills-2"
                            role="tab"
                            aria-controls="ex1-pills-2"
                            aria-selected="false"
                            >Мой адрес</a
                            >
                        </li>
                        </ul>
                        <!-- Pills navs -->

                        
                        <div class="d-flex p-5 justify-content-center align-items-center order_block_five">
                            <!-- Pills content -->
                            <div class="tab-content" id="ex1-content">
                            <div
                                class="tab-pane fade show active"
                                id="ex1-pills-1"
                                role="tabpanel"
                                aria-labelledby="ex1-tab-1"
                            >
                            <?php
                                $mysql = new mysqli('localhost', 'root', '', 'handy');
                                
                                $id = $_COOKIE['user_id'];
                                $result = $mysql->query("SELECT * FROM `users_info` WHERE `users_id` = '$id'");
                                $user_info = $result->fetch_assoc();

                                if($user_info == ''):
                            ?>
                            <form class="form_user_info" method="POST" action="/php/redaction/info_users.php">
                                <div class="d-flex flex-wrap name_of_user justify-content-center">
                                    <div class="form-outline my-3 mx-2">
                                        <input type="text" name="user_name" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText">Имя</label>
                                    </div>
                                    <div class="form-outline my-3 mx-2">
                                        <input type="text" name="user_surname" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText">Фамилия</label>
                                    </div>
                                    <div class="form-outline my-3 mx-2">
                                        <input type="date" name="user_date" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText">Дата рождения</label>
                                    </div>
                                    <div class="form-outline my-3 mx-2">
                                        <input type="tel" name="phone" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText">Номер телефона</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-3 button_flex_info">
                                    <button type="submit" class="btn btn-success mx-2">Сохранить изменения</button>
                                    <button type="button" class="btn btn-dark mx-2">Отменить</button>
                                </div>
                            </form>
                            <?php
                                else:
                            ?>
                            <?php
                                $link = mysqli_connect("localhost", "root", "", "handy");
                                $id_info_user = $_COOKIE['user_id'];
                                $sql = "SELECT * FROM `users_info` WHERE `users_id`= $id_info_user";
                                $result = mysqli_query($link, $sql); 
                            ?>
                            <?php while ($row = mysqli_fetch_array($result)):?>
                            <form class="form_user_info" method="POST" action="/php/redaction/update_info_users.php">
                                <div class="d-flex flex-wrap name_of_user">
                                    <div class="form-outline my-3 mx-2">
                                        <input type="text" name="user_name" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText"><?=$row['user_name']?></label>
                                    </div>
                                    <div class="form-outline my-3 mx-2">
                                        <input type="text" name="user_surname" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText"><?=$row['user_surname']?></label>
                                    </div>
                                    <div class="form-outline my-3 mx-2">
                                        <input type="date" name="user_date" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText"><?=$row['user_date']?></label>
                                    </div>
                                    <div class="form-outline my-3 mx-2">
                                        <input type="tel" name="phone" id="typeText" class="form-control" />
                                        <label class="form-label" for="typeText"><?=$row['phone']?></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-3 button_flex_info">
                                    <button type="submit" class="btn btn-success mx-2">Сохранить изменения</button>
                                    <button type="button" class="btn btn-dark mx-2">Отменить</button>
                                </div>
                            </form>
                            <?php
                                endwhile;
                            ?>
                            <?php
                                endif;
                            ?>
                            </div>
                            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                <?php
                                    $mysql = new mysqli('localhost', 'root', '', 'handy');
                                    
                                    $id = $_COOKIE['user_id'];
                                    $result = $mysql->query("SELECT * FROM `users_address` WHERE `users_id` = '$id'");
                                    $user_address = $result->fetch_assoc();

                                    if($user_address == ''):
                                ?>
                                <form action="/php/redaction/address_users.php" method="POST" class="form_user_address">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <div class="form-outline my-3 mx-3">
                                            <input type="text" name="street" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText">Улица</label>
                                        </div>
                                        <div class="form-outline my-3 mx-3">
                                            <input type="text" name="house" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText">Дом</label>
                                        </div>
                                        <div class="form-outline my-3 mx-3">
                                            <input type="text" name="entrance" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText">Подъезд</label>
                                        </div>
                                        <div class="form-outline my-3 mx-3">
                                            <input type="number" name="door_number" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText">Номер квартиры</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mt-2 button_flex_info">
                                        <button type="submit" class="btn btn-success mx-2">Сохранить изменения</button>
                                        <button type="button" class="btn btn-dark mx-2">Отменить</button>
                                    </div>
                                </form>
                                <?php
                                    else:
                                ?>
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "handy");
                                    $id_address_user = $_COOKIE['user_id'];
                                    $sql = "SELECT * FROM `users_address` WHERE `users_id`= $id_address_user";
                                    $result = mysqli_query($link, $sql); 
                                ?>
                                <?php while ($row = mysqli_fetch_array($result)):?>
                                <form action="/php/redaction/update_address_users.php" method="POST" class="form_user_address">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <div class="form-outline my-3 mx-3">
                                            <input type="text" name="street" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText"><?=$row['street']?></label>
                                        </div>
                                        <div class="form-outline my-3 mx-3">
                                            <input type="text" name="house" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText"><?=$row['house']?></label>
                                        </div>
                                        <div class="form-outline my-3 mx-3">
                                            <input type="text" name="entrance" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText"><?=$row['entrance']?></label>
                                        </div>
                                        <div class="form-outline my-3 mx-3">
                                            <input type="number" name="door_number" id="typeText" class="form-control" />
                                            <label class="form-label" for="typeText"><?=$row['door_number']?></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mt-2 button_flex_info">
                                        <button type="submit" class="btn btn-success mx-2">Сохранить изменения</button>
                                        <button type="button" class="btn btn-dark mx-2">Отменить</button>
                                    </div>
                                </form>
                                <?php
                                    endwhile;
                                ?>
                                <?php
                                    endif;
                                ?>
                            </div>
                            </div>
                            <!-- Pills content -->
                            
                        </div>
                    </div>
                    </div>
                    <!-- Tab content -->
                </div>
            </div>
        </section>
        <?php endif; ?>
        <a style="margin: 0 auto; color: red;" class="nav-link my-5 text-center" href="/php/actions/exit.php">Выйти<i class="mx-2 fa fa-lg fa-sign-in" aria-hidden="true"></i></a>
    </main>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];

        include "$root/php/elements/footer.php";
    ?>
    <script src="/js/mdb.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>