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
        <section class="section_first_about d-flex justify-content-center">
            <div class="text_banner_toys d-flex align-items-center">
                <h2>О НАС</h2>
            </div>
        </section>
        <section class="second_about_section container">
            <div class="about_block d-flex flex-column align-items-center">
                <img src="/img/logo.png" alt="logo">
                <div class="about_info text-center mt-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, tempore. Tenetur deserunt rerum at quae ut rem iusto enim repudiandae commodi tempore, officiis quibusdam aliquid incidunt eius officia veniam eos?
                    Magnam nobis asperiores aliquid quia ipsam eligendi amet! Rem omnis dolores iure praesentium pariatur, aut soluta ipsa modi libero cum itaque tempora quaerat in sapiente est! Aut quibusdam doloribus ipsam.
                    Mollitia nihil doloribus ipsa perspiciatis tenetur non velit vitae, nulla dicta id dolorum consequuntur! Rerum sint, praesentium neque maiores sed omnis impedit soluta nam exercitationem, quod veritatis debitis! Sint, ex.</p>
                </div>
                <div class="arrow_down my-5">
                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-3x fa-arrow-down" aria-hidden="true"></i></a>
                </div>  
            </div>
        </section>
        <section class="third_about_section mt-5" id="contact">
            <div class="collapse" id="collapseExample">
                <h3 class="text-center h1 mb-5">Контакты</h3>
                <div class="contact_block">
                    <div class="cards_contact d-flex justify-content-around container">
                        <div class="card_contact d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
                            <img src="/img/icon_contact/mark.webp" alt="mark">
                            <h5 class="my-3">Адрес</h5>
                            <p>Ул. Такая-то</p>
                        </div>
                        <div class="card_contact d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
                            <img src="/img/icon_contact/phone.webp" alt="phone">
                            <h5 class="my-3">Телефон</h5>
                            <p>+79257777777</p>
                        </div>
                        <div class="card_contact d-flex flex-column align-items-center shadow p-3 mb-5 bg-white rounded">
                            <img src="/img/icon_contact/mail.webp" alt="mail">
                            <h5 class="my-3">Почта</h5>
                            <p>example@mail.ru</p>
                        </div>
                    </div>
                    <div class="map my-3">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2e9b1f0a895add17719bd06aabac22149d10c25bdf09176c5c1863840380516b&amp;source=constructor" width="100%" height="538" frameborder="0"></iframe>
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