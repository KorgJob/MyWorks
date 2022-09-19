<?php
    session_start();
    $mysql = new mysqli('localhost','root','','purebeauty');
    $result = $mysql->query("SELECT * FROM `products`");

    require('php/functions.php');


    if(isset($_GET['product_id']) && !empty($_GET['product_id'])) {
        $current_added_product = get_product_by_id($_GET['product_id']);
        

        if (!empty($current_added_product)) {

            if  (!isset($_SESSION['cart-list'])) {
                $_SESSION['cart-list'][] = $current_added_product;

                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
                
            }

            
            $product_check = false;
            if  (isset($_SESSION['cart-list'])) {
                foreach($_SESSION['cart-list'] as $value) {
                    if ($value['id'] == $current_added_product['id']) {
                        $product_check = true;

                    } 
                }
            }

            if(!$product_check) {
                $_SESSION['cart-list'][] = $current_added_product;

                $price_number = intval(preg_replace('/[^0-9]+/', '', $current_added_product['price']), 10);
                $_SESSION['sum-price'] += $price_number;
            }

        } else {
            header("Location: 404.php");
        }
    } 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PureBeauty</title> 
</head>
<body>
    <div class="bg w-100">
        <?php require('structure/header.php'); ?>           
        <section class="first-view d-flex align-items-center">
            <div class="mb-5">
                <h1 class="fw-title">Здоровье для кожи. <br> Здоровье для жизни.</h1>
                <p class="fs-5 my-4">Инновационная уходовая косметика, созданная под контролем <br> множества лабораторий.</p>
                <a href="pages/catalog.php"><button class="btn btn-purchase px-5 py-2 mt-2 fs-5">Приобрести</button></a> 
            </div>
        </section>
    </div>
    <main>
    <?php require('structure/modal-auth-reg.php'); ?> 


    <section class="fix-width" id="about-section">
        <h2 class="my-3">О нас</h2>
        <div class="row justify-content-between">
            <p class="col-5">PureBeauty — марка, которая гордится своим французским происхождением и привержена миссии создавать средства для чувствительной кожи. Вот уже более 80 лет мы задаем тон в сфере инноваций в уходе за кожей. <br><br>
             Сегодня, разрабатывая средства ухода, мы заботимся не только о вашей коже: марка PureBeauty придерживается социально-ответственных принципов ведения бизнеса, уделяя особое внимание защите окружающей среды.</p>
            <img class="col-6" src="img/human-image1.jpg" alt="Фотография человека">
        </div>  
    </section>

    <section class="fix-width">
        <h2 class="mb-4">Популярные товары</h2>
        <div class="row justify-content-between">
                <!-- Отображение товаров из базы данных -->
                 <?php $counter = 0;
                 while ($row=$result->fetch_assoc()): 
                 if ($counter<5):?>
                    <div class="product col p-3 mx-2">
                        <img class="w-100" src="<?=$row['path']?>" alt="Крем с ретинолом">
                        <p class="product-title fs-5 mt-3 mb-0"><?=$row['name']?></p>
                        <b><p class="fs-4 my-2 text-end"><?=$row['price']?></p></b>
                        <?php 
                            if (isset($_SESSION['cart-list'])):
                                $checked = false;

                                foreach($_SESSION['cart-list'] as $value):
                                    if ($value['id'] == $row['id']){
                                        $checked = true;
                                    }
                                endforeach;

                                if ($checked): ?>
                                    <a href="pages/cart.php"><button class="btn btn-purchase btn-added px-4 py-2 fs-6 w-100">Добавлено</button></a>                            
                                <?php else: ?>
                                    <a href="index.php?product_id=<?=$row['id']?>"><button class="btn btn-purchase px-4 py-2 fs-6 w-100">В корзину</button></a>
                                 <?php endif;

                            else: ?>
                                <a href="index.php?product_id=<?=$row['id']?>"><button class="btn btn-purchase px-4 py-2 fs-6 w-100">В корзину</button></a>
                            <?php endif; ?>
                    </div>
                <?php  endif; 
                $counter++; 
                endwhile; ?>

        </div>
        <p class="catalog-link my-3 fs-6 text-end"><a href="pages/catalog.php">Посмотреть все</a></p>
    </section>

    <section class="fix-width" id="contacts-section">
        <h2 class="mb-4">Получить консультацию</h2>
        <div class="row justify-content-between w-100">

            <div class="col-6">
                <p class="fs-5">
                    <span class="fs-3">Остались вопросы по поводу продукции?</span>
                    <br> Заполните форму, чтобы мы могли связаться с вами и все обсудить.
                </p>
                <p class="fs-6">
                <span class="fs-4">Позвоните нам: <a class="tel-link" href="tel:+74952033322">+7(495)203-33-22</a></span>
                    <br> Контактный центр работает по будням
                    с 9:30 до 18:00 по московскому времени
                </p>
            </div>

            <form class="form-feedback col-5 d-flex flex-column p-5" action="php/feedback.php" method="post">

                <div class="mb-3">
                    <input type="text" class="form-control input-decorate" name="name" id="name" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control input-decorate" name="phone" id="phone" placeholder="Телефон">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control input-decorate" name="email" id="email" placeholder="Электронная почта">
                </div>

                <button class="btn btn-purchase px-4 py-2 fs-6 mt-4" type="submit">Отправить</button>
            </form>
        </div>
    </section>
    <div class="line-footer"></div>
    </main>
    <?php require('structure/footer.php'); ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>