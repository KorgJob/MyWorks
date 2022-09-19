window.onload =function(){
    jQuery("#user-city").text(ymaps.geolocation.city);
}

$(document).ready(function(){
    ymaps.ready(function(){
        var geolocation = ymaps.geolocation;
        $('#tow').html('Ваш город: '+geolocation.city);
    });
});

$(function() {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      items: 4,
      margin: 10,
      loop: true,
      dots: false,
      responsiveClass:true,
      responsive:{
        0:{
          items: 1
        },
        700:{
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  });

  $('.product_counter').change(function(){
    // Цена (все цены вводить в одном формате)
    var elements = $('.product_price');
    var counter = $('.product_counter');
    var sum_price = 0;
    var total = $('#total_sum');
    $.each(elements,function(index,value){

      let product_value = value.innerText;
      let number = product_value.slice(0, -2);
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