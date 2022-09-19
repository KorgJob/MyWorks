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
                <div class="image_card_clothes shadow p-2 mb-5 bg-white rounded me-5">
                    <img src="/img/product/<?=$card['img']?>" alt="#">
                </div>
                <div class="info_card">
                    <h4><?=$card['products_name']?></h4>
                    <h5><?=$card['price']?></h5>
                    <div class="hr_price"></div>
                    <a style="text-decoration: none; color: blue;" data-bs-toggle="modal" data-bs-target="#exampleModal9" href="#"><p>Таблица размеров</p></a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModal9Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModal9Label">Таблица размеров</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover table-bordered fw-bold">
                                    <thead class="table-info">
                                        <tr>
                                        <th scope="col">Наименования</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">Размер US</th>
                                        <td>S</td>
                                        <td>M</td>
                                        <td>L</td>
                                        <td>XL</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Размер RUS</th>
                                        <td>44-46</td>
                                        <td>46-48</td>
                                        <td>48-50</td>
                                        <td>50-52</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Рост</th>
                                        <td>170</td>
                                        <td>176</td>
                                        <td>176</td>
                                        <td>182</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Обхват груди</th>
                                        <td>80-85</td>
                                        <td>85-90</td>
                                        <td>90-95</td>
                                        <td>95-100</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Обхват бедер</th>
                                        <td>95</td>
                                        <td>101</td>
                                        <td>107</td>
                                        <td>113</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <p class="about_prod"><?=$card['description']?></p>
                    <?php
                        if($_COOKIE['role'] == ''):
                    ?>
                    <a style="text-decoration: none;" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><p class="fw-bold" style="color: #e43535;">Чтобы сделать покупку - зарегистрируйтесь!</p></a>
                    <?php
                        else:
                    ?>
                    <form class="card_form_clothes" action="#">
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