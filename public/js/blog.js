$(function() {
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('#modal-exclusao').modal({
        dismissible: false,
        startingTop: '30%',
        endingTop: '30%'
    });

    $('.fixed-action-btn').floatingActionButton();
    $('.fixed-action-btn').floatingActionButton({
        toolbarEnabled: true
    });


    $('#btn-cancelar').click(() => {
        $('#modal-exclusao').modal('close');
    });

    scrollsSuaves();

    //Exibição de mensagem de erro (inclusão de notícia)
    setTimeout(() => {
        $('.scale-transition').toggleClass('hide');
    }, 3000);

    //Exibição de mensagem de sucesso (inclusão de notícia)
    // $('.scale-transition').toggleClass('scale-out');
    // setTimeout(() => {
    //     $('.scale-transition').toggleClass('scale-out');
    // }, 2000)



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

    $("#menu-mobile-noticias").click(function() {
        $("body").stop().animate({
            scrollTop: '0px'
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });

    });

    $("#menu-mobile-noticias").click(function() {
        $("html").stop().animate({
            scrollTop: '0px'
        }, 1500, function() {
            $(".sidenav").sidenav("close");
        });

    });

    $("#menu-noticias").click(function() {
        $("body").stop().animate({
            scrollTop: '0px'
        }, 1500);
    });

    $("#menu-noticias").click(function() {
        $("html").stop().animate({
            scrollTop: '0px'
        }, 1500);
    });
}