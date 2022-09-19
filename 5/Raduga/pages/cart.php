<?php
    session_start(); 
    $mysql = new mysqli('localhost','root','','izgorodok');

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
                    if ($value['products_id'] == $current_added_product['products_id']) {
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
            if ($value['products_id'] == $_GET['delete_id']) {
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
        <section class="section_first_cart d-flex justify-content-center">
            <div class="text_banner_toys d-flex align-items-center">
                <h2>КОРЗИНА</h2>
            </div>
        </section>
        <section class="section_second_cart container my-5">
            <h3 class="text-center h1">Корзина</h3>
            <div class="table_cart table-responsive-sm">
                <?php 
                    if (isset($_SESSION['cart-list']) && count($_SESSION['cart-list']) != 0 ): ?>
                    <form class="form-cart d-flex flex-column" action="/php/orders.php" method="POST">
                        <table class="table table-hover align-middle text-center table-bordered mt-5">
                            <thead class="table-success">
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">Продукт</th>
                                <th scope="col">Цена</th>
                                <th scope="col">Количество</th>
                                <th scope="col">Удалить</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach( $_SESSION['cart-list'] as $product): 
                                ?>
                                <tr>
                                    <th scope="row"><img style="max-width: 80px;" src="/img/product/<?=$product['img']?>" alt="product"></th>
                                    <td><?=$product['products_name']?></td>
                                    <td><span class="product_price"><?=$product['price']?></span></td>
                                    <td><input type="number" class="product_counter" id="count" name="<?=$product['products_id']?>" min="1" max="<?=$product['count']?>" value="1"></td>
                                    <td><a style="color: red;" href="cart.php?delete_id=<?=$product['products_id']?>"><i class="fa fa-lg fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="border-top pt-2 text-end fs-4" style="font-size: 18px;">Итого: <b><input class="total" readonly id="total_sum" name="total_sum" type="text" value="<?=$_SESSION['sum-price']?> ₽"></b></p>
                        <button type="submit" class="btn_reg">Заказать</button>
                    </form>
                    <?php else: ?>
                    <h2 class="text-center my-5">Корзина пуста</h2>
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