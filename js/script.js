$(document).ready(() => {
    $('#open_menu').click(() => {
       $('.menu-section').addClass('menu-section-active'); 
    });
    $('#close_menu').click(() => {
        $('.menu-section').removeClass('menu-section-active'); 
    });
    $('#close_menu_b').click(() => {
        $('.menu-section').removeClass('menu-section-active'); 
    });
    $('.city-toggle').click(() => {
        $('.task-city-container').toggleClass('task-city-active');
    });
    
});