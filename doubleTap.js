$(document).on('click', '#submit', function(){
    if ( $(this).hasClass('double_click') ){
        return false;
    }
    $(this).text("送信中...");
    $(this).addClass('double_click');
});
