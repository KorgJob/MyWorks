<header class="header_wrapper">
    <div class="header_top">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-6 adapt_top">
                    <div class="header_info_left">
                        <div class="city" id="tow"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-6 sm-pl-0 xs-pl-15 header_top_right">
                    <div class="header_info">
                        <?php
                            if($_COOKIE['role'] == ''):
                        ?>
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">Личный кабинет</a>
                        <?php
                            else:
                        ?>
                        <a href="/pages/personal.php">Личный кабинет</a>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Авторизация</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/php/auth.php" method="POST" class="d-flex flex-column justify-content-around auth">
                        <input type="text" name="login" placeholder="Введите логин">
                        <input type="password" name="pass" placeholder="Введите пароль">
                        <button type="submit" class="btn_reg">Авторизироваться</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Регистрация</button>
                </div>
                </div>
            </div>
            </div>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Регистрация</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/php/register.php" method="POST" class="d-flex flex-column justify-content-around register">
                        <input type="text" name="email" id="email" placeholder="Введите email" required><span id="valid1"></span><br>
                        <input type="text" name="login" id="login" placeholder="Введите логин" required><span id="valid4"></span><br>
                        <input type="password" name="pass" id="pass" placeholder="Введите пароль" required><span id="valid5"></span><br>
                        <button type="submit" class="btn_reg" id="sub">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Авторизация</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Меню</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-center align-items-center">
                <!-- Контент меню -->
                <div class="all_menu">
                    <div class="container">
                        <ul class="main-menu nav d-flex flex-column align-items-center">
                            <img src="/img/logo.png" alt="logo">
                            <?php
                                if($_COOKIE['role'] == ''):
                            ?>
                            <li><a href="/pages/catalog/toys.php">Игрушки</a></li>
                            <li><a href="/pages/catalog/stationery.php">Канцтовары</a></li>
                            <li><a href="/pages/catalog/backpacks.php">Рюкзаки</a></li>
                            <li><a href="/pages/catalog/clothes.php">Одежда</a></li>
                            <li><a href="/pages/catalog/shape.php">Форма</a></li>
                            <?php
                                else:
                            ?>
                            <li><a href="/pages/cart.php">Корзина</a></li>
                            <li><a href="/pages/catalog/toys.php">Игрушки</a></li>
                            <li><a href="/pages/catalog/stationery.php">Канцтовары</a></li>
                            <li><a href="/pages/catalog/backpacks.php">Рюкзаки</a></li>
                            <li><a href="/pages/catalog/clothes.php">Одежда</a></li>
                            <li><a href="/pages/catalog/shape.php">Форма</a></li>
                            <?php
                                endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class="header_middle">
        <div class="container">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header_align">

                        <div class="header_align_left">
                            <div class="header_logo d-none d-lg-block">
                                <a href="/index.php"><img src="/img/logo2.png" alt="logo"></a>
                            </div>
                            <!-- Adapt -->
                            <div class="header_logo_adapt d-md-none d-flex align-items-center justify-content-between">
                                <a href="/index.php"><img src="/img/logo2.png" alt="logo"></a>
                                <a href="#" style="color: black;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-4x fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="header_align_center d-flex flex-column">
                            <div class="d-flex" style="margin: 0 auto;">
                                <div class="nav_panel">
                                    <nav>
                                        <ul class="d-flex flex-row">
                                            <a href="/pages/about.php"><li class="me-2">О магазине</li></a>
                                            <a href="/pages/delivery.php#wall"><li class="me-2">Оплата</li></a>
                                            <a href="/pages/delivery.php"><li class="me-2">Доставка</li></a>
                                            <a href="/pages/about.php#contact"><li class="me-2">Контакты</li></a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header_search">
                                <form action="#" method="POST">
                                    <div class="form-input-item">
                                        <label for="search" class="sr-only">Поиск</label>
                                        <input type="text" id="search" placeholder="Поиск">
                                        <button type="submit" class="btn-src">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header_align_right">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>