jQuery(document).ready(function($) {
    // var ajax_object {
    // 'we_value': 'I am a value'
    // }
    // $('body').append(ajax_object.thank_you_text);
    var data = {
        'action': 'send_letter_to_admin',
        'nonce': ajax_object.nonce      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        alert('Got this from the server: ' + response);
    });
});
