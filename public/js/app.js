/* 
 Created on : Apr 23, 2016, 12:37:54 AM
 Author     : prakhar <srivprakhar@gmail.com>
 */
$(document).ready(function(){
    
    // work with the navbar coloring
    $(".menu-item").click(function(){
        $.each($(".menu-item"),function(k,v){
            if($(v).parent().hasClass("active")){
                $(this).parent().removeClass("active");
            }
        });
        
        $(this).parent().addClass("active");
        
        href = $(this).attr("href");
        
		$('html, body').animate({
			scrollTop: $(href).offset().top - 60
		}, 800);
		href = null;
        
    });
});