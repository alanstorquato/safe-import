$(function() {
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('select').formSelect();


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