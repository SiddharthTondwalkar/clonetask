$(document).ready(function() {

    $('.owl-carousel').owlCarousel({
    // loop:true,
    margin:20,
    nav:false,
    // autoplay:true,
    // autoplayTimeout:1000,
    // autoplayHoverPause:true
    dots:false,
    autoplay:true,
    autoplayTimeout:2000, 
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            // nav:true
        },
        600:{
            items:1,
            // nav:false
        },
        1200:{
            items:1
        }
    }  
  

})

$('.brand').owlCarousel({
    // loop:true,
    margin:20,
    nav:false,
    // autoplay:true,
    // autoplayTimeout:1000,
    // autoplayHoverPause:true
    dots:false,
    autoplay:true,
    autoplayTimeout:2000, 
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            // nav:true
        },
        600:{
            items:1,
            // nav:false
        },
        1200:{
            items:5
        }
    }  
  

})

});


