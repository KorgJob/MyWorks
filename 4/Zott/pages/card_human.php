<?php
    $root = $_SERVER['DOCUMENT_ROOT'];

    include "$root/php/db.php";
?>
<?php
    session_start(); 

    $mysql = new mysqli('localhost','zott','zott','a0675492_zott');
    
    $result = $mysql->query("SELECT * FROM `goods`");

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
        <section class="single_product_details_area d-flex align-items-center">
            <?php
                $goods_id = $_GET['goods_id'];
                $cards = $mysql->query("SELECT * FROM `goods` WHERE `goods_id` = '$goods_id'");
                $card = mysqli_fetch_assoc($cards);
            ?>
            <div class="pic_product_card">
                <img src="/img/product/<?=$card['img']?>" alt="">
            </div>
            <div class="info_product_card mx-5">
                <h6 style="text-transform: uppercase;"><?=$card['brand']?></h6>
                <h3><?=$card['goods_name']?></h3>
                <h3><?=$card['price']?></h3>
                <p class="w-50"><?=$card['about']?></p>
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
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
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
                <form class="card_form" action="#">
                    <select class="form-select select_size form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Размер</option>
                        <option value="1">M</option>
                        <option value="2">L</option>
                        <option value="3">S</option>
                    </select>
                    <?php 
                            if (isset($_SESSION['cart-list'])):
                                $checked = false;

                                foreach($_SESSION['cart-list'] as $value):
                                    if ($value['goods_id'] == $card['goods_id']){
                                        $checked = true;
                                    }
                                endforeach;

                                if ($checked): ?>
                                    <a href="/pages/cart.php"><button type="button" class="btn btn-outline-dark">Добавлено</button></a>                          
                                <?php else: ?>
                                    <a href="/pages/cart.php?goods_add_id=<?=$card['goods_id']?>"><button type="button" class="btn btn-outline-dark">В корзину</button></a>
                                 <?php endif;

                            else: ?>
                                <a href="/pages/cart.php?goods_add_id=<?=$card['goods_id']?>"><button type="button" class="btn btn-outline-dark">В корзину</button></a>
                            <?php endif; ?>
                </form>
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