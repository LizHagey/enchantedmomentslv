var mn = $(".mainNav");
$(window).scroll(function(){
    if( $(this).scrollTop() > 250) {
        mn.addClass("navScrolled");
    }
    else {
        mn.removeClass("navScrolled");
    }
});


