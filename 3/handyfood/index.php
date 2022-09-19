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
        <section class="baner_main">
            <div class="text_baner d-flex flex-column justify-content-center">
                <h4>Этой весной вместе <br> с Handy Food</h4>
                <a href="/pages/menu.php"><button type="button" class="my-3 btn btn-success">Меню</button></a>
            </div>
        </section>
        <section class="first_main_section shadow-4">
            <div class="container">
                <h2 class="text-center p-5">Выбери свою цель</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-80">
                        <img src="/img/card_block/1.jpg" class="card-img-top" alt="Skyscrapers"/>
                        <div class="card-body text-center">
                            <h5 class="card-title">Хочу похудеть</h5>
                            <p class="card-text">Без стресса и сравов от 750 ккал</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-outline-success btn-rounded w-50" data-mdb-ripple-color="dark" data-mdb-toggle="collapse" data-mdb-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Выбрать</button>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-80">
                        <img src="/img/card_block/2.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
                        <div class="card-body text-center">
                            <h5 class="card-title">Быть в форме</h5>
                            <p class="card-text">В форме на каждый день от 1 800 ккал</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-outline-success btn-rounded w-50" data-mdb-ripple-color="dark" data-mdb-toggle="collapse" data-mdb-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Выбрать</button>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-80">
                        <img src="/img/card_block/3.jpg" class="card-img-top" alt="Palm Springs Road"/>
                        <div class="card-body text-center">
                            <h5 class="card-title">Не хочу готовить</h5>
                            <p class="card-text">Без магазинов и готовки от 600 ккал</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-outline-success btn-rounded w-50" data-mdb-ripple-color="dark" data-mdb-toggle="collapse" data-mdb-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">Выбрать</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second_main_section container d-flex flex-column">
            <div class="collapse show my-5"  id="collapseExample">
                <div class="title_second_block text-center">
                    <h5>Вкусное меню по выгодной цене</h5>
                    <h6>Трехразовое меню на ~1 200 ккал/день для тех, кто хочет похудеть</h6>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 1 AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="col">
                        <div class="product_prog d-flex flex-column align-items-center">
                            <img src="/img/product/<?=$row['goods_img']?>" alt="#">
                            <div class="product_prog_info text-start d-flex flex-column mt-3">
                                <span style="color: grey;"><?=$row['intake']?></span>
                                <p class="fw-bold"><?=$row['goods_name']?></p>
                                <small style="color: grey; font-size: 10px;"><?=$row['calory']?></small>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <a class="text-center mt-5 d-flex justify-content-center" href="#third_block"><button type="button" style="font-size: 1em;" class="btn btn-success this_menu">Хочу это меню</button></a>
            </div>

            <div class="collapse my-5"  id="collapseExample3">
                <div class="title_second_block text-center">
                    <h5>Вкусное меню по выгодной цене</h5>
                    <h6>Трехразовое меню на ~1 000 ккал/день для тех, кто хочет есть вкусно и экономить деньги</h6>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 3 AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="col">
                        <div class="product_prog d-flex flex-column align-items-center">
                            <img src="/img/product/<?=$row['goods_img']?>" alt="#">
                            <div class="product_prog_info text-start d-flex flex-column mt-3">
                                <span style="color: grey;"><?=$row['intake']?></span>
                                <p class="fw-bold"><?=$row['goods_name']?></p>
                                <small style="color: grey; font-size: 10px;"><?=$row['calory']?></small>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <a class="text-center mt-5 d-flex justify-content-center" href="#third_block"><button type="button" style="font-size: 1em;" class="btn btn-success this_menu">Хочу это меню</button></a>
            </div>

            <div class="collapse my-5"  id="collapseExample2">
                <div class="title_second_block text-center">
                    <h5>Вкусное меню по выгодной цене</h5>
                    <h6>Трехразовое меню на ~2 000 ккал/день для тех, кто хочет оставаться в форме</h6>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "handy");
                        $sql = "SELECT * FROM `goods` WHERE `category` = 2 AND `goods_count` > 0";
                        $result = mysqli_query($link, $sql); 
                    ?>
                    <?php while ($row = mysqli_fetch_array($result)):?>
                    <div class="col">
                        <div class="product_prog d-flex flex-column align-items-center">
                            <img src="/img/product/<?=$row['goods_img']?>" alt="#">
                            <div class="product_prog_info text-start d-flex flex-column mt-3">
                                <span style="color: grey;"><?=$row['intake']?></span>
                                <p class="fw-bold"><?=$row['goods_name']?></p>
                                <small style="color: grey; font-size: 10px;"><?=$row['calory']?></small>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <a class="text-center mt-5 d-flex justify-content-center" href="#third_block"><button type="button" style="font-size: 1em;" class="btn btn-success this_menu">Хочу это меню</button></a>
            </div>
        </section>
        <section class="third_main_section d-flex align-items-center" id="third_block">
            <div class="container p-5">
                <h3 class="text-center mb-5">Приходи в форму и экономь</h3>
                
                <div style="margin: 0 auto;" class="shadow-4 bg-light p-5 box_forms d-flex flex-column justify-content-center d-none d-lg-block">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <!-- Tab navs -->
                            <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-mdb-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">3 дня</a>

                                <a class="nav-link" id="v-pills-profile-tab" data-mdb-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" >6 дней</a>

                                <a class="nav-link" id="v-pills-messages-tab" data-mdb-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" >12 дней</a>
                            </div>
                            <!-- Tab navs -->
                        </div>
                        
                        <div class="col-9">
                            <!-- Tab content -->
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="box_tab_content d-flex flex-column align-items-center">
                                        <h4 class="text-success" style="font-size: 35px;">Экономить просто</h4>
                                        <h6 class="text-muted" style="font-size: 12px;">Basic~1000 ккал</h6>
                                        <h4 class="fw-bold">730 ₽ в день</h4>
                                        <h6 class="text-muted" style="font-size: 16px;">Итого: 2 190 ₽</h6>
                                        <form class="form_number_phone text-center" action="/php/redaction/prog.php" method="POST">
                                            <div class="row align-items-center d-flex flex-column">
                                            <input type="text" class="days text-center text-muted" name="tab_day" readonly value="3 дня">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phone" id="form3Example1" class="my-3 form-control" />
                                                        <label class="form-label" for="form3Example1">Ваш номер телефона</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" style="font-size: 1em;" class="btn btn-success">заказать</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="box_tab_content d-flex flex-column align-items-center">
                                        <h4 class="text-success" style="font-size: 35px;">Экономить просто</h4>
                                        <h6 class="text-muted" style="font-size: 12px;">Basic~1000 ккал</h6>
                                        <h4 class="fw-bold">690 ₽ в день</h4>
                                        <h6 class="text-muted" style="font-size: 16px;">Выгода 240 ₽</h6>
                                        <form class="form_number_phone text-center" action="/php/redaction/prog.php" method="POST">
                                            <div class="row align-items-center d-flex flex-column">
                                                <input type="text" class="days text-center text-muted" name="tab_day" readonly value="6 дней">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phone" id="form3Example1" class="my-3 form-control" />
                                                        <label class="form-label" for="form3Example1">Ваш номер телефона</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" style="font-size: 1em;" class="btn btn-success">заказать</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="box_tab_content d-flex flex-column align-items-center">
                                        <h4 class="text-success" style="font-size: 35px;">Экономить просто</h4>
                                        <h6 class="text-muted" style="font-size: 12px;">Basic~1000 ккал</h6>
                                        <h4 class="fw-bold">650 ₽ в день</h4>
                                        <h6 class="text-muted" style="font-size: 16px;">Выгода 960 ₽</h6>
                                        <form class="form_number_phone text-center" action="/php/redaction/prog.php" method="POST">
                                            <div class="row align-items-center d-flex flex-column">
                                                <input type="text" class="days text-center text-muted" name="tab_day" readonly value="12 дней">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phone" id="form3Example1" class="my-3 form-control" />
                                                        <label class="form-label" for="form3Example1">Ваш номер телефона</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" style="font-size: 1em;" class="btn btn-success">заказать</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab content -->
                        </div>
                    </div>
                </div>
                <div style="margin: 0 auto;" class="shadow-4 bg-light p-5 box_forms_adapt d-flex flex-column justify-content-center d-md-none">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <!-- Tab navs -->
                            <div class="nav nav-pills text-center adapt_pills_order" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab1" data-mdb-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home1" aria-selected="true">3 дня</a>

                                <a class="nav-link" id="v-pills-profile-tab1" data-mdb-toggle="pill" href="#v-pills-profile1" role="tab" aria-controls="v-pills-profile1" aria-selected="false" >6 дней</a>

                                <a class="nav-link" id="v-pills-messages-tab1" data-mdb-toggle="pill" href="#v-pills-messages1" role="tab" aria-controls="v-pills-messages1" aria-selected="false" >12 дней</a>
                            </div>
                            <!-- Tab navs -->
                        </div>
                        
                        <div class="col-12 mt-3">
                            <!-- Tab content -->
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab1">
                                    <div class="box_tab_content d-flex flex-column align-items-center">
                                        <h4 class="text-success" style="font-size: 25px;">Экономить просто</h4>
                                        <h6 class="text-muted" style="font-size: 12px;">Basic~1000 ккал</h6>
                                        <h4 class="fw-bold">730 ₽ в день</h4>
                                        <h6 class="text-muted" style="font-size: 16px;">Итого: 2 190 ₽</h6>
                                        <form class="form_number_phone text-center" action="/php/redaction/prog.php" method="POST">
                                            <div class="row d-flex flex-column">
                                                <input type="text" class="days text-center text-muted" name="tab_day" readonly value="3 дня">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phone" id="form3Example1" class="my-3 form-control" />
                                                        <label class="form-label" for="form3Example1">Ваш номер телефона</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" style="font-size: 1em;" class="btn btn-success">заказать</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile-tab1">
                                    <div class="box_tab_content d-flex flex-column align-items-center">
                                        <h4 class="text-success" style="font-size: 25px;">Экономить просто</h4>
                                        <h6 class="text-muted" style="font-size: 12px;">Basic~1000 ккал</h6>
                                        <h4 class="fw-bold">690 ₽ в день</h4>
                                        <h6 class="text-muted" style="font-size: 16px;">Выгода 240 ₽</h6>
                                        <form class="form_number_phone text-center" action="/php/redaction/prog.php" method="POST">
                                            <div class="row d-flex flex-column">
                                                <input type="text" class="days text-center text-muted" name="tab_day" readonly value="6 дней">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phone" id="form3Example1" class="my-3 form-control" />
                                                        <label class="form-label" for="form3Example1">Ваш номер телефона</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" style="font-size: 1em;" class="btn btn-success">заказать</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages-tab1">
                                    <div class="box_tab_content d-flex flex-column align-items-center">
                                        <h4 class="text-success" style="font-size: 25px;">Экономить просто</h4>
                                        <h6 class="text-muted" style="font-size: 12px;">Basic~1000 ккал</h6>
                                        <h4 class="fw-bold">650 ₽ в день</h4>
                                        <h6 class="text-muted" style="font-size: 16px;">Выгода 960 ₽</h6>
                                        <form class="form_number_phone text-center" action="/php/redaction/prog.php" method="POST">
                                            <div class="row d-flex flex-column">
                                                <input type="text" class="days text-center text-muted" name="tab_day" readonly value="12 дней">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phone" id="form3Example1" class="my-3 form-control" />
                                                        <label class="form-label" for="form3Example1">Ваш номер телефона</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" style="font-size: 1em;" class="btn btn-success">заказать</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab content -->
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
    <script src="/js/mdb.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>