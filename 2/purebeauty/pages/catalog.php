<?php
    session_start(); 

    $mysql = new mysqli('localhost','root','root','purebeauty');
    
    $result = $mysql->query("SELECT * FROM `products`");

    require('../php/functions.php');


    if(isset($_GET['product_id']) && !empty($_GET['product_id'])) {
        $current_added_product = get_product_by_id($_GET['product_id']);
        

        if (!empty($current_added_product)) {

            if  (!isset($_SESSION['cart-list'])) {
                $_SESSION['cart-list'][] = $current_added_product;

                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
                
            }

            
            $product_check = false;
            if  (isset($_SESSION['cart-list'])) {
                foreach($_SESSION['cart-list'] as $value) {
                    if ($value['id'] == $current_added_product['id']) {
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
            header("Location: 404.php");
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
            <h2 class="text-center mb-5">Каталог</h2>

            <div class="row justify-content-between">
                <?php while ($row=$result->fetch_assoc()): ?>
                    <div class="product col p-3 mx-2 mb-3 d-flex flex-column justify-content-between">
                        <img class="w-100" src="<?=$row['path']?>" alt="Крем с ретинолом">
                        <p class="product-title fs-5 mt-3 mb-0"><?=$row['name']?></p>
                        <b><p class="fs-4 my-2 text-end"><?=$row['price']?></p></b>
                        <?php 
                            if (isset($_SESSION['cart-list'])):
                                $checked = false;

                                foreach($_SESSION['cart-list'] as $value):
                                    if ($value['id'] == $row['id']){
                                        $checked = true;
                                    }
                                endforeach;

                                if ($checked): ?>
                                    <a href="cart.php"><button class="btn btn-purchase btn-added px-4 py-2 fs-6 w-100">Добавлено</button></a>                            
                                <?php else: ?>
                                    <a href="catalog.php?product_id=<?=$row['id']?>"><button class="btn btn-purchase px-4 py-2 fs-6 w-100">В корзину</button></a>
                                 <?php endif;

                            else: ?>
                                <a href="catalog.php?product_id=<?=$row['id']?>"><button class="btn btn-purchase px-4 py-2 fs-6 w-100">В корзину</button></a>
                            <?php endif; ?>
                            
                    </div>
                <?php endwhile; ?>
    
            </div>
        </section>

    </main>
    <?php require('../structure/footer.php'); ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>