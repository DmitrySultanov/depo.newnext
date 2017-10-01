$(document).ready(function(){

	$.validator.addMethod('phoneCheck', function(value, element, params){
	var length = $(element).inputmask('unmaskedvalue').length;
	return (length < 10 && length > 0) ? false : true;
	}, 'Введите полный номер');

	$.validator.addMethod("email", function(value, element) {
	  return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
	}, 'Введите корректную почту');

	// Валидация
	$('.form form').each(function(){
		var $this = $(this);
        // var $thanks =  $this.parent().siblings('.thanks');

		// Валидация формы
		$this.validate({
			rules: {
				name: {
					required: true,
					minlength: 3
				},
				type_user: {
					required: true,
				},
				password: {
					required: true,
					minlength: 6
				},
				confirm_password: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				select_participant: {
					required: true,
				},
				select_lang: {
					required: true,
				}
			},
			messages: {
				name: {
					minlength: "Введите имя полностью"
				},
				password: {
					required: "Пожалуйста введите пароль",
					minlength: "Придумайте пароль длиннее 6 символов"
				},
				confirm_password: {
					required: "Пожалуйста повторите пароль",
					minlength: "Пароль не может содержать менее 6 символов",
					equalTo: "Введенные пароли не совпадают"
				},
			},
			errorElement: "span",
			highlight: function (element, errorClass, validClass) {
	          var elem = $(element);
	          elem.each(function(){
	            if(elem.hasClass('s-select2')) {
	                var isMulti = (!!elem.attr('multiple')) ? 's' : '';
	                elem.siblings('.sl').find('.select2-choice'+isMulti+'').addClass(errorClass);            
	            } else {
	                elem.addClass(errorClass);
	            }
	          });
	      	},
	      	unhighlight: function (element, errorClass, validClass) {
	          var elem = $(element);
	          elem.each(function(){
	            if(elem.hasClass('sl')) {
	                elem.siblings('.sl').find('.select2-choice').removeClass(errorClass);
	            } else {
	                elem.removeClass(errorClass);
	            }
	            
	          });
	      	}
		});
				
		$.validator.addClassRules({
		  	phone: {
		    	required: true,
		    	phoneCheck: true
		  	}
		});

		$.validator.addClassRules({
		  	laxEmail: {
		    	required: true,
		  	}
		});

		$this.submit(function(){

			if($this.valid()){
		        // alert('Успешно');
		        // $this.find('input').val('').removeClass('error');
		        // $this.find('select').val(null).trigger("change").removeClass('error');
		        // $this.find('span.error').hide();

		        // setTimeout(function(){
			        
		        	
		        // }, 300);
		    } 
		});
	});

	$('.form-pass-recovery form').each(function(){
		var $this = $(this);
        // var $thanks =  $this.parent().siblings('.thanks');

		// Валидация формы
		$this.validate({
			rules: {
				name: {
					required: true,
					minlength: 3
				},
				password: {
					required: true,
					minlength: 6
				},
				confirm_password: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				select_participant: {
					required: true,
				},
				select_lang: {
					required: true,
				}
			},
			messages: {
				name: {
					minlength: "Введите имя полностью"
				},
				password: {
					required: "Пожалуйста введите пароль",
					minlength: "Придумайте пароль длиннее 6 символов"
				},
				confirm_password: {
					required: "Пожалуйста повторите пароль",
					minlength: "Пароль не может содержать менее 6 символов",
					equalTo: "Введенные пароли не совпадают"
				},
			},
			errorElement: "span",
			highlight: function (element, errorClass, validClass) {
	          var elem = $(element);
	          elem.each(function(){
	            if(elem.hasClass('s-select2')) {
	                var isMulti = (!!elem.attr('multiple')) ? 's' : '';
	                elem.siblings('.sl').find('.select2-choice'+isMulti+'').addClass(errorClass);            
	            } else {
	                elem.addClass(errorClass);
	            }
	          });
	      	},
	      	unhighlight: function (element, errorClass, validClass) {
	          var elem = $(element);
	          elem.each(function(){
	            if(elem.hasClass('sl')) {
	                elem.siblings('.sl').find('.select2-choice').removeClass(errorClass);
	            } else {
	                elem.removeClass(errorClass);
	            }
	            
	          });
	      	}
		});
				
		$.validator.addClassRules({
		  	phone: {
		    	required: true,
		    	phoneCheck: true
		  	}
		});

		$.validator.addClassRules({
		  	laxEmail: {
		    	required: true,
		  	}
		});

		$this.submit(function(){

			if($this.valid()){
		       $(this).parents('.r-window').removeClass('active').hide(0).next('.r-window').addClass('active');
		       if($('.r-window.active').find('.dynamicNumber').length != 0){
		       	setTimeout(function(){
		       		$('.dynamicNumber').dynamicNumber('start');
		       	}, 500);
		       }
		    } 
		});
	});
});




