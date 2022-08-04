jQuery( function() {
    jQuery(document).on('click', '.mobile__header .burger', function() { // мобильное меню бургер
        jQuery(this).toggleClass('active');
        jQuery('.mobile__header .mobile__nav').toggleClass('active');
        jQuery('body').toggleClass('fixed');
    })

    
    new WOW().init();
});