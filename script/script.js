$(document).ready(function() {
    $('#loginbtn').click(function() {
        $(".signin").css("display", "flex");
    });

    $('#signup').click(function() {
        $(".signin").css("display", "none");
        $(".signup").css("display", "flex");
    });

    $('.close').click(function() {
        $(".signin").css("display", "none");
        $(".signup").css("display", "none");
        $(".feedback").css("display","none");
    });

    $('#feedbackbtn').click(function(){
        $(".feedback").css("display","flex");
    })
});