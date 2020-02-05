$(document).ready(function(){
    refresh_working();
    refresh_domain();
    refresh_online();
    refresh_version();
    refresh_rcon();
});

function refresh_working(){
    $('#server_text_1').load('/assets/php/server/working.php', function(){
        var state = document.getElementById('server_text_1').innerHTML;
        if(state=='正常です') {
            server_working.setAttribute('src', '/assets/img/working.png');
        }
        setTimeout(refresh_working,5000);
    });
}

function refresh_domain(){
    $('#server_text_2').load('/assets/php/server/domain.php', function(){
        setTimeout(refresh_domain,5000);
    });
}

function refresh_online(){
    $('#server_text_4').load('/assets/php/server/online.php', function(){
        setTimeout(refresh_online,5000);
    });
}

function refresh_version(){
    $('#server_text_6').load('/assets/php/server/version.php', function(){
        setTimeout(refresh_version,5000);
    });
}

function refresh_rcon(){
    $('#server_text_8').load('/assets/php/server/rcon.php', function(){
    });
}