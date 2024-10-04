$(document).ready(function() {
    $('#marriage_status').change(function() {
        // Get the selected value of marriage_status
        var selectedStatus = $(this).val();

        // Show or hide the date-box based on selected marriage status
        if (selectedStatus === 'MARRIED' || selectedStatus === 'DIVORCED' || selectedStatus === 'WIDOW' || selectedStatus === 'WIDOWER') {
            $('#date-box').removeClass('hidden');
        } else {
            $('#date-box').addClass('hidden');
            $('#status_date').val(''); // Clear the date input if hidden
        }

        // Reset the next_of_kin dropdown
        $('#next_of_kin').val('');
        $('#error-next_of_kin').text('This field is required');
        $('#next_of_kin').css('border-color', 'red');
    });
});