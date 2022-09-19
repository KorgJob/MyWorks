<header class="sticky">
        <!-- Навбар -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" style="color: #00b74a; font-weight: bold; font-size: 1.5em;" href="/index.php">HF</a>
                <div style="color: #00b74a;" class="vr d-none d-md-block"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-lg fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">+7-(800)-555-21-78</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto top-menu mb-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/pages/menu.php">Меню и цены</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/pages/faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/pages/contact.php">Контакты</a>
                        </li>
                        <?php
                            if($_COOKIE['role'] == ''):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" href="#">Личный кабинет<i class="mx-2 fa fa-lg fa-sign-in" aria-hidden="true"></i></a>
                        </li>
                        <?php
                            else:
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/personal.php">Личный кабинет<i class="mx-2 fa fa-lg fa-sign-in" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/cart.php">Корзина<i class="fa mx-2 fa-1x fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <?php
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body">
                
                <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                        class="nav-link active"
                        id="tab-login"
                        data-mdb-toggle="pill"
                        href="#pills-login"
                        role="tab"
                        aria-controls="pills-login"
                        aria-selected="true"
                        >Авторизация</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Регистрация</a>
                    </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form method="POST" action="/php/actions/auth.php" class="needs-validation" novalidate>

                        <p class="text-center mb-3">Войдите здесь:</p>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="loginName" name="login" class="form-control" required />
                            <label class="form-label" for="loginName">Логин</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="loginPassword" name="pass" class="form-control" required />
                            <label class="form-label" for="loginPassword">Пароль</label>
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck"> Запомнить меня </label>
                            </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Забыли пароль?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success btn-block mb-4">Авторизоваться</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p style="color: #00b74a;">Нет аккаунта? Перейдите на вкладку регистрация</p>
                        </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form method="POST" action="/php/actions/reg.php" class="needs-validation" novalidate>
                        <p class="text-center mb-3">Зарегистрируйтесь здесь:</p>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="registerName" name="name" class="form-control" required />
                            <label class="form-label" for="registerName">Имя</label>
                        </div>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="registerUsername" name="login" class="form-control" required />
                            <label class="form-label" for="registerUsername">Логин</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="registerEmail" name="email" class="form-control" required />
                            <label class="form-label" for="registerEmail">Email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="registerPassword" name="pass" class="form-control" required />
                            <label class="form-label" for="registerPassword">Пароль</label>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="registerCheck"
                            checked
                            aria-describedby="registerCheckHelpText"
                            />
                            <label class="form-check-label" for="registerCheck">
                            Я даю согласие на обработку своих данных
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" id="sub" class="btn btn-success btn-block mb-3">Зарегистрироваться</button>
                        </form>
                    </div>
                    </div>
                    <!-- Pills content -->

            </div>
        </div>
    </header>