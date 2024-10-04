$(document).ready(function() {
    $('#type_identity').change(function() {
        // Reset the origins dropdown
        $('#origins').val('');
        $('#error-origins').text('This field is required');
        $('#origins').css('border-color', 'red');
    });
});