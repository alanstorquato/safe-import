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
    // $('#modal-exclusao').modal('open');


    // if ($(document).width() <= 375) {
    //     $('.card').removeClass('horizontal');
    // } else if ($(document).width() <= 759) {
    //     $('.card').addClass('horizontal');
    // } else if ($(document).width() == 1024 || $(document).width() >= 1024) {
    //     $('.card').addClass('horizontal');
    // }
});

function calcularResolucao() {
    return $(document).width;
}