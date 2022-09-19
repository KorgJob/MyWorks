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
      701:{
        items: 2
      },
      1025: {
        items: 3
      }
    }
  });
});

$(window).scroll(function() {
  var height = $(window).scrollTop();
  /*Если сделали скролл на 100px задаём новый класс для header*/
  if(height > 100){
  $('header').addClass('sticky');
  } else{
       /*Если меньше 100px удаляем класс для header*/
  $('header').removeClass('sticky');
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

  console.log(sum_price);
});


// Фильтрация (категории)
$(function() {

  let filter = $("[data-filter]");

  filter.on("click", function(event) {
      event.preventDefault();

      let cat = $(this).data('filter');
      console.log(cat);

      if(cat == 'all') {
          $("[data-cat]").removeClass("hide");
      } else {
          $("[data-cat]").each(function() {
              let workCat = $(this).data('cat');

              if(workCat != cat) {
                  $(this).addClass('hide');
              } else {
                  $(this).removeClass('hide');
              }
          });
      }
  });
});

// Валидация на промкод
var promo = $('#inputpromo2');
promo.blur(function (){
    if(promo.val() != ''){
    $('#valid2').text('Промокода не существует!');
    $('#sub').attr('disabled', true);
    promo.addClass('error');
  } else {
    $('#valid2').text('');
    $('#sub').attr('disabled', false);
    promo.removeClass('error').addClass('ok');
  }
});
