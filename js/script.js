$(document).ready(() => {
    var cityName = "";

    if(typeof localStorage.getItem("cityName") == "object"){
        cityName = "Выбрать город";
        $('.correct-city').text(cityName);  
    }else{
        cityName = localStorage.getItem("cityName");
        $('.correct-city').text(cityName);  
    }

    // $('.city-toggle').click(() => {
    //     $('.task-city-container').toggleClass('task-city-active');
    // });


    $('.city-item').click((e) => {
        cityName = $(e.target).text();
        localStorage.setItem("cityName", cityName);
        $('.correct-city').text(cityName);  
    });

    $('.city-toggle').click(() => {
        $('.task-city-container').toggleClass('task-city-active');
    });


    $('#open_menu').click(() => {
       $('.menu-section').addClass('menu-section-active'); 
    });
    $('#close_menu').click(() => {
        $('.menu-section').removeClass('menu-section-active'); 
    });
    $('#close_menu_b').click(() => {
        $('.menu-section').removeClass('menu-section-active'); 
    });
   
    
});