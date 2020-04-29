$(window).on('load orientationchange resize', function(){
    if (Math.abs(window.orientation) === 90) {
        $('#landscape').show();
    } else {
        $('#landscape').hide();
    }
});