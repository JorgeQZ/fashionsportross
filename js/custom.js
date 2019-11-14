jQuery(document).ready(function(e) {
    jQuery('#mobile-button').click(function(e) {
        e.preventDefault();
        jQuery('#container-id').toggleClass('act');
    });

    jQuery('#search-button').click(function(e) {
        e.preventDefault();
        jQuery('.contain-search-bar').toggleClass('act');
    });
});