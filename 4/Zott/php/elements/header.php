<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container p-2">
                <a class="navbar-brand" href="/index.php"><img class="logo" src="/img/zott.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll top-menu" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pages/gender/man.php">Мужчины</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pages/gender/woman.php">Женщины</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pages/gender/children.php">Дети</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pages/gender/sale.php">Скидки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pages/contact.php">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 my-lg-0">
                    <?php
                        if($_COOKIE['role'] == ''):
                    ?>
                    <li class="nav-item dropdown">
						<a class="nav-link" data-bs-toggle="dropdown" href="#"><i class="fa fa-lg fa-address-card" aria-hidden="true"></i></a>
						<ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Регистрация</a></li>
							<li><a data-bs-toggle="modal" data-bs-target="#exampleModal2" class="dropdown-item" href="#">Авторизация</a></li>
						</ul>
					</li>
                    <?php 
                        else:
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#"><i class="fa fa-lg fa-user" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="/pages/personal.php">Личный кабинет</a></li>
							<li><a class="dropdown-item" href="/php/exit.php">Выйти</a></li>
						</ul>
                    </li>
                    <?php
                        endif;
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/cart.php">
                            <i class="fa fa-lg fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 text-center registr_form" action="/php/register.php" method="POST">
                                    <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Эл. адрес</label>
                                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="exemple@mail.ru">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputname4" class="form-label">Имя</label>
                                        <input type="text" class="form-control" placeholder="Иван" name="name" id="inputname4">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Пароль</label>
                                        <input type="password" class="form-control" name="pass" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-dark">Зарегистрироваться</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModal2Label">Авторизация</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 text-center auth_form" action="/php/auth.php" method="POST">
                                    <div class="col-12">
                                        <label for="inputEmail4" class="form-label">Эл. адрес</label>
                                        <input type="email" placeholder="exemple@mail.ru" class="form-control" name="email" id="inputEmail4">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Пароль</label>
                                        <input type="password" class="form-control" name="pass" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-dark">Авторизироваться</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>