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
        <section class="section_first_toys d-flex justify-content-center">
            <div class="text_banner_toys d-flex align-items-center">
                <h2>ОДЕЖДА</h2>
            </div>
        </section>
        <section class="container product_catalog">
            <div class="pill_clothes d-flex container justify-content-center my-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="floating-button fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Мальчики</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="floating-button fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Девочки</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!-- Мальчики -->
                    <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "izgorodok");
                            $sql = "SELECT * FROM `products` WHERE `category` = 4 AND `count` > 0";
                            $result = mysqli_query($link, $sql); 
                        ?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                        <div class="col">
                            <a href="/pages/product_card_clothes.php?products_id=<?=$row['products_id']?>" style="text-decoration: none; color: black;">
                            <div class="card menu_cards h-100">
                                <img class="picture_menu_cards_clothes" src="/img/product/<?=$row['img']?>" alt="Skyscrapers"/>
                                <div class="card-body">
                                    <h5 class="card-title"><?=$row['products_name']?></h5>
                                    <p class="card-text">
                                    <?=$row['description']?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted fw-bold" style="text-transform: uppercase;"><?=$row['brand']?></small>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!-- Девочки -->
                    <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                        <?php
                            $link = mysqli_connect("localhost", "root", "", "izgorodok");
                            $sql = "SELECT * FROM `products` WHERE `category` = 6 AND `count` > 0";
                            $result = mysqli_query($link, $sql); 
                        ?>
                        <?php while ($row = mysqli_fetch_array($result)):?>
                        <div class="col">
                            <a href="/pages/product_card_clothes.php?products_id=<?=$row['products_id']?>" style="text-decoration: none; color: black;">
                            <div class="card menu_cards h-100">
                                <img class="picture_menu_cards_clothes" src="/img/product/<?=$row['img']?>" alt="Skyscrapers"/>
                                <div class="card-body">
                                    <h5 class="card-title"><?=$row['products_name']?></h5>
                                    <p class="card-text">
                                    <?=$row['description']?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted fw-bold" style="text-transform: uppercase;"><?=$row['brand']?></small>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                
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