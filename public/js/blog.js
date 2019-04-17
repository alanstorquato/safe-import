$(function() {
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('#modal-exclusao').modal({
        dismissible: false,
        startingTop: '30%',
        endingTop: '30%'
    });

    $('#btn-cancelar').click(() => {
        $('#modal-exclusao').modal('close');
    });

    scrollsSuaves();

    setTimeout(() => {
        $('.scale-transition').toggleClass('hidden');
        $('.scale-transition').toggleClass('scale-out');
    }, 2000);

    // $('#modal-exclusao').modal('open');


    // if ($(document).width() <= 375) {
    //     $('.card').removeClass('horizontal');
    // } else if ($(document).width() <= 759) {
    //     $('.card').addClass('horizontal');
    // } else if ($(document).width() == 1024 || $(document).width() >= 1024) {
    //     $('.card').addClass('horizontal');
    // }
});

function scrollsSuaves() {
    $(".brand-logo").click(function() {
        $("body").stop().animate({
            scrollTop: "0px"
        }, 2000);
    });

    $(".brand-logo").click(function() {
        $("html").stop().animate({
            scrollTop: "0px"
        }, 2000);
    });

    $("#menu-mobile-home").click(function() {
        $("body").stop().animate({
            scrollTop: "0px"
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-mobile-home").click(function() {
        $("html").stop().animate({
            scrollTop: "0px"
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-home").click(function() {
        $("body").stop().animate({
            scrollTop: "0px"
        }, 1500);
    });

    $("#menu-home").click(function() {
        $("html").stop().animate({
            scrollTop: "0px"
        }, 1500);
    });

    $("#menu-mobile-sobre").click(function() {
        $("body").stop().animate({
            scrollTop: $("#sobre").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-mobile-sobre").click(function() {
        $("html").stop().animate({
            scrollTop: $("#sobre").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-sobre").click(function() {
        $("body").stop().animate({
            scrollTop: $("#sobre").offset().top
        }, 1500);
    });

    $("#menu-sobre").click(function() {
        $("html").stop().animate({
            scrollTop: $("#sobre").offset().top
        }, 1500);
    });

    $("#menu-mobile-como-funciona").click(function() {
        $("body").stop().animate({
            scrollTop: $("#como-funciona").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-mobile-como-funciona").click(function() {
        $("html").stop().animate({
            scrollTop: $("#como-funciona").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-como-funciona").click(function() {
        $("body").stop().animate({
            scrollTop: $("#como-funciona").offset().top
        }, 1500);
    });

    $("#menu-como-funciona").click(function() {
        $("html").stop().animate({
            scrollTop: $("#como-funciona").offset().top
        }, 1500);
    });

    $("#menu-mobile-duvidas").click(function() {
        $("body").stop().animate({
            scrollTop: $("#duvidas-frequentes").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });

    });

    $("#menu-mobile-duvidas").click(function() {
        $("html").stop().animate({
            scrollTop: $("#duvidas-frequentes").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });

    });

    $("#menu-duvidas").click(function() {
        $("body").stop().animate({
            scrollTop: $("#duvidas-frequentes").offset().top
        }, 1500);
    });

    $("#menu-duvidas").click(function() {
        $("html").stop().animate({
            scrollTop: $("#duvidas-frequentes").offset().top
        }, 1500);
    });

    $("#menu-mobile-contato").click(function() {
        $("body").stop().animate({
            scrollTop: $("#contato").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-mobile-contato").click(function() {
        $("html").stop().animate({
            scrollTop: $("#contato").offset().top
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });
    });

    $("#menu-contato").click(function() {
        $("body").stop().animate({
            scrollTop: $("#contato").offset().top
        }, 1500);
    });

    $("#menu-contato").click(function() {
        $("html").stop().animate({
            scrollTop: $("#contato").offset().top
        }, 1500);
    });

}