/*Валидация e-mail*/
var patternMail = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
var email = $('#email'); //получаем id поля email
email.blur(function () { /*отслеживания фокуса мышки с поля методом blur*/
    if (email.val() != '') {
        if (email.val().search(patternMail) == 0) {
            $('#valid1').text('');
            $('#sub').attr('disabled', false);
            email.removeClass('error').addClass('ok');
        } else {
            $('#valid1').text('Введите корректный e-mail');
            $('#sub').attr('disabled', true);
            email.addClass('error');
        }
    } else {
        $('#valid1').text('Поле e-mail не должно быть пустым');
        email.addClass('error');
        $('#sub').attr('disabled', true);
    }
});


/*Валидация номера телефона*/
var patternTel = /^\d[\d\(\)\ -]{4,14}\d$/;
var tel = $('#tel'); //получаем id поля телефона
tel.blur(function () { /*отслеживания фокуса мышки с поля методом blur*/
    if (tel.val() != '') {
        if (tel.val().search(patternTel) == 0) {
            $('#valid2').text('');
            $('#sub').attr('disabled', false);
            tel.removeClass('error').addClass('ok');
        } else {
            $('#valid2').text('Введите корректный телефон');
            $('#sub').attr('disabled', true);
            tel.addClass('error');
        }
    } else {
        $('#valid2').text('Поле телефона не должно быть пустым');
        tel.addClass('error');
        $('#sub').attr('disabled', true);
    }
});

/*Валидация имени*/
var patternName = /^([а-яА-ЯёЁ]*)$/;
var nameee = $('#name'); //получаем id поля имени
nameee.blur(function () { /*отслеживания фокуса мышки с поля методом blur*/
    if (nameee.val() != '') {
        if (nameee.val().search(patternName) == 0) {
            $('#valid3').text('');
            $('#sub').attr('disabled', false);
            nameee.removeClass('error').addClass('ok');
        } else {
            $('#valid3').text('Введите корректное имя (кириллица)');
            $('#sub').attr('disabled', true);
            nameee.addClass('error');
        }
    } else {
        $('#valid3').text('Поле c именем не должно быть пустым');
        nameee.addClass('error');
        $('#sub').attr('disabled', true);
    }

});

/*Валидация логина*/
var patternLogin = /^([a-zA-Z0-9-]*)$/;
var loginn = $('#login'); //получаем id поля имени
loginn.blur(function () { /*отслеживания фокуса мышки с поля методом blur*/
    if (loginn.val() != '') {
        if (loginn.val().search(patternLogin) == 0) {
            $('#valid4').text('');
            $('#sub').attr('disabled', false);
            loginn.removeClass('error').addClass('ok');
        } else {
            $('#valid4').text('Введите корректный логин (латинские буквы)');
            $('#sub').attr('disabled', true);
            loginn.addClass('error');
        }
    } else {
        $('#valid4').text('Поле c логином не должно быть пустым');
        loginn.addClass('error');
        $('#sub').attr('disabled', true);
    }

});

/*Валидация пароля*/
var pass = $('#pass'); //получаем id поля имени
pass.blur(function () { /*отслеживания фокуса мышки с поля методом blur*/
    if (pass.val() != '') {
        if (pass.val().length >= 3) {
            $('#valid5').text('');
            $('#sub').attr('disabled', false);
            pass.removeClass('error').addClass('ok');
        } else {
            $('#valid5').text('Пароль должен быть не короче 3 символов');
            $('#sub').attr('disabled', true);
            pass.addClass('error');
        }
    } else {
        $('#valid5').text('Поле c паролем не должно быть пустым');
        pass.addClass('error');
        $('#sub').attr('disabled', true);
    }

});