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
        <section class="contact_first_section d-flex flex-column align-items-center justify-content-center">
            <h2 class="fw-bold" style="font-size: 4em; text-transform: uppercase; color: rgb(24, 72, 48);">Контакты</h2>
        </section>
        <section class="second_contact_section container my-5">
            <div class="all_block_and_map d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column">
                        <h3>Адрес</h3>
                        <p>г. Москва, просп. Лихачёва, д. 6, стр. 16</p>
                    </div>
                    <div class="d-flex flex-column">
                        <h3>Время работы</h3>
                        <p>Круглосуточно</p>
                    </div>
                    <div class="d-flex flex-column">
                        <h3>Телефон</h3>
                        <p>+7-(800)-555-21-78</p>
                    </div>
                    <div class="d-flex flex-column">
                        <h3>E-mail</h3>
                        <div class="d-flex">
                            <div class="d-flex flex-column">
                                <p>Отдел клиентского сервиса</p>
                                <a href="#"><p>clienthandy@mail.ru</p></a>
                            </div>
                            <div class="d-flex flex-column ms-5">
                                <p>Общие вопросы</p>
                                <a href="#"><p>allhandy@mail.ru</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h3>Информация</h3>
                        <div class="d-flex flex-column">
                            <p>ОГРН: 1111111111111</p>
                            <p>ИНН: 7777777777</p>
                            <p>КПП: 772772771</p>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <h3 class="text-center">Местоположение нашего главного офиса</h3>
                    <iframe class="shadow-5 rounded-8" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6fa2f2cc1573952fff507effba130e2b564415d348637d6c070994808925b850&amp;source=constructor" width="850px" height="500" frameborder="0"></iframe>
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