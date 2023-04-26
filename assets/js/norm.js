loader();
function loader(_success) {
	var obj = document.querySelector('.preloader')
	t = setInterval(function() {
		obj.classList.remove('show');
		clearInterval(t);
		if (_success){return _success()}
	}, 2000);
}

// start jquery
$(document).ready(function() {

	// 
	$('.lazy_logo').lazy({effect:"fadeIn",effectTime:200,threshold:0})
	$('.lazy_img').lazy({effect:"fadeIn",effectTime:300,threshold:0})
	$('.lazy_bag').lazy({effect:"fadeIn",effectTime:500,threshold:0})


	// 
	$('.menu_bars_clc').on('click', function() {
		$(this).parent().toggleClass('menu_act');
	})
	$('.usmenu_bars_clc').on('click', function() {
		$(this).parent().toggleClass('menu_act');
		$('.ub1_r').toggleClass('ub1_r_act');
	})


	$('.body, .html').on('wheel', function(event) {
		if (event.originalEvent.deltaY > 0) $(this).attr('data-scroll-direction', 'down')
		else $(this).attr('data-scroll-direction', 'up')
	});

	// скрол
	let scroll = $(window).scrollTop()
	if (scroll > 80) $('.header').addClass('header_fix')
  	else $('.header').removeClass('header_fix')
	$(window).scroll(function() {
		scroll = $(window).scrollTop()
		if (scroll > 80) $('.header').addClass('header_fix')
		else $('.header').removeClass('header_fix')
	})
	


	// на верх
	$('.clc_top').on('click',function(){$('body,html').animate({scrollTop:0},500)})







	// mask form
	$('.fr_code').mask("0000");
	$('.fr_age').mask("00");
	$('.fr_phone').mask('+7 (000) 000-00-00');
	

	// 
	$('input[type*="tel"]').on('input', function() {
		var val = $(this).val().replace(/_/g, '').replace(/ /g, '').replace(/-/g, '').replace(/\(/g, '').replace(/\)/g, '').replace(/\+/g, '')
		$(this).attr('data-val', val)
		if ($(this).attr('data-lenght') <= val.length) {
			$(this).attr('data-sel', 1);
		} else {$(this).attr('data-sel',0)}
	});
	$('input[type*="text"], input[type*="password"]').on('input', function() {
		$(this).attr('data-val', $(this).val())
		if ($(this).attr('data-lenght') <= $(this).val().length) {
			$(this).attr('data-sel', 1);
		} else {$(this).attr('data-sel',0)}
	});



	// form - input 
	// lenght
	$('.form_im input[type*="tel"]').on('input', function(){
		$(this).parent().removeClass('form_pust');
		in_rez = $(this).val().replace(/ /g, '').replace(/\+/g, '').replace(/\)/g, '').replace(/\(/g, '').replace(/-/g, '').replace(/_/g, '')
		if ($(this).attr('data-pr') == '1' && in_rez.length < $(this).attr('data-lenght')) {
			$(this).parent().removeClass('form_pr_y')
			$(this).parent().addClass('form_pr_n')
		} else if (in_rez.length < $(this).attr('data-lenght')) {
			$(this).parent().removeClass('form_pr_y')
		} else {
			$(this).parent().removeClass('form_pr_n')
			$(this).parent().removeClass('form_pr_nm')
			$(this).parent().addClass('form_pr_y')
			$(this).attr('data-pr', '1')
		}
	})
	$('.form_im input[type*="text"], input[type*="password"]').on('input', function(){
		$(this).parent().removeClass('form_pust');
		if ($(this).attr('data-pr') == '1' && $(this).val().length <= $(this).attr('data-lenght')) {
			$(this).parent().removeClass('form_pr_y')
			$(this).parent().addClass('form_pr_n')
		} else if ($(this).val().length <= $(this).attr('data-lenght')) {
			$(this).parent().removeClass('form_pr_y')
		} else {
			$(this).parent().removeClass('form_pr_n')
			$(this).parent().removeClass('form_pr_nm')
			$(this).parent().addClass('form_pr_y')
			$(this).attr('data-pr', '1')
		}
	})
	$('input[type*="url"]').on('input', function(){
		$(this).parent().removeClass('form_pust');
		in_rez = $(this).val().replace('https://', '').replace('www.', '').replace('youtube.com/watch?v=', '').replace('youtu.be/', '').replace(/\&.*/, '');
		$(this).attr('data-val', in_rez);
	})




	// 
	$('.form_cn input').focus(function() {
		$(this).parent().addClass('form_act');
	});
	$('.form_cn input').blur(function(){
		if ($(this).val().length <= 0) {
			$(this).parent().removeClass('form_act');
		}
	})
	$('.form_cn input').on('input', function(){
		$(this).parent().removeClass('form_pust');
		$('.form_sms').parent().addClass('dsp_n');
	})


	//
	$('.bli_setib1').on('click', function() {
		$('.bl_item').removeClass('bl_item_ac')
		$(this).parents('.bl_item').addClass('bl_item_ac')
	})


	//
	$('.form_icon_pass').on('click', function() {
		if ($(this).siblings('.password').attr('data-eye') == 0) {
			$(this).siblings('.password').attr('type', 'text')
			$(this).siblings('.password').attr('data-eye', '1')
			$(this).addClass('fa-eye')
			$(this).removeClass('fa-eye-slash')
		} else {
			$(this).siblings('.password').attr('type', 'password')
			$(this).siblings('.password').attr('data-eye', '0')
			$(this).removeClass('fa-eye')
			$(this).addClass('fa-eye-slash')
		}
	})





	// СМС
	$('.disb_zab').click(function(){
		$('.fr').addClass('pop_bl_act');
		$('#html').addClass('ovr_h');
	})
	$('.zabr_back').click(function(){
		$('.fr').removeClass('pop_bl_act');
		$('#html').removeClass('ovr_h');
	})

	$('.orderSend').on('click', function() {
		var name = $(this).parent().siblings().children('.name')
		var phone = $(this).parent().siblings().children('.phone')
		if (name.attr('data-pr') != 1 || phone.attr('data-pr') != 1) mess('Форманы толтырыңыз')
		else {
			$.ajax({
				url: "/config/send.php?mess",
				type: "POST",
				dataType: "html",
				data: ({name: name.val(), phone: phone.val()}),
				success: function(data){
					if (data == 'yes') mess('Сәтті жіберілді')
					else mess('Қайта кіріуіңізді сұраймын!')
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})





}) // end jquery