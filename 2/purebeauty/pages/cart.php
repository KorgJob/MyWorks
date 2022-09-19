<?php
    session_start(); 
    $mysql = new mysqli('localhost','root','root','purebeauty');

    

    if (isset($_GET['delete_id']) && isset($_SESSION['cart-list'])) {
        foreach ($_SESSION['cart-list'] as $key => $value) {
            if ($value['id'] == $_GET['delete_id']) {
                unset($_SESSION['cart-list'][$key]);
                $price_number = intval(preg_replace('/[^0-9]+/', '', $value['price']), 10);
                $_SESSION['sum-price'] -= $price_number;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Каталог</title> 
</head>
<body>
    <?php require('../structure/header.php'); ?>            
    <main>  
        <?php require('../structure/modal-auth-reg.php'); ?>  
        <section class="fix-width">
            <h2 class="text-center mb-5">Корзина</h2>

            <div class="row justify-content-between">
                <div class="col-5">
                    <form action="../php/order-create.php" method="post">
                        <div>
                            <h3 class="mb-4">Информация для доставки</h3>
                            <div class="mb-3">
                                <input type="text" class="form-control input-decorate" name="city" id="city" placeholder="Город" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control input-decorate" name="street" id="street" placeholder="Улица" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control input-decorate" name="house-number" id="house-number" placeholder="Дом" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control input-decorate" name="more" id="more" placeholder="Квартира, подьезд, этаж, код от домофона и т.д." required>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-3 mt-4">Способ оплаты</h3>
                            <select class="form-select" name="paym-method" id="paym-method">
                                <option value="card">Банковская карта</option>
                                <option value="qiwi">Qiwi кошелек</option>
                                <option value="cash">Наличные</option>
                            </select>
                        </div>
                        <?php if($_COOKIE['user'] == ''): ?>
                            <p class="text-danger fs-5 mt-5"><span  data-bs-toggle="modal" data-bs-target="#authmodal" class="enter">Войдите</span>, чтобы оплатить.</p>
                        <?php else: ?>
                            <button class="btn btn-purchase my-4 px-5 py-2 fs-5" type="submit">Оплатить</button>
                        <?php endif; 
                        if ($_SESSION['order-status']): ?>
                            <p class="text-success fs-5 mt-2">Заказ оформлен.</p>
                        <?php
                        $_SESSION['order-status'] = false;
                        endif; ?>
                    </form>
                    
                </div>
                <div class="cart-block col-6">
                    <div class="p-4 h-100 d-flex flex-column justify-content-between">
                    <?php if (isset($_SESSION['cart-list']) && count($_SESSION['cart-list']) != 0 ): ?>
                        <div class="container mt-3">
                            <?php 
                            foreach( $_SESSION['cart-list'] as $product): 
                            ?>
                                <div class="d-flex justify-content-between">
                                    <p><?=$product['name']?> - <b><?=$product['price']?></b> </p> 

                                    <p><a class="text-danger text-decoration-none" href="cart.php?delete_id=<?=$product['id']?>">X</a></p>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    <p class="border-top pt-2 text-end fs-4" style="font-size: 18px;">Итого: <b><?=$_SESSION['sum-price']?> ₽</b></p>
                    <?php else: ?>
                    <p>Корзина пуста</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <?php require('../structure/footer.php'); ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>