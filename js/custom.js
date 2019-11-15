jQuery(document).ready(function(e) {
    jQuery('#mobile-button').click(function(e) {
        e.preventDefault();
        jQuery('#container-id').toggleClass('act');
        jQuery('.contain-search-bar').removeClass('act');
    });

    jQuery('#search-button').click(function(e) {
        e.preventDefault();
        jQuery('.contain-search-bar').toggleClass('act');
    });

    $(window).scroll(function(e) {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 150) {
            document.getElementById('js-top').className = 'to-up show';
        } else {
            document.getElementById('js-top').className = 'to-up hide';
        }
    });

    $('#js-top').click(function(e) {
        e.preventDefault();
        jQuery('html,body').animate({ scrollTop: 0 }, 500);

    });

});