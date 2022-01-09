$(function(){

    $('.slider_inner').slick({
        nextArrow:null,
        prevArrow:null,
        autoplay:true,
        speed:3000,
        fade:true,
        infinite:true,
        cssEase:'ease',
        loop: true,
		   margin: 30,
		   nav: true,
		   dots: false,
		   autoplay: true,
		   autoplayHoverPause: true,
		   smartSpeed: 500,
		   responsive:{
		      0:{
		         items:1
		      },
	         600:{
		         items:2
		      },
		      1000:{
		         items:3
		      }
		   },
    });



});

document.addEventListener('DOMContentLoaded', function() {

	/*----- Send_Request -----*/

	if(document.forms.request) {
		document.forms.request.addEventListener('submit', addRequest);

		function addRequest(event) {
			event.preventDefault();

			var formData = new FormData(this);

			doAjax({
				method: 'POST',
				url: '../logic/send_request.php',
				data: formData,
				callback: function(response) {
					alert(response);
				}
			});
		}
	}
	
});

$(document).ready(function() {
	$('#send_mess').click(function(){
		$.post(
			"../mail.php",
			{
				fio: $('[name="fio"]').val(),
				email: $('[name="email"]').val(),
				cont: $('[name="cont"]').val(),
				message: $('[name="message"]').val(),
			},
			function(data) {
				$('.result').html(data);
			}
		);
	});
});