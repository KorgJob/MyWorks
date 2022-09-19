<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/db.php";
?>
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
                            <h2>Редактирование статуса</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container form_status">
            <form action="/php/update_status.php" method="POST" class="w-50 d-flex flex-column" style="margin: 0 auto;">
                <p class="text-center">Статус заказа</p>
                <?php
                    $order_id = $_GET['order_id'];
                    $sql = $mysql->query("SELECT * FROM `orders` WHERE `order_id` = '$order_id'");
                    $status = mysqli_fetch_assoc($sql);
                ?>
                <p>Уникальный индификатор заказа</p>
                <input type="text" class="form-control" name="order_id" readonly value="<?=$status['order_id']?>">
                <br>
                <p>Статус заказа</p>
                <input type="text" class="form-control" name="order_status" value="<?=$status['order_status']?>">
                <button type="submit" class="btn btn-outline-dark my-3" style="margin: 0 auto; width: 200px;">Изменить</button>
            </form>
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