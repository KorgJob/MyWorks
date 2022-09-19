<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <h1 class="h_reg text-center">Форма регистрации</h1>
            <form class="regist d-flex justify-content-around flex-column m-auto" action="#" method="POST">
                <input type="text" class="form-control" required name="login" id="login" placeholder="Введите логин"><span id="valid4"></span><br>
                <input type="text" class="form-control" required name="name" id="name" placeholder="Введите имя"><span id="valid3"></span><br>
                <input type="password" class="form-control" required name="pass" id="pass" placeholder="Введите пароль"><span id="valid5"></span><br>
                <input type="file" name="img" id="img"><br><br>
                <button class="btn btn-success" id="sub" type="submit">Зарегистрировать</button>
            </form>
        </div>
    </div>
</body>
</html>