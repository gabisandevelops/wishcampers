$(document).ready(function(){
    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    /*click event on toggle menu*/
     $toggleCollapse.click(function(){
        $nav.toggleClass('collapse');
     });

//Owl Carousel for blog

$('.owl-carousel').owlCarousel({


    loop: true,
    autoplay: true,
    center:true,
    autoplayTimeout:3000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },            
        960:{
            items:1
        },
        1200:{
            items:1
        }
    },
    
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]

});


});