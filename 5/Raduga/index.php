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
        <section class="section_first d-flex">
            <div class="text_banner_main d-flex flex-column justify-content-center">
                <h2>IZGORODOK</h2>
                <div class="pre_text_main d-flex flex-column align-items-center">
                    <p class="pre_text_p">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="floating-button"><p class="d-flex justify-content-center">Акции</p></a>
                </div>
            </div>
        </section>
        <section class="section_second my-3" id="bestl">
            <div class="container bestleirs">
                <h2 class="text-center">Бестселлеры</h2>
                <div class="home-demo my-5">
                    <div class="owl-carousel owl-theme">
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "izgorodok");
                            $sql = "SELECT * FROM `products` WHERE `category` = 3 AND `count` > 0";
                            $result = mysqli_query($link, $sql); 
                        ?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                        <div class="item text-center">
                            <a href="/pages/product_card.php?products_id=<?=$row['products_id']?>"><img src="/img/product/<?=$row['img']?>" alt="#"></a>
                            <p class="my-2">Рюкзаки</p>
                            <p class="my-2"><?=$row['products_name']?></p>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_third mt-5">
            <a style="text-decoration: none; color: black;" href="/pages/catalog/toys.php">
            <div class="container stock_block d-flex justify-content-start align-items-center">
                <div class="d-flex flex-column text-start p-5 text_stock">
                    <h3>ОБНОВЛЕНИЕ АССОРТИМЕНТА <br> МЯГКИХ ИГРУШЕК</h3>
                    <h3 class="h2 fw-bold">Скидки до 70%</h3>
                    <p style="text-transform: uppercase;">Не будь жадиной, купи радость!</p>
                </div>
            </div>
            </a>
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