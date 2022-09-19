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
    <main class="justify-content-center">
        <section class="contact_section_first d-flex align-items-center">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A49a1fba72e9f29682e37f0393e05097b622513a6a59ac5a3fc90b1adb32e3208&amp;source=constructor" width="960" height="1000" frameborder="0"></iframe>
            <div class="info_product_card mx-5">
                <h6>г. Москва</h6>
                <h3>Дмитровский переулок, д7</h3>
                <h3>Работаем с 9:00 - 22:00</h3>
                <p class="w-70">Номер телефона: +797777777777<br>Email: example@mail.ru</p>
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