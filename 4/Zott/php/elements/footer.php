<footer class="py-5 container-fluid mx-0 w-100 text-light bg-dark">
    <div class="container d-flex justify-content-around footer_flex">
        <div class="column_one d-flex flex-column">
            <img class="logo mb-3" src="/img/zottw.png" alt="logo">
            <p class="info_shop">Спортивная одежда на заказ по городу Москва и всей России.<br> Только оригинальные товары. Доставка из Турции 7-14 дней из США от 12 до 30 дней.<br> Доставка бесплатная.</p>
            <div class="icon d-flex flex-row justify-content-around">
                <a style="color: white;" href="http://vk.com"><i class="fa fa-lg fa-vk" aria-hidden="true"></i></a>
                <a style="color: white;" href="http://telegra.com"><i class="fa fa-lg fa-telegram" aria-hidden="true"></i></a>
                <a style="color: white;" href="http://whatsapp.com"><i class="fa fa-lg fa-whatsapp" aria-hidden="true"></i></a>
                <a style="color: white;" href="http://instagram.com"><i class="fa fa-lg fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="column_one d-flex flex-column">
            <h3 class="mb-3">Карта сайта</h3>
            <div class="d-flex flex-column footer_ul">
                <a style="text-decoration: none; color: white;" href="/pages/gender/man.php"><p>Мужчины</p></a>
                <a style="text-decoration: none; color: white;" href="/pages/gender/woman.php"><p>Женщины</p></a>
                <a style="text-decoration: none; color: white;" href="/pages/gender/children.php"><p>Дети</p></a>
                <a style="text-decoration: none; color: white;" href="/pages/gender/sale.php"><p>Скидки</p></a>
                <a style="text-decoration: none; color: white;" href="/pages/contact.php"><p>Контакты</p></a>
            </div>
        </div>

        <div class="column_one d-flex flex-column">
            <h3 class="mb-3">Мой аккаунт</h3>
            <div class="d-flex flex-column footer_ul">
                <a style="text-decoration: none; color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><p>Вход</p></a>
                <a style="text-decoration: none; color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><p>Регистрация</p></a>
                <a style="text-decoration: none; color: white;" href="/pages/cart.php"><p>Корзина</p></a>
                <?php
                    if($_COOKIE['role'] == ''):
                ?>
                <?php
                    else:
                ?>
                <a style="text-decoration: none; color: white;" href="#"><p>Личный кабинет</p></a>
                <?php
                    endif;
                ?>
            </div>
        </div>
        
        <div class="column_one d-flex flex-column">
            <h3 class="mb-3">Контакты</h3>
            <div class="d-flex flex-column">
                <p>Адрес: Дмитровский переулок, д7</p>
                <p>Номер: +797777777777</p>
                <p>Email: example@mail.ru</p>
            </div>
        </div>

    </div>
</footer>