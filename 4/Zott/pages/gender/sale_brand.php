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
                            <h2>СКИДКИ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container first_block_humans">
           <div class="row">
               <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area shadow-lg p-3 mb-5 bg-body rounded">
                        <a style="text-decoration: none; color: black;" href="#"><h6 class="my-3" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Категории</h6></a>
                        <div class="catagories-menu mb-50">
                            <ul class="collapse show" id="collapseExample">
                                <li><a href="/pages/gender/sale.php">Все</li></a>
                                <li><a href="/pages/gender/sale.php">Куртки</li></a>
                                <li><a href="/pages/gender/sale.php">Брюки</li></a>
                                <li><a href="/pages/gender/sale.php">Толстовки</li></a>
                                <li><a href="/pages/gender/sale.php">Футболки</li></a>
                            </ul>
                        </div>
                        <div class="brands mb-50">
                            <a style="text-decoration: none; color: black;" href="#"><h6 class="my-3" data-bs-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">Бренды</h6></a>
                            <ul class="collapse show" id="collapseExample5">
                                <li><a data-filter="all" href="#">Все</li></a>
                                <li><a data-filter="NIKE" href="#">NIKE</li></a>
                                <li><a data-filter="TNF" href="#">TNF</li></a>
                                <li><a data-filter="NB" href="#">NB</li></a>
                                <li><a data-filter="PUMA" href="#">PUMA</li></a>
                                <li><a data-filter="FILA" href="#">FILA</li></a>
                            </ul>
                        </div>
                    </div>
               </div>
               <div class="col-12 col-md-4 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <!-- Карточка -->
                            <?php
                                $link = mysqli_connect("localhost", "zott", "zott", "a0675492_zott");
                                $sql = "SELECT * FROM `goods` WHERE `category` IN (23,24,25,26) AND `count` > 0";
                                $result = mysqli_query($link, $sql); 
                            ?>
                            <?php while ($row = mysqli_fetch_array($result)):?>
                            <div class="col-12 col-sm-6 col-lg-4 mb-5" data-cat="<?=$row['brand']?>">
                                <div class="single-product-wrapper">
                                    <div class="product-img">
                                        <img src="/img/product/<?=$row['img']?>" alt="">
                                    </div>
                                    <div class="product-description">
                                        <span><?=$row['brand']?></span>
                                        <a href="/pages/card_human.php?goods_id=<?=$row['goods_id']?>">
                                            <h6><?=$row['goods_name']?></h6>
                                        </a>
                                        <p class="product-price" style="color: red;"><span style="text-decoration: line-through;" class="old-price">10000 ₽</span> <?=$row['price']?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endwhile;
                            ?>
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