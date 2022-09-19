<?php
    session_start(); 
    $mysql = new mysqli('localhost','root','','handy');

    require('../php/actions/function.php');

    if(isset($_GET['goods_add_id']) && !empty($_GET['goods_add_id'])) {
        $current_added_product = get_product_by_id($_GET['goods_add_id']);
        if (!empty($current_added_product)) {
            if  (!isset($_SESSION['cart-list'])) {
                $_SESSION['cart-list'][] = $current_added_product;
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['goods_price']), 10);
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
                
                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['goods_price']), 10);
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
                $price_number = intval(preg_replace('/[^0-9]+/', '', $value['goods_price']), 10);
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
        <section class="cart_first_section d-flex flex-column align-items-center justify-content-center">
            <h2 class="fw-bold" style="font-size: 4em; text-transform: uppercase; color: rgb(24, 72, 48);">Корзина</h2>
        </section>
        <section class="container cart_second_section my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping_cart">
                    <?php 
                    if (isset($_SESSION['cart-list']) && count($_SESSION['cart-list']) != 0 ): ?>
                        <form action="/php/redaction/orders.php" method="POST" class="order_cart d-flex flex-column">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr class="align-middle text-center">
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">Товар</th>
                                            <th scope="col">Цена</th>
                                            <th scope="col">Количество</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    foreach( $_SESSION['cart-list'] as $product): 
                                    ?>
                                    <tbody>
                                        <tr class="align-middle text-center">
                                            <th scope="row"><a href="cart.php?delete_id=<?=$product['goods_id']?>"><button type="button" class="btn btn-danger btn-sm px-3"><i class="fas fa-times"></i></button></a></th>
                                            <td><img style="max-width: 130px;" src="/img/product/<?=$product['goods_img']?>" alt=""></td>
                                            <td><?=$product['goods_name']?></td>
                                            <td><span class="product_price"><?=$product['goods_price']?></span></td>
                                            <td><input type="number" class="product_counter" id="count" name="<?=$product['goods_id']?>" min="1" max="<?=$product['goods_count']?>" value="1">
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <p class="border-top pt-2 text-end fs-4" style="font-size: 18px;">Итого: <b><input class="total" readonly id="total_sum" name="total_sum" type="text" value="<?=$_SESSION['sum-price']?> ₽"></b></p>
                            <?php
                                $mysql = new mysqli('localhost', 'root', '', 'handy');
                                
                                $id = $_COOKIE['user_id'];
                                $result = $mysql->query("SELECT * FROM `users_info` WHERE `user_id` = '$id'");
                                $user_info = $result->fetch_assoc();

                                if($user_info == ''):
                            ?>
                            <p class="text-center">Пожалуйста заполните личные данные в личном кабинете!</p>
                            <?php
                                else:
                            ?>
                            <button type="submit" class="btn btn-outline-success cart_btn" data-mdb-ripple-color="dark">Заказать</button>
                            <?php
                                endif;
                            ?>
                        </form>
                        <?php else: ?>
                        <h2 class="text-center">Корзина пуста</h2>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
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