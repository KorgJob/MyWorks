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
    <title>Zott</title>
</head>
<body>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];

        include "$root/php/elements/header.php";
    ?>
    <main>
        <section class="second_section mx-auto">
            <div class="card_main d-flex align-items-center">
                <div class="text_cards d-flex flex-column">
                    <p>FILA</p>
                    <div class="hr_line"></div>
                    <p>Брюки женские</p>
                    <a href="/pages/card_human.php?goods_id=20"><button type="button" class="btn">Купить</button></a>
                </div>
            </div>
        </section>
        <section class="first_section container my-5" style="margin: 0 auto;">
            <h2 class="text-center">Хиты сезона</h2>
            <div class="home-demo my-5">
                <div class="owl-carousel owl-theme">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "shopz");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 27 AND `count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="item">
                        <a href="/pages/card_human.php?goods_id=<?=$row['goods_id']?>"><img src="/img/product/<?=$row['img']?>" alt=""></a>
                        <h6 class="my-2"><?=$row['brand']?></h6>
                        <p class="my-2"><?=$row['goods_name']?></p>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </section>
        <section class="third_section container my-5 text-center">
            <div class="d-flex flex-row justify-content-center category_flex">
                <div class="category_pic mx-3">
                    <a href="/pages/gender/man.php"><img src="/img/category/1.jpg" alt=""></a>
                    <p class="my-3" style="text-decoration: underline;">Мужское</p>
                </div>
                <div class="category_pic mx-3">
                    <a href="/pages/gender/woman.php"><img src="/img/category/2.jpg" alt=""></a>
                    <p class="my-3" style="text-decoration: underline;">Женское</p>
                </div>
                <div class="category_pic mx-3">
                    <a href="/pages/gender/sale.php"><img src="/img/category/3.webp" alt=""></a>
                    <p class="my-3" style="text-decoration: underline;">Скидки</p>
                </div>
            </div>
        </section>
        <section class="four_section">
            <div class="brands-area d-flex align-items-center justify-content-between">
                <div class="single-brands-logo">
                    <img src="/img/brends/brand1.png" alt="">
                </div>
                <div class="single-brands-logo">
                <img src="/img/brends/brand2.png" alt="">
                </div>
                <div class="single-brands-logo">
                <img src="/img/brends/brand3.png" alt="">
                </div>
                <div class="single-brands-logo">
                    <img src="/img/brends/brand4.png" alt="">
                </div>
                <div class="single-brands-logo">
                    <img src="/img/brends/brand5.png" alt="">
                </div>
                <div class="single-brands-logo">
                    <img src="/img/brends/brand6.png" alt="">
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