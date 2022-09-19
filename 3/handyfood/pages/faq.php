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
        <section class="faq_first_section d-flex flex-column align-items-center justify-content-center">     
            <a href="/index.php#third_block"><button type="button" style="font-size: 2em;" class="btn faq_btn btn-success">заказать</button></a>
        </section>
        <section class="faq_second_section container my-5 d-flex flex-column align-items-center">
            <h2 class="text-center fw-bold">Частые вопросы</h2>
            <div class="hr-line"></div>
            
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-fill my-5 faq_tabs" id="ex-with-icons" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1" role="tab"
                aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fa fa-lg mx-2 fa-lemon-o" aria-hidden="true"></i>Продукты</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2" role="tab"
                aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fa fa-lg mx-2 fa-snowflake-o" aria-hidden="true"></i>Хранение</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
                aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fa fa-lg mx-2 fa-rub" aria-hidden="true"></i>Оплата</a>
            </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex-with-icons-content">
            <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
                
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne1">
                    <button
                        class="accordion-button"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                        style="font-weight: bold;"
                    >
                    Используете ли вы сахар или сахарозаменитель. Если да, то какой?
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-mdb-parent="#accordionExample">
                    <div class="accordion-body">
                    В меню линейки FIT сахар заменен на натуральный сахарозаменитель 'Fitparad 7'. В меню линейки POWER в некоторых блюдах содержится сахар в малых дозах. Подробный состав вы всегда можете уточнить у наших специалистов call-центра.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo1">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        style="font-weight: bold;"
                    >
                    Какие продукты вы используете для готовки?
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-mdb-parent="#accordionExample">
                    <div class="accordion-body">
                    Мы используем диетические сорта мяса, например куриное филе, филе индейки и говядину. Молочная продукция оптимальна по жирности — до 5%. Блюда готовим на пару и по технологии су-вид. Так они получаются вкусными и полезными.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree1">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                        style="font-weight: bold;"
                    >
                    Полезное питание - это вкусно?
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-mdb-parent="#accordionExample">
                    <div class="accordion-body">
                    Одна из ключевых целей Handy Food показать, что правильное питание это вкусно. У вас не будет ощущения что вы сидите на диете и ограничиваете себя во вкусной еде. В нашем меню есть десерты, шаверма и даже бургеры!
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour1">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                        style="font-weight: bold;"
                    >
                    Есть ли в вашем меню десерты?
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour1" data-mdb-parent="#accordionExample">
                    <div class="accordion-body">
                    Каждому время от времени хочется съесть что-то сладкое. Для того, чтобы вы не сорвались с правильного питания и могли порадовать себя чем-то вкусненьким, мы создали наши полезные десерты. Наши тарифы включают в себя множество полезных десертов: маффины, сырники, тортики, смузи и запеканки. Вас ждет настоящая вкусовая феерия!
                    </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
                
            <div class="accordion" id="accordionExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne2">
                    <button
                        class="accordion-button"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOne2"
                        aria-expanded="true"
                        aria-controls="collapseOne2"
                        style="font-weight: bold;"
                    >
                    Какой срок хранения вашей продукции?
                    </button>
                    </h2>
                    <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-mdb-parent="#accordionExample2">
                    <div class="accordion-body">
                    Контейнеры с едой необходимо хранить в холодильнике, соблюдая температурный режим. Мы используем новейшую технологию газомодифицированной среды с герметичной запайкой и температурным контролем, которая позволяет сохранять свежесть блюд несколько дней, при условии хранения в холодильнике.
                    На контейнерах указана дата производства.Мы рекомендуем соблюдать последовательность приемов пищи и не хранить наши блюда дольше определенного срока во избежание их порчи.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo2">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwo2"
                        aria-expanded="false"
                        aria-controls="collapseTwo2"
                        style="font-weight: bold;"
                    >
                    Можно ли разогревать еду в микроволновке?
                    </button>
                    </h2>
                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-mdb-parent="#accordionExample2">
                    <div class="accordion-body">
                    Контейнеры предназначены для разогрева в микроволновой печи. Просто снимите защитную пленку и поместите контейнер на пару минут в микроволновку.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree2">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseThree2"
                        aria-expanded="false"
                        aria-controls="collapseThree2"
                        style="font-weight: bold;"
                    >
                    Нужно ли готовить Handy Food после получения?
                    </button>
                    </h2>
                    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-mdb-parent="#accordionExample2">
                    <div class="accordion-body">
                    Все, что вам нужно будет сделать - это поставить коробочку с едой на пару минут в микроволновую печь и обед будет готов.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour2">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFour2"
                        aria-expanded="false"
                        aria-controls="collapseFour2"
                        style="font-weight: bold;"
                    >
                    Можно ли есть Handy Food, не разогревая?
                    </button>
                    </h2>
                    <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-mdb-parent="#accordionExample2">
                    <div class="accordion-body">
                    Все зависит от ваших вкусовых предпочтений. Вы можете съесть томатный суп и десерты без разогрева. Горячие блюда все же будут вкуснее и полезнее, если их предварительно разогреть.
                    </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
                
            <div class="accordion" id="accordionExample3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne3">
                    <button
                        class="accordion-button"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOne3"
                        aria-expanded="true"
                        aria-controls="collapseOne3"
                        style="font-weight: bold;"
                    >
                    Как я могу оплатить свой заказ?
                    </button>
                    </h2>
                    <div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3" data-mdb-parent="#accordionExample3">
                    <div class="accordion-body">
                    Оплатить заказ можно несколькими способами: банковской картой или наличными курьеру в день первой доставки питания.
                    Если вы меняете блюда, воспользуйтесь безналичной оплатой. Но если замена происходит в рамках вашего избранного и стоп-листа, мы также примем оплату наличными.
                    Оплата подписки происходит до 19:00 дня списания, иначе автоматически включается заморозка.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo3">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwo3"
                        aria-expanded="false"
                        aria-controls="collapseTwo3"
                        style="font-weight: bold;"
                    >
                    Хочу, чтобы холодильник был всегда полным. Как мне в этом поможет Handy Food?
                    </button>
                    </h2>
                    <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-mdb-parent="#accordionExample3">
                    <div class="accordion-body">
                    Ваш холодильник будет наполнен доверху коробочками с полезной и вкусной едой. Вам не придется ежедневно задаваться вопросом 'Что же сегодня поесть?'. Ответ простой - конечно же Handy Food!
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree3">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseThree3"
                        aria-expanded="false"
                        aria-controls="collapseThree3"
                        style="font-weight: bold;"
                    >
                    Нужно ли готовить Handy Food после получения?
                    </button>
                    </h2>
                    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-mdb-parent="#accordionExample3">
                    <div class="accordion-body">
                    Все, что вам нужно будет сделать - это поставить коробочку с едой на пару минут в микроволновую печь и обед будет готов.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour3">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseFour3"
                        aria-expanded="false"
                        aria-controls="collapseFour3"
                        style="font-weight: bold;"
                    >
                    Сложно ли оформить или продлить заказ в Handy Food?
                    </button>
                    </h2>
                    <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour3" data-mdb-parent="#accordionExample3">
                    <div class="accordion-body">
                    Все предельно просто. Наши менеджеры оперативно помогут вам с оформлением и продлением заказа по телефону, в социальных сетях или мессенджерах. А также сами напомнят, когда вам необходимо продлить заказ.
                    </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
            <!-- Tabs content -->

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