$(document).on('click', '#submit', function(){
    if ( $(this).hasClass('double_click') ){
        return false;
    }
    $(this).addClass('double_click');
    document.getElementById("restart_yes").src = "/assets/img/yes2.png";
});
