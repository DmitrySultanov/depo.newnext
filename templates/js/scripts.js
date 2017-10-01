$(document).ready(function(){

	$("[data-fancybox]").fancybox({
    image : {
      protect: true
    },
    helpers : {
        media : {}
    }
  });

  $('.select-participant, .select-lang').select2({
    placeholder: 'Выберите из списка',
    minimumResultsForSearch: -1,
    // allowClear: true,
    maximumSelectionLength: 2,
    language: {
        maximumSelected: function (e) {
            var t = "Вы можете выбрать не более " + e.maximum + "-х вариантов";
            e.maximum != 1 && (t += "");
            return t + '';
        }
    }
  });

  $('.select-nolimit').select2({
    placeholder: 'У вас есть хобби?',
    minimumResultsForSearch: -1,
    tags: true
    // allowClear: true,
  });

  var phold;

  var $sl = $('.select-single').each(function(){
    var placeholder = $(this).data('placeholder');
    var phold = placeholder;
  });

  $('.select-single').select2({
    placeholder: phold,
    minimumResultsForSearch: -1,
  });

  $('.select-multi').select2({
    placeholder: 'Выберите из списка',
    minimumResultsForSearch: -1,
    // allowClear: true,
    maximumSelectionLength: 2,
    language: {
        maximumSelected: function (e) {
            var t = "Вы можете выбрать не более " + e.maximum + "-х вариантов";
            e.maximum != 1 && (t += "");
            return t + '';
        }
    }
  });

  $("input[name='search']").addClear();
  $(".addclear").addClear();


  $(window).on('resize', function(){
    if($(window).width() > 767){
      var RcolumnHeight = $('.registaration-body .reg-panel .rightcolumn').outerHeight(),
          Lcolumn = $('.registaration-body .reg-panel .leftcolumn');
      Lcolumn.css('height', RcolumnHeight);
    } else{
      $('.mes-input').attr('placeholder', 'Сообщение'); 
    }
  }).resize();

  $("#sticky").sticky({topSpacing:0});


  $('.visible-info').on('click', function(){
    $(this).toggleClass('active');

    if($(this).hasClass('active')){
      $(this).siblings('.hidden-info').fadeIn();
    } else{
      $(this).siblings('.hidden-info').fadeOut();
    }
  });
  $(document).mouseup(function (e) {
    var container = $(".more-info");
    if (container.has(e.target).length === 0){
        container.find('.hidden-info').hide();
        container.find('.visible-info').removeClass('active');
    }
  });
  $('.user-info-link').on('click', function(){
    $(this).parents('.hidden-info').hide();
    $(this).parents('.hidden-info').siblings('.visible-info').removeClass('active');
  });

  function moreInfoFunc(){
    var $link = $('.see_more');

    $link.on('click', function(){
      $link.toggleClass('active');

      if($link.hasClass('active')){
        $(this).text('Свернуть');
        $(this).siblings('._hidden').slideDown();
      } else{
        $(this).text('Смотреть подробнее');
        $(this).siblings('._hidden').slideUp();
      }

      return false
    });
  }
  moreInfoFunc();

  function tabs() {

    var $wrapper = $('.tabs-wrapper');

    $wrapper.each(function(){
      var $this = $(this);

      $('.tab_content >li:not(":first")', $this).hide();

      $('.tabs li', $this).each(function(i){
        $(this).attr('data-tab', i)
      });

      $('.tab_content>li', $this).each(function(i){
        $(this).attr('data-tab', i)
      });

      $('.tabs li', $this).on('click', function(){
        var dataTab = $(this).data('tab');
        var getWrapper = $(this).closest('.tabs-wrapper');

        getWrapper.find('.tabs li').removeClass('active');
        $(this).addClass('active');

        getWrapper.find('.tab_content>li').hide();
        getWrapper.find('.tab_content>li[data-tab='+dataTab+']').fadeIn('slow');
      });
    });
  }
  tabs();

  $('select').on('change', function() {
      $(this).valid();
      resetValues();
  });

  if($('#createDatepick').size()){

    $('#createDatepick').dateRangePicker({
      autoClose: true,
      singleDate : true,
      singleMonth: true,
      language:'ru', 
      separator : ' - ',
      format: 'DD-MM-YYYY',
      // showShortcuts: false,
      // startDate: new Date(),
      // selectForward: true,
      monthSelect: true,
      yearSelect: [1920, moment().get('year')]
    }).bind('datepicker-change',function(event,obj)
    {
      console.log(obj);
      $(this).valid();

      if($(this).valid()){
        $(this).removeAttr('placeholder');
      } else{
        $(this).attr('placeholder', 'дд-мм-гггг');
      }
    });
  }


  // $("input[name='datepicker']").inputmask("99-99-9999");

  $('.pickup .extend').on('click', function(){
    $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $(this).text('Свернуть');
        $(this).parents('.pickup').find('.hidden').slideDown();
      } else{
        $(this).text('Расширенный');
        $(this).parents('.pickup').find('.hidden').slideUp();
      }
  });

  function resetValues() {
    $('.pickup').each(function(){
      var $this = $(this);
      var selects = $('select', $this);
      var visibleSelects = $('select:not(".hidden select")', $this);
      var reset = $('.reset', $this);
      var extend = $('.extend', $this);
      var hidden = $('.hidden', $this);
      var arr = [];

      if(!extend.hasClass('active')){

        visibleSelects.each(function(i){
          var sLength = visibleSelects.length;
          if(!$(this).val() == ''){
            arr.push(i);
            // console.log(arr)

            if(arr.length == sLength){
              reset.show();
            } else{
              reset.hide();
            }
          } 
        });
      } else {
        selects.each(function(i){
          var sLength = selects.length;
          if(!$(this).val() == ''){
            arr.push(i);
            // console.log(arr)

            if(arr.length == sLength){
              reset.show();
            } else{
              reset.hide();
            }
          }
        });
      }
    });
  }

  $('.reset').on('click', function(){
    var selects = $(this).parents('.pickup').find('select');
    var errors = selects.siblings('span.error');

    selects.val(null).trigger("change").removeClass('error');
    errors.hide();
  });

  var inputs = document.querySelectorAll( '.inputfile' );
  Array.prototype.forEach.call( inputs, function( input )
  {
    var label  = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
      var fileName = '';
      if( this.files && this.files.length > 1 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else
        fileName = e.target.value.split( '\\' ).pop();

      if( fileName )
        label.querySelector( 'span' ).innerHTML = fileName;
      else
        label.innerHTML = labelVal;
    });
  });


  $('.tooltip-new-pass').tooltipster({
    theme: 'tooltipster-dark', 
    interactive: true,
    side: 'right'
  });


  $('.tooltip-recovery-pass').tooltipster({
    theme: 'tooltipster-dark', 
    interactive: true,
    side: 'bottom'
  });

  $('.tooltip-featured').tooltipster({
    theme: 'tooltipster-dark', 
    interactive: true,
    side: 'left',
    contentCloning: true
  });

  $('.featured-btn').on('click', function(){
    $(this).toggleClass('active');

    if($(this).hasClass('active')){
      $(this).tooltipster('disable');
    } else{
      $(this).tooltipster('enable');
    }
  });

  $('#search').keyup(function(){
    var $this = $(this);

    var Value = $('#search').val();
    if(!Value == ''){
      setTimeout(function(){
        $('.variables-list').fadeIn();
      }, 200);
    } else{
      $('.variables-list').fadeOut();
    }

    $('.search-panel a[href="#clear"]').on('click', function(){
      $('.variables-list').fadeOut();
    });
  });

  function accordion(){
    $('.accordion').each(function(){
      var $item = $('.acc-item', $(this)),
          $title = $('.acc-title', $(this)),
          $hidden = $('.acc-hidden', $(this));

      $title.on('click', function(){
        $(this).toggleClass('active');

        if($(this).hasClass('active')){
          // $(this).addClass('active');
          $(this).siblings('.acc-hidden').slideDown();
        } else{
          $(this).removeClass('active');
          $(this).siblings('.acc-hidden').slideUp('fast');
        }
      });

    });
  }
  accordion();

  $('.new-request-js').on('click', function(){
      $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $('.new-request-hidden').slideDown();
      } else{
        $('.new-request-hidden').slideUp();
      }
  });
  $('.search-js').on('click', function(){
      $(this).toggleClass('active');

      if($(this).hasClass('active')){
        $('.search-form-hidden').slideDown();
      } else{
        $('.search-form-hidden').slideUp();
      }
  });

  function checkPassword(form) {
    var password = form.password.value; // Получаем пароль из формы
    var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // Буквы в нижнем регистре
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // Буквы в верхнем регистре
    var digits = "0123456789"; // Цифры
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // Спецсимволы
    var is_s = false; // Есть ли в пароле буквы в нижнем регистре
    var is_b = false; // Есть ли в пароле буквы в верхнем регистре
    var is_d = false; // Есть ли в пароле цифры
    var is_sp = false; // Есть ли в пароле спецсимволы
    for (var i = 0; i < password.length; i++) {
      /* Проверяем каждый символ пароля на принадлежность к тому или иному типу */
      if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
      else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
      else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
      else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
    }
    var rating = 0;
    var text = "";
    if (is_s) rating++; // Если в пароле есть символы в нижнем регистре, то увеличиваем рейтинг сложности
    if (is_b) rating++; // Если в пароле есть символы в верхнем регистре, то увеличиваем рейтинг сложности
    if (is_d) rating++; // Если в пароле есть цифры, то увеличиваем рейтинг сложности
    if (is_sp) rating++; // Если в пароле есть спецсимволы, то увеличиваем рейтинг сложности
    /* Далее идёт анализ длины пароля и полученного рейтинга, и на основании этого готовится текстовое описание сложности пароля */
    if (password.length < 6 && rating < 3) text = "Простой";
    else if (password.length < 6 && rating >= 3) text = "Средний";
    else if (password.length >= 8 && rating < 3) text = "Средний";
    else if (password.length >= 8 && rating >= 3) text = "Сложный";
    else if (password.length >= 6 && rating == 1) text = "Простой";
    else if (password.length >= 6 && rating > 1 && rating < 4) text = "Средний";
    else if (password.length >= 6 && rating == 4) text = "Сложный";
    alert(text); // Выводим итоговую сложность пароля
    return false; // Форму не отправляем
  }

  $('#meter').entropizer({
    target: '#password',
    maximum: 80,
    update: function(data, ui) {
        ui.bar.css({
            'background-color': data.color,
            'width': data.percent + '%'
        });
    }
  });

  $('input.onlyNumber').keypress(function(e) {
    e = e || event;
    if (e.ctrlKey || e.altKey || e.metaKey) return;
    var chr = getChar(e);
    if (chr == null) return;
    if (chr < '0' || chr > '9') {
      return false;
    }
  });
  function getChar(event) {
    if (event.which == null) {
      if (event.keyCode < 32) return null;
      return String.fromCharCode(event.keyCode) // IE
    }

    if (event.which != 0 && event.charCode != 0) {
      if (event.which < 32) return null;
      return String.fromCharCode(event.which) // остальные
    }

    return null; // специальная клавиша
  }

});

$(function(){
  $("input.phone").inputmask("+7(999) 999-9999");
});
$(function($){
  $('.dynamicNumber').dynamicNumber({
    from: 120,
    to: 0,
    duration: 120000
  });
  // $('.dynamicNumber').dynamicNumber('start');

  $('.dynamicNumber').on('dynamicNumber::finish', function (e) {
    $('.link-wrap a').removeClass('disabled');
  });
});




// (function($) {
//     $('#meter').entropizer({
//         target: '#password',
//         update: function(data, ui) {
//             ui.bar.css({
//                 'background-color': data.color,
//                 'width': data.percent + '%'
//             });
//         }
//     });
// })($);
