$(document).ready(function() {

    // waypoint aanimate courses section
    $('.js--wp-1').waypoint(function(direction){
        $('.js--wp-1').addClass('animated fadeInUp')
    }, {
        offset: '70%'
    });

    // waypoint aanimate courses section
    $('.js--wp-2').waypoint(function(direction){
        $('.js--wp-2').addClass('animated fadeInLeft')
    }, {
        offset: '90%'
    });

    // waypoint aanimate courses section
    $('.js--wp-3').waypoint(function(direction){
        $('.js--wp-3').addClass('animated fadeInRight')
    }, {
        offset: '90%'
    });

    /*========== waypoint sticky-top navigation ==========*/
    $('#waypoint--fade').waypoint(function(direction) {
        if (direction == 'down') {
            $('nav').addClass('sticky-top');  
        } else {
            $('nav').removeClass('sticky-top');
        }
    }, {
        offset: '20%'

        
    }); 

    // waypoint enabler trial
    function onScrollInit( items, trigger ) {
        items.each( function() {
        var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
        osElement.css({
            '-webkit-animation-delay': osAnimationDelay,
            '-moz-animation-delay': osAnimationDelay,
            'animation-delay': osAnimationDelay
        });
        var osTrigger = ( trigger ) ? trigger : osElement;
        osTrigger.waypoint(function() {
            osElement.addClass('animated').addClass(osAnimationClass);
        },{
            triggerOnce: true,
            offset: '60%'
        });
        });
    }


}); 


