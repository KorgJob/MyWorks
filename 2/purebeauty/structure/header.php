<header class="d-flex justify-content-between align-items-center">
        <a href="../index.php"><img class="logo" src="../img/logo.svg" alt="logo"></a>
        <nav class=" d-flex align-items-center">
            <ul class="d-flex justify-content-between align-items-center">
                <li class="mx-5 fs-4"><a href="../index.php#about-section">О нас</a></li>
                <li class="mx-5 fs-4"><a href="../index.php#contacts-section">Контакты</a></li>
                <li class="mx-5 fs-4"><a href="../pages/catalog.php">Каталог</a></li>
                <li class="mx-5 fs-4"><a href="/./pages/cart.php">Корзина</a></li>
                <?php if($_COOKIE['user'] == ''):   ?>
                    <li class="mx-5" data-bs-toggle="modal" data-bs-target="#authmodal"><img class="icon" style="width:36px;" src="../img/account-icon.svg" alt=""></li>
                <?php else:   ?>
                    <li class="mx-5 fs-4 user-link"><a href="../pages/account.php"><?=$_COOKIE['user']?>,</a> <a class="fs-5 exit-link" href="../php/exit.php">Выйти</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>