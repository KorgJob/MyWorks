<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/actions/db.php";
?>
<?php
    session_start(); 

    $mysql = new mysqli('localhost','root','','handy');
    
    $result = $mysql->query("SELECT * FROM `goods`");

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
        <section class="goods_cart_first_section d-flex flex-column align-items-center justify-content-center">     
            <a href="/index.php#third_block"><button type="button" style="font-size: 2em;" class="btn faq_btn btn-success">заказать</button></a>
        </section>
        <section class="goods_cart_second_section container my-5 d-flex align-items-center justify-content-around">
            <?php
                $goods_id = $_GET['goods_id'];
                $cards = $mysql->query("SELECT * FROM `goods` WHERE `goods_id` = '$goods_id'");
                $card = mysqli_fetch_assoc($cards);
            ?>
            <img src="/img/product/<?=$card['goods_img']?>" class="card-img-top about_bundle prog_s shadow-3-strong" alt="bundle">
            <div class="d-flex flex-column info_bundle">
                <h5 class="text-center">Описание</h5>
                
                <ol class="list-group list-group-light list-group-numbered">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `goods_id` IN (1,2,4,5) AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?=$row['goods_name']?></div>
                        </div>
                        <span class="badge badge-primary rounded-pill">5шт.</span>
                     </li>
                    <?php
                        endwhile;
                    ?>
                </ol>
            </div>
        </section>
        <section class="container goods_cart_third_section mb-5 d-flex justify-content-center">
            <?php if($_COOKIE['user_id'] == ''): ?>
                <p>Пожалуйста авторизируйтесь, прежде чем сделать покупку</p>
            <?php else: ?>
            <form action="#" method="POST">
            <?php 
                if (isset($_SESSION['cart-list'])):
                    $checked = false;

                    foreach($_SESSION['cart-list'] as $value):
                        if ($value['goods_id'] == $card['goods_id']){
                            $checked = true;
                        }
                    endforeach;
                        
                    if ($checked): ?>
                        <a href="/pages/cart.php"><button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">Добавлено</button></a>                          
                    <?php else: ?>
                        <a href="/pages/cart.php?goods_add_id=<?=$card['goods_id']?>"><button type="button" class="btn btn-success">В корзину</button></a>
                    <?php endif;

                    else: ?>
                        <a href="/pages/cart.php?goods_add_id=<?=$card['goods_id']?>"><button type="button" class="btn btn-success">В корзину</button></a>
                <?php endif; ?>
            </form>
            <?php endif; ?>
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