$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 80){
            $(".menubar").addClass("scrollBar");
        } else {
            $(".menubar").removeClass("scrollBar");
        }
        if($(this).scrollTop() > 500){
            $(".arrow_up").removeClass("hidden");
        } else {
            $(".arrow_up").addClass("hidden");
        }
    });
});