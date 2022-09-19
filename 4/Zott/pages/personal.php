<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/img/logopage.svg">
    <script src="/js/jquery.js"></script>
    <title>NewBalance</title>
</head>
<body>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];

        include "$root/php/elements/header.php";
    ?>
    <main>
        <div class="breadcumb_area bg-img" style="background-image: url(/img/bg-img/breadcumb.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <?php
                                if($_COOKIE['role'] == 'admin'):
                            ?>
                            <h2>АДМИН ПАНЕЛЬ</h2>
                            <?php
                                else:
                            ?>
                            <h2>ЛИЧНЫЙ КАБИНЕТ</h2>
                            <?php
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if($_COOKIE['role'] == 'admin'):
        ?>

                <div style="margin: 0 auto;" class="orderds_user d-flex flex-column align-items-center">
                    <h3 class="text-center">Заказы</h3>
                    <?php
                        $link = mysqli_connect("localhost", "zott", "zott", "a0675492_zott");
                        $sql = "SELECT * FROM `orders`";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <table class="table mt-5 table table-striped table-hover border border-5 text-center">
						<thead>
							<tr>
							<th scope="col">ID пользователя</th>
							<th scope="col">Дата заказа</th>
							<th scope="col">Номер заказа</th>
							<th scope="col">Статус заказа</th>
							<th scope="col">Итоговая сумма</th>
							<th scope="col"></th>
							<th scope="col">Удаление</th>
							</tr>
						</thead>
						<tbody>
						<?php while ($row = mysqli_fetch_array($result)):?>
						<tr>
							<td><?=$row['user_id']?></td>
							<td><?=$row['date_order']?></td>
							<td><?=$row['order_number']?></td>
							<td><?=$row['order_status']?></td>
							<td><?=$row['total_sum']?></td>
							<td><a href="/php/update_status_page.php?order_id=<?=$row['order_id']?>">Изменить статус</a></td>
							<td><a style="color: red;" href="/php/delete_order.php?order_id=<?=$row['order_id']?>">Удалить заказ</a></td>
						</tr>
						<?php
							endwhile;
						?>
						</tbody>
					</table>
                </div>

        <?php
            else:
        ?>
        <section class="first_personal_section container d-flex flex-column align-items-center">
            <div class="stocks d-flex flex-column align-items-center mb-5">
                <h2 class="mb-5">Персональные акции</h2>
                <div class="personal_stocks d-flex justify-content-between">
                    <a href="#"><img class="shadow mb-5 rounded" src="/img/stocks/1.png" alt="#"></a>
                    <a href="#"><img class="shadow mb-5 rounded" src="/img/stocks/2.png" alt="#"></a>
                    <a href="#"><img class="shadow mb-5 rounded" src="/img/stocks/3.png" alt="#"></a>
                </div>
            </div>
            <div class="user_address_personal my-5">
                <h2 class="text-center">Ваши контактные данные</h2>
                <div class="d-flex flex-column contact_personal shadow-lg p-3 mb-5 bg-body rounded">
                <?php
                    $mysql = new mysqli('localhost', 'zott', 'zott', 'a0675492_zott');
                    
                    $id = $_COOKIE['id'];
                    $result = $mysql->query("SELECT * FROM `info_users` WHERE `user_id` = '$id'");
                    $user_info = $result->fetch_assoc();

                    if($user_info == ''):
                ?>
                <p class="text-center">Вы не ввели контактные данные</p>
                <?php
                    else:
                ?>
                <?php
                    $link = mysqli_connect("localhost", "zott", "zott", "a0675492_zott");
                    $id_info_user = $_COOKIE['id'];
                    $sql = "SELECT * FROM `info_users` WHERE `user_id`= $id_info_user";
                    $result = mysqli_query($link, $sql); 
                ?>
                <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="text_info">
                        <p><?=$row['name_info']?> <?=$row['surname_info']?></p>
                        <p><?=$row['address_info']?></p>
                        <p><?=$row['city_info']?></p>
                        <p><?=$row['index_info']?></p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a style="color: black;" data-bs-toggle="modal" data-bs-target="#exampleModal6" href="/php/update_info_user.php?user_id=<?=$row['user_id']?>"><i class="fa fa-lg fa-pencil-square-o" aria-hidden="true"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModal6Label">Измненения персональных данных</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/php/update_info_user.php" method="POST" class="d-flex flex-column form_update text-center">
                                    <p>Уникальный индификатор</p>
                                    <input type="text" class="form-control" name="user_id" value="<?=$row['user_id']?>" readonly>
                                    <p>Ваше имя</p>
                                    <input type="text" class="form-control" name="name_info" value="<?=$row['name_info'] ?>">
                                    <p>Ваша фамилия</p>
                                    <input type="text" class="form-control" name="surname_info" value="<?=$row['surname_info'] ?>">
                                    <p>Город</p>
                                    <select id="inputState" name="city_info" class="form-select" value="<?=$row['city_info'] ?>">
                                        <option selected>Выберите город</option>
                                        <option>Москва</option>
                                        <option>Воронеж</option>
                                    </select>
                                    <p>Адрес</p>
                                    <input type="text" class="form-control" name="address_info" value="<?=$row['address_info'] ?>">
                                    <p>Индекс</p>
                                    <input type="text" class="form-control" name="index_info" value="<?=$row['index_info'] ?>">
                                    <button type="submit" class="btn btn-outline-dark my-3">Изменить</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                        <a style="color: black;" href="/php/delete_info_user.php?user_id=<?=$row['user_id']?>"><i class="fa fa-lg fa-trash" aria-hidden="true"></i></i></a>
                    </div>
                <?php
                    endwhile;
                ?>
                <?php
                    endif;
                ?>
                </div>
            </div>
            <div class="personal_orders my-2">
                <div class="orderds_user d-flex flex-column align-items-center">
                    <h3 class="text-center">Заказы</h3>
                    <?php
                        $link = mysqli_connect("localhost", "zott", "zott", "a0675492_zott");
                        $id = $_COOKIE['id'];
                        $sql = "SELECT * FROM `orders` WHERE `user_id`= $id";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php
                        $mysql = new mysqli('localhost', 'zott', 'zott', 'a0675492_zott');
                    
                        $id = $_COOKIE['id'];
                        $result2 = $mysql->query("SELECT * FROM `orders` WHERE `user_id` = '$id'");
                        $user_orders = $result2->fetch_assoc();
                    ?>
                    <?php
                        if($user_orders == ''):
                    ?>
                    <p>Вы ещё не сделали ни одного заказа</p>
                    <?php
                        else:
                    ?>
                    <table class="table table table-striped table-hover border border-5 text-center">
						<thead>
							<tr>
							<th scope="col">Номер заказа</th>
							<th scope="col">Статус заказа</th>
							<th scope="col">Итоговая сумма</th>
							</tr>
						</thead>
						<tbody>
						<?php while ($row = mysqli_fetch_array($result)):?>
						<tr>
							<td><?=$row['order_number']?></td>
							<td><?=$row['order_status']?></td>
							<td><?=$row['total_sum']?></td>
						</tr>
						<?php
							endwhile;
						?>
						</tbody>
					</table>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </section>
        <?php
            endif;
        ?>
    </main>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];

        include "$root/php/elements/footer.php";
    ?>
    <script src="/js/main.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>