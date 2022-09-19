<?php
    session_start(); 
    $mysql = new mysqli('localhost','zott','zott','a0675492_zott');

    require('../php/function.php');

    if(isset($_GET['goods_add_id']) && !empty($_GET['goods_add_id'])) {
        $current_added_product = get_product_by_id($_GET['goods_add_id']);
        if (!empty($current_added_product)) {
            if  (!isset($_SESSION['cart-list'])) {
                $_SESSION['cart-list'][] = $current_added_product;
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
                
            }

            $product_check = false;
            if  (isset($_SESSION['cart-list'])) {
                foreach($_SESSION['cart-list'] as $value) {
                    if ($value['goods_id'] == $current_added_product['goods_id']) {
                        $product_check = true;
                        
                    } 
                }
            }
            
            if(!$product_check) {
                $_SESSION['cart-list'][] = $current_added_product;
                
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
            }

        } else {
            header("Location: /");
        }
    } 

    if (isset($_GET['delete_id']) && isset($_SESSION['cart-list'])) {
        foreach ($_SESSION['cart-list'] as $key => $value) {
            if ($value['goods_id'] == $_GET['delete_id']) {
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
                            <h2>КОРЗИНА</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="first_cart_section container d-flex justify-content-around">
            <div class="form_orders">
                <?php
                    $mysql = new mysqli('localhost', 'zott', 'zott', 'a0675492_zott');
                    
                    $id = $_COOKIE['id'];
                    $result = $mysql->query("SELECT * FROM `info_users` WHERE `user_id` = '$id'");
                    $user_info = $result->fetch_assoc();

                    if($user_info == ''):
                ?>
                <form class="row g-3" method="POST" action="/php/address.php">
                    <div class="col-md-6">
                        <label for="inputname4" class="form-label">Имя</label>
                        <input type="text" name="name_info" class="form-control" id="inputname4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputsurname4" class="form-label">Фамилия</label>
                        <input type="text" name="surname_info" class="form-control" id="inputsurname4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Город</label>
                        <select id="inputState" name="city_info" class="form-select">
                        <option selected>Выберите...</option>
                        <option>Москва</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Адрес</label>
                        <input type="text" name="address_info" class="form-control" id="inputAddress" placeholder="Проспект Ленина">
                    </div>
                    <div class="col-12">
                        <label for="inputpromo2" class="form-label">Промокод</label>
                        <input type="text" class="form-control" id="inputpromo2" placeholder="Промокод"><span style="color: red;" id="valid2"><br>
                    </div>
                    <div class="col-md-12">
                        <label for="inputZip" class="form-label">Индекс</label>
                        <input type="text" name="index_info" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Подписаться на рассылку
                        </label>
                        </div>
                    </div>
                    <div class="col-12 but-sub">
                        <button type="submit" id="sub" class="btn btn-outline-dark">Сохранить адрес</button>
                    </div>
                </form>
                <?php
                    else:
                ?>
                <p>Ваш адрес сохранён в личном кабинете!</p>
                <?php
                    endif;
                ?>
            </div>
            <div class="cart_user shadow-lg p-3 mb-5 bg-body rounded">
            <?php 
                if (isset($_SESSION['cart-list']) && count($_SESSION['cart-list']) != 0 ): ?>
                    <form class="form_cart" action="/php/orders.php" method="POST">
                        <div class="mt-3">
                            <?php 
                            foreach( $_SESSION['cart-list'] as $product): 
                            ?>
                                <div class="d-flex justify-content-between">
                                    <p><?=$product['goods_name']?> - <span class="product_price"><b><?=$product['price']?></b></span> </p> 
                                    <p><input type="number" class="product_counter" id="count" name="<?=$product['goods_id']?>" min="1" max="<?=$product['count']?>" value="1"></p>
                                    <p><a class="text-danger text-decoration-none" href="cart.php?delete_id=<?=$product['goods_id']?>">Убрать</a></p>   
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                        <p class="border-top pt-2 text-end fs-4" style="font-size: 18px;">Итого: <b><input class="total" readonly id="total_sum" name="total_sum" type="text" value="<?=$_SESSION['sum-price']?> ₽"></b></p>
                        <?php
                            if($_COOKIE['id'] == ''):
                        ?>
                        <p class="text-center">Вам необходимо <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">зарегистрироваться!</a></p>
                        <?php
                            else:
                        ?>
                        
                        <?php
                            $mysql = new mysqli('localhost', 'zott', 'zott', 'a0675492_zott');
                            
                            $id = $_COOKIE['id'];
                            $result = $mysql->query("SELECT * FROM `info_users` WHERE `user_id` = '$id'");
                            $user_info = $result->fetch_assoc();

                            if($user_info == ''):
                        ?>  
                        <p class="text-center">Необходимо заполнить контактные данные!</p>    
                        <?php
                            else:
                        ?>  

                        <button type="submit" class="btn btn-outline-dark">Заказать</button>
                        <?php
                            endif;
                        ?>
                        <?php
                            endif;
                        ?>
                    </form>
                    <?php else: ?>
                    <h2 class="text-center">Корзина пуста</h2>
            <?php endif; ?>
            </div>
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