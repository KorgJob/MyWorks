
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Личный кабинет</title> 
</head>
<body>
    <?php require('../structure/header.php'); ?>             
    <main>
        <?php require('../structure/modal-auth-reg.php'); ?> 
        <?php if($_COOKIE['role'] == 'user'):   ?>

        <section class="fix-width">
            <h2 class="text-center">Личный кабинет</h2>
            <p class="text-center mb-5"><span class="user-link fs-3"><?=$_COOKIE['user']?></span>, добро пожаловать.</p>

            <?php 
                    $mysql = new mysqli('localhost','root','root','purebeauty');
                    $user_id = $_COOKIE['id'];
                    $result = $mysql->query("SELECT * FROM `orders` WHERE `user_id` = '$user_id' ");
                    while ($row=$result->fetch_assoc()):
                        $products_array = explode( ',', $row['products'] );
            ?>
            <div class="order-box col-7 p-4 mx-auto mb-3">
                <p class="order-title fs-3">Заказ #<?=$row['id']?></p> 
                <?php for($i=0; $i < count($products_array); $i++): ?>
                    <p class="my-0">- <?=$products_array[$i]?></p>
                <?php endfor; ?>
                
                <p class="status mb-0 mt-3">Адрес</p>
                <p class="m-0"><?=$row['address']?></p>

                <div class="mt-3 w-100 d-flex justify-content-between">
                    <p class="status mb-0 mt-3">Статус доставки: <span class="text-success">Оформляется</span></p>
                    <p class="sum mb-0 mt-3">Сумма: <span class="fs-3"><?=$row['sum']?>  ₽</span></p>
                </div>
            </div>
            <?php endwhile; ?>
        </section>

        <?php elseif($_COOKIE['role'] == 'admin'):   ?>
            <section class="fix-width">
                <h2 class="text-center">Личный кабинет</h2>
                <p class="text-center mb-5"><span class="user-link fs-3"><?=$_COOKIE['user']?></span>, добро пожаловать.</p>
                <div class="w-100 row d-flex justify content-between">
                    <div class="col-6">
                        <?php 
                            $mysql = new mysqli('localhost','root','root','purebeauty');
                            $result = $mysql->query("SELECT * FROM `orders`");
                            $result2 = $mysql->query("SELECT * FROM `feedback`");
                            while ($row=$result->fetch_assoc()):
                                $products_array = explode( ',', $row['products'] );
                        ?>
                        <div class="order-box w-100 col-7 p-4 mx-auto mb-3">
                            <p class="order-title fs-3">Заказ #<?=$row['id']?></p> 
                            <?php for($i=0; $i < count($products_array); $i++): ?>
                                <p class="my-0">- <?=$products_array[$i]?></p>
                            <?php endfor; ?>

                            <div class="mt-3 w-100 d-flex justify-content-between flex-column">
                                <p class="order-title fs-3 mb-2">Данные клиента</p> 
                                <p class="bolder-weight mb-0">Логин: <span class="bolder-none"><?=$row['user_name']?></span></p>
                                <p class="bolder-weight mb-0">Электронная почта: <span class="bolder-none"><?=$row['email']?></span></p>
                                <p class="bolder-weight mb-0">Адрес: <span class="bolder-none"><?=$row['address']?></span></p>
                                <p class="bolder-weight mb-0">Способ оплаты: <span class="bolder-none"><?=$row['payment_method']?></span></p>
                            </div>
                            
                            <div class="mt-3 w-100 d-flex justify-content-between">
                                <p class="status mb-0 mt-3">Статус доставки: <span class="text-success">Оформляется</span></p>
                                <p class="sum mb-0 mt-3">Сумма: <span class="fs-3"><?=$row['sum']?>  ₽</span></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-6">
                    <?php while ($row2=$result2->fetch_assoc()): ?>
                        <div class="order-box w-100 col-7 p-4 mx-auto mb-3">
                            <p class="order-title fs-3">Заявка #<?=$row2['id']?></p>
                            <p class="bolder-weight mb-0">Имя: <span class="bolder-none"><?=$row2['name']?></span></p>
                            <p class="bolder-weight mb-0">Телефон: <span class="bolder-none"><?=$row2['phone']?></span></p>
                            <p class="bolder-weight mb-0">Электронная почта: <span class="bolder-none"><?=$row2['email']?></span></p>
                            <a href="tel:<?=$row2['phone']?>"><button class="btn btn-purchase px-4 py-2 fs-5 mt-4">Позвонить</button></a>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
                
            </section>
        <?php else:   ?>
            <section class="fix-width">
                <h2 class="text-center">Личный кабинет</h2>
                <p class="text-center mb-5">Пожалуйста, <span  data-bs-toggle="modal" data-bs-target="#authmodal" class="enter">войдите</span>.</p>

            </section>
        <?php endif; ?>
    </main>
    <?php require('../structure/footer.php'); ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>