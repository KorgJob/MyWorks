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
            <h2 class="text_admin">АДМИН-ПАНЕЛЬ</h2>
        </section>
        <section class="first_section_status container my-5">
            <form action="/php/redaction/update_status.php" method="POST" class="w-50 d-flex flex-column" style="margin: 0 auto;">
                <p class="text-center fw-bold h3 mb-3">Статус заказа</p>
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
                <button type="submit" class="btn btn-outline-success mt-5" style="margin: 0 auto; width: 200px;">Изменить</button>
            </form>
        </section>
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