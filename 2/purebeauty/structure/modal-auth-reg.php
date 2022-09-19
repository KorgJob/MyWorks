<!-- Авторизация -->
<div class="modal fade" id="authmodal" tabindex="-1" aria-labelledby="authmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center mb-3">Авторизация</h2>
                    <form class="form-auth d-flex flex-column justify-content-between p-3 m-0" action="../php/auth.php" method="post">
                        <div class="mb-3 mt-0">
                            <input type="text" class="form-control input-decorate" name="login" id="authlogin" maxlength="20" placeholder="Логин">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control input-decorate" name="password" id="authspassword" maxlength="20" placeholder="Пароль">
                        </div>
                        <button class="btn btn-purchase px-4 py-2 fs-5 mt-4" type="submit">Войти</button>
                        <p class="reg-link my-2 fs-6 text-center" data-bs-toggle="modal" data-bs-target="#regmodal">Регистрация</p>      
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- Регистрация -->
        <div class="modal fade" id="regmodal" tabindex="-1" aria-labelledby="regmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center mb-3">Регистрация</h2>
                    <form class="form-auth d-flex flex-column justify-content-between p-3 m-0" action="../php/registration.php" method="post">
                        <div class="mb-3 mt-0">
                            <input type="text" class="form-control input-decorate" name="login" id="login" placeholder="Логин" maxlength="20" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control input-decorate" name="email" id="regemail" placeholder="E-Mail" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control input-decorate" name="password" id="password" maxlength="20" placeholder="Пароль" required>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label fs-6" for="flexCheckDefault">
                            Я принимаю условия использования и соглашаюсь с <a class="green-link" href="https://e-kontur.ru/enquiry/1318/privacy">политикой конфиденциальности</a> PureBeauty.
                        </label>
                        </div>
                        <button class="btn btn-purchase px-4 py-2 fs-5 mt-4" type="submit">Зарегистрироваться</button>         
                    </form>
                </div>
            </div>
        </div>
        </div>