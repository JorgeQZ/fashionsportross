jQuery(document).ready(function(e) {
    jQuery('#mobile-button').click(function(e) {
        e.preventDefault();
        jQuery('#container-id').toggleClass('act');
    });
});