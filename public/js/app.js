/* 
 Created on : Apr 23, 2016, 12:37:54 AM
 Author     : prakhar <srivprakhar@gmail.com>
 */
$(document).ready(function () {

    // work with the navbar coloring
    $(".menu-item").click(function () {

        // Go through all the .menu-items and remove the active
        // class if the element contatins it. 
        $.each($(".menu-item"), function (k, v) {
            if ($(v).parent().hasClass("active")) {
                $(this).parent().removeClass("active");
            }
        });

        // Add the active class to the current element
        $(this).parent().addClass("active");

        // Move to the target location
        moveToLocation($(this).attr("href"));


    });

    // Move to the top of the page on click of the top
    $("#top a").click(function () {
        moveToLocation($(this).attr("href"));
    })


});

// function to simulate scrolling
function moveToLocation(href) {
    $('html, body').animate({
        scrollTop: $(href).offset().top - 50
    }, 800);
}