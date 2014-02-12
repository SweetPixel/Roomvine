$(document).ready(function() {

    $('.top-nav li').localScroll();

    $('.top-nav').mobileMenu({
       defaultText: 'Navigation',
       className: 'select-menu',
       subMenuDash: '&ndash;'
   });

    $('#main-slider').flexslider({
        animation: "fade",
        slideshowSpeed: 8000,
        start:function(){
            $('#mainSldHeading').text('Roomvine');
            $('#mainSldPara').text('Talk to people in the same place as you. Without the awkwardness');
        // console.log('calling start');
    },
    before:function(slider){
        switch(slider.currentSlide)
        {
            case 0:
                $('#mainSldHeading').text('Linked for a moment');
                $('#mainSldPara').text('Whether you are in a bar, restaurant, classroom, concert, you are sharing  the experience with others in the same room as you. Roomvine lets you interact with them anonymously.');
                break;
            case 1:
                $('#mainSldHeading').text('A safe hello');
                $('#mainSldPara').text('Have random discussions with the people around without revealing your true identity');
                break;
            case 2:
                $('#mainSldHeading').text('Hear it through the Roomvine');
                $('#mainSldPara').text('Check out the scene rating of a place on that day before heading there');
                break;
            default:
                $('#mainSldHeading').text('Roomvine');
                $('#mainSldPara').text('Talk to people in the same place as you. Without the awkwardness');
                break;
        }
        // if(slider.co)
        // console.log(slider.currentSlide);
    }
});

    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });

    $('.top-nav').onePageNav();

    $(window).scroll( function() {
        var value = $(this).scrollTop();
        if ( value > 350 )
            $(".top-nav li").css("padding", "20px 15px 0px");
        else
            $(".top-nav li").css("padding", "30px 15px 10px");
    });

    $(window).scroll( function() {
        var value = $(this).scrollTop();
        if ( value > 350 )
            $(".logo h1").css("margin", "0px 0 0 0");
        else
            $(".logo h1").css("margin", "10px 0 0 0");
    });


});

