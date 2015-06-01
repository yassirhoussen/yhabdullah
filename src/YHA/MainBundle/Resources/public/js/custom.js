// ICONBOX
 $(function() {
 	"use strict";
	 $('.iconbox ul li').hover(
	     function () {
			$('.iconbox ul li').not(this).css("opacity", ".5");
	     }, 
	     function () {
	     	$('.iconbox ul li').css("opacity", "1");
	     }
	 	);
 });
 
 // SKIILS
 $(function() {
 	"use strict";
    $(".dial").knob({
    	'width': '100',
    	'height': '100',
    	'thickness': .05,
    	'fgColor': 'rgba(215, 173, 13, .6)',
    	'bgColor': 'rgba(215, 173, 13, .4)',
    	'inputColor': 'black',
    	'readOnly': true,
    	'font': '28px "Poiret One"',
    	'fontWeight': "300",
    	 parse: function (v) {return parseInt(v);},
         format: function (v) {return v + "%";}
    });
});

 // TIMELINE
 $(function() {
 	"use strict";
	 $('.timeline ul li').hover(
	     function () {
			$('.timeline ul li').not(this).css("opacity", ".5");
			$('span', this).addClass('changed');
	     }, 
	     function () {
	     	$('.timeline ul li').css("opacity", "1");
	     	$('span', this).removeClass('changed');
	     }
	 	);
 });
 
// function initAjaxForm()
// {
//     $('body').on('submit', '#contactform', function (e) {
//  		console.log($(this).serialize());
//         e.preventDefault();
 
//         $.ajax({
//             type: $(this).attr('method'),
//             url: $(this).attr('action'),
//             data: $(this).serialize(),
//             success: function(data) {
//                 $('#contactform').clearForm();
//                 $('#cf-success').css("display", "block").css("opacity", "1");
//             },
//             error: function(data) {
// 	            $('#cf-error').css("display", "block").css("opacity", "1");
// 	        }
//         });
//     });
// }
// $('#contactform').on('submit', function(){
//     	$.ajax({
//     		type : $(this).attr( 'method' ),
//     		url  : $(this).attr( 'action' ), 
//             data : $(this).serialize(),
//             success: function() {
//                 $('#contactform').clearForm();
//                 $('#cf-success').css("display", "block").css("opacity", "1");
//             },
//             error: function() {
// 	            $('#cf-error').css("display", "block").css("opacity", "1");
// 	        }
//     	});
// 	});
// });


