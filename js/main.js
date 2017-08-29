	$(document).ready(function(){
	$('.btn_menu').click(function(){
	$('.menu ul').slideToggle();
	});

$("#owl-example").owlCarousel({
	items: 1,
	itemsDesktop: [1199,1],
	itemsDesktopSmall: [979,1],
	itemsTablet: [768,1],
	itemsMobile: [479,1],
	navigation: true,
	navigationText: false,
});

$('#Container').mixItUp();


$("#menu, #top_button").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
 
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
 
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });

$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	});


	});