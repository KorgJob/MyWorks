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
        <section class="section_first_devilery d-flex justify-content-center">
            <div class="text_banner_toys d-flex align-items-center">
                <h2>ДОСТАВКА</h2>
            </div>
        </section>
        <section class="container section_second_devilery my-5">
            <div class="about_block d-flex flex-column">
                <h3 class="text-center my-4 h1">Способы доставки</h3>
                <div class="delivery_block d-flex">
                    <div class="cards_delivery d-flex justify-content-around container">
                        <div class="card_delivery d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
                            <img src="/img/icond/1.png" alt="cdek">
                            <h5 class="my-3">CDEK</h5>
                            <p>От 3-х до 5 дней</p>
                        </div>
                        <div class="card_delivery d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
                            <img src="/img/icond/2.png" alt="cdek">
                            <h5 class="my-3">Курьером</h5>
                            <p>В течении недели</p>
                        </div>
                        <div class="card_delivery d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
                            <img src="/img/icond/3.png" alt="cdek">
                            <h5 class="my-3">Самовывоз</h5>
                            <p>В любой момент</p>
                        </div>
                    </div>
                </div>
                <div class="arrow_down mt-5" style="margin: 0 auto;">
                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-3x fa-arrow-down" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
        <section class="container section_third_devilery mb-5" id="wall">
            <div class="collapse" id="collapseExample">
                <div class="wallet_block">
                    <h3 class="text-center h1">Способы оплаты</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Оплата картой
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-bold">
                                Тут текст
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Наличный рассчёт
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-bold">
                                Тут текст
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Перевод средств
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-bold">
                                Тут текст
                            </div>
                            </div>
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