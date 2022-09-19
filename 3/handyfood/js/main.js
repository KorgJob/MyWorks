$(window).scroll(function() {
    var height = $(window).scrollTop();
    /*Если сделали скролл на 100px задаём новый класс для header*/
    if(height > 600){
    $('header').addClass('stickyw');
    $('nav').removeClass('navbar-dark');
    $('nav').addClass('navbar-light');
    } else{
         /*Если меньше 100px удаляем класс для header*/
    $('header').removeClass('stickyw');
    $('nav').addClass('navbar-dark');
    }
});

$('.product_counter').change(function(){
    // Цена (все цены вводить в одном формате)
    var elements = $('.product_price');
    var counter = $('.product_counter');
    var sum_price = 0;
    var total = $('#total_sum');
    $.each(elements,function(index,value){

      let product_value = value.innerText;
      let number = product_value.slice(0);
      number = +number; 
      let product_index = index;

      $.each(counter,function(index,value){

        if(product_index == index){
          let count = +value.value;
          let product_sum = number * count;
          sum_price += product_sum;
        }
        
      });
      
    });
    
    total.val(sum_price + " ₽");
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();

/*Валидация e-mail*/
var patternMail = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
var email = $('#registerEmail'); //получаем id поля email
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

/*Валидация логина*/
var patternLogin = /^([a-zA-Z0-9-]*)$/;
var loginn = $('#registerUsername'); //получаем id поля имени
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
var pass = $('#registerPassword'); //получаем id поля имени
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

/*Валидация имени*/
var patternName = /^([а-яА-ЯёЁ]*)$/;
var nameee = $('#registerName'); //получаем id поля имени
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
var loginn = $('#loginName'); //получаем id поля имени
loginn.blur(function () { /*отслеживания фокуса мышки с поля методом blur*/
    if (loginn.val() != '') {
        if (loginn.val().search(patternLogin) == 0) {
            $('#valid4').text('');
            loginn.removeClass('error').addClass('ok');
        } else {
            $('#valid4').text('Введите корректный логин (латинские буквы)');
            loginn.addClass('error');
        }
    } else {
        $('#valid4').text('Поле c логином не должно быть пустым');
        loginn.addClass('error');
    }

});

/*Валидация пароля*/
var pass = $('#loginPassword'); //получаем id поля имени
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