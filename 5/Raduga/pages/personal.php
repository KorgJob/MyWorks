<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="icon" href="/img/logo2.png">
    <script src="/js/jquery.js"></script>
    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <title>IZGORODOK</title>
</head>
<body>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];

        include "$root/php/elements/header.php";
    ?>
    <main>
        <section class="section_first_personal d-flex justify-content-center">
            <div class="text_banner_toys d-flex align-items-center">
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
        </section>
        <section class="section_second_personal container my-5">
            <?php
                if($_COOKIE['role'] == 'admin'):
            ?>
            <div style="margin: 0 auto;" class="orderds_user d-flex flex-column align-items-center">
                <h3 class="text-center">Заказы</h3>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "izgorodok");
                    $sql = "SELECT * FROM `orders`";
                    $result = mysqli_query($link, $sql); 
                ?>
                <table class="table table table-striped table-hover border border-5 text-center my-5 table-bordered">
					<thead>
						<tr>
							<th scope="col">Номер заказа</th>
							<th scope="col">Дата заказа</th>
							<th scope="col">Статус заказа</th>
							<th scope="col">Итоговая сумма</th>
							<th scope="col">Отмена</th>
						</tr>
					</thead>
					<tbody>
					    <?php while ($row = mysqli_fetch_array($result)):?>
						<tr>
							<td><?=$row['order_number']?></td>
							<td><?=$row['order_date']?></td>
							<td><a href="/php/status.php?order_id=<?=$row['order_id']?>"><?=$row['order_status']?></a></td>
							<td><?=$row['total_sum']?></td>
							<td><a style="color: red;" href="/php/delete_orders.php?order_id=<?=$row['order_id']?>">Отменить заказ</a></td>
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
            <div class="orderds_user d-flex flex-column align-items-center">
                <h2 class="text-center mb-5">Заказы</h2>
                <?php
                    $link = mysqli_connect("localhost", "root", "", "izgorodok");
                    $id = $_COOKIE['id'];
                    $sql = "SELECT * FROM `orders` WHERE `user_id`= $id";
                    $result = mysqli_query($link, $sql); 
                ?>
                <?php
                    $mysql = new mysqli('localhost', 'root', '', 'izgorodok');
                    
                    $id = $_COOKIE['id'];
                    $result2 = $mysql->query("SELECT * FROM `orders` WHERE `user_id` = '$id'");
                    $user_orders = $result2->fetch_assoc();
                ?>
                <?php
                    if($user_orders == ''):
                ?>
                <p>Вы не сделали ни одного заказа</p>
                <?php
                    else:
                ?>
                <table class="table table-striped table-hover border text-center table-sm table_orders table-bordered">
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
            <div class="stocks d-flex flex-column align-items-center my-5">
                <h2 class="mb-5">Персональные акции</h2>
                <div class="personal_stocks d-flex justify-content-between">
                    <a href="#"><img class="shadow mb-5 rounded" src="/img/stocks/1.png" alt="#"></a>
                    <a href="#"><img class="shadow mb-5 rounded" src="/img/stocks/2.png" alt="#"></a>
                    <a href="#"><img class="shadow mb-5 rounded" src="/img/stocks/3.png" alt="#"></a>
                </div>
            </div>
            <?php
                endif;
            ?>
            <a href="/php/exit.php" class="floating-button"><p class="d-flex justify-content-center">Выйти</p></a>
        </section>
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