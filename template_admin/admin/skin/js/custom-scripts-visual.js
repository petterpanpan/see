/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
    "use strict";
    

    $(document).ready(function () {
		$(".dropdown-button").dropdown();
		$("#visual-left-btn").click(function(){
			if($(this).hasClass('closed')){
				$('.visual-left').animate({left: '-280px'});
				$(this).removeClass('closed');
				$('#visual-right').animate({'margin-left' : '0px'});
				$('#visual-left-btn').animate({left: '0px'});
				$('.sidebar-line').animate({left: '-280px'});
			
				
			}
			else{
			    $(this).addClass('closed');
				$('.visual-left').animate({left: '0px'});
				$('#visual-left-btn').animate({left: '280px'});
				$('#visual-right').animate({'margin-left' : '290px'}); 
				$('.sidebar-line').animate({left: '0px'});
			}
		});
    });

	$(".dropdown-button").dropdown();
	
}(jQuery));
