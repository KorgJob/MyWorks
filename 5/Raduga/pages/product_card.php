<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/db.php";
?>
<?php
    session_start(); 

    $mysql = new mysqli('localhost','root','','izgorodok');
    
    $result = $mysql->query("SELECT * FROM `products`");

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
    <main class="justify-content-center">
        <section class="container first_product_card my-5">
            <?php
                $products_id = $_GET['products_id'];
                $cards = $mysql->query("SELECT * FROM `products` WHERE `products_id` = '$products_id'");
                $card = mysqli_fetch_assoc($cards);
            ?>
            <div class="product_card d-flex align-items-center justify-content-center">
                <div class="image_card">
                    <img src="/img/product/<?=$card['img']?>" alt="#">
                </div>
                <div class="info_card">
                    <h4><?=$card['products_name']?></h4>
                    <h5><?=$card['price']?></h5>
                    <div class="hr_price"></div>
                    <p class="about_prod"><?=$card['description']?></p>
                    <?php
                        if($_COOKIE['role'] == ''):
                    ?>
                    <a style="text-decoration: none;" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><p class="fw-bold" style="color: #e43535;">Чтобы сделать покупку - зарегистрируйтесь!</p></a>
                    <?php
                        else:
                    ?>
                    <form class="card_form" action="#">
                        <?php 
                            if (isset($_SESSION['cart-list'])):
                                $checked = false;

                                foreach($_SESSION['cart-list'] as $value):
                                    if ($value['products_id'] == $card['products_id']){
                                        $checked = true;
                                    }
                                endforeach;

                                if ($checked): ?>
                                    <a href="/pages/cart.php"><button type="button" class="btn_add">Добавлено</button></a>                          
                                <?php else: ?>
                                    <a href="/pages/cart.php?goods_add_id=<?=$card['products_id']?>"><button type="button" class="btn_add">В корзину</button></a>
                                 <?php endif;

                            else: ?>
                                <a href="/pages/cart.php?goods_add_id=<?=$card['products_id']?>"><button type="button" class="btn_add">В корзину</button></a>
                        <?php endif; ?>
                    </form>
                    <?php
                        endif;
                    ?>
                    <div class="pre_info_card mt-3">
                        <div class="pre_info_p d-flex">
                            <p class="fw-bold me-2">Бренд:</p><p class="text-muted" style="text-transform: uppercase;"><?=$card['brand']?></p>
                        </div>
                        <div class="pre_info_p d-flex">
                            <p class="fw-bold me-2">Продающая марка:</p><p class="text-muted">IZGORODOK</p>
                        </div>
                        <div class="pre_info_p d-flex">
                            <p class="fw-bold me-2">В наличии:</p><p class="text-muted" style="text-transform: uppercase;"><?=$card['count']?></p>
                        </div>
                    </div>
                </div>
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