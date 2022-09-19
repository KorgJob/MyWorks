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
        <section class="menu_first_section_baner d-flex flex-column align-items-center justify-content-center">
            <h2 class="fw-bold" style="text-transform: uppercase; color: rgb(24, 72, 48);">Самое лучшее здесь</h2>
        </section>
        <section class="second_menu_section container my-5">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a
                class="nav-link active"
                id="ex3-tab-1"
                data-mdb-toggle="pill"
                href="#ex3-pills-1"
                role="tab"
                aria-controls="ex3-pills-1"
                aria-selected="true"
                >Все блюда</a
                >
            </li>
            <li class="nav-item" role="presentation">
                <a
                class="nav-link"
                id="ex3-tab-2"
                data-mdb-toggle="pill"
                href="#ex3-pills-2"
                role="tab"
                aria-controls="ex3-pills-2"
                aria-selected="false"
                >Наборы</a
                >
            </li>
            <li class="nav-item" role="presentation">
                <a
                class="nav-link"
                id="ex3-tab-3"
                data-mdb-toggle="pill"
                href="#ex3-pills-3"
                role="tab"
                aria-controls="ex3-pills-3"
                aria-selected="false"
                >Программы</a
                >
            </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex2-content">
            <div
                class="tab-pane fade show active"
                id="ex3-pills-1"
                role="tabpanel"
                aria-labelledby="ex3-tab-1"
            >
                
                <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 5 AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="col">
                        <div class="card menu_cards h-100">
                        <img src="/img/product/<?=$row['goods_img']?>" class="card-img-top p-3" alt="#"/>
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['goods_name']?></h5>
                            <p class="card-text">
                            <?=$row['goods_about']?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?=$row['calory']?></small>
                        </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

            </div>
            <div
                class="tab-pane fade"
                id="ex3-pills-2"
                role="tabpanel"
                aria-labelledby="ex3-tab-2"
            >
                <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 4 AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="col">
                        <div class="card menu_cards h-100">
                        <img src="/img/product/<?=$row['goods_img']?>" class="card-img-top" alt="#"/>
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['goods_name']?></h5>
                            <p class="card-text">
                            <?=$row['goods_about']?>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="/pages/goods_card.php?goods_id=<?=$row['goods_id']?>"><small class="text-success">Подробное описание</small></a>
                            <small class="text-success"><?=$row['goods_price']?> ₽</small>
                        </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="ex3-pills-3"
                role="tabpanel"
                aria-labelledby="ex3-tab-3"
            >
                <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 6 AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="col">
                        <div class="card menu_cards h-100">
                        <img src="/img/product/<?=$row['goods_img']?>" class="card-img-top" alt="#"/>
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['goods_name']?></h5>
                            <p class="card-text">
                            <?=$row['goods_about']?>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="/pages/goods_card_prog.php?goods_id=<?=$row['goods_id']?>"><small class="text-success">Подробное описание</small></a>
                            <small class="text-success"><?=$row['goods_price']?> ₽</small>
                        </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
            </div>
            <!-- Pills content -->
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