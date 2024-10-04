function validate2() {
    const childCount = parseInt(document.getElementById('childCount').value, 10);
    const nof = parseInt(document.getElementById('nof').value, 10);
    const ms = parseInt(document.getElementById('ms').value, 10);
    var allFields = [];
    var childFields = [];
    var fields = [];
    var kinFields = [];

    if (childCount > 0) {
        for (let i = 1; i <= childCount; i++) {
            childFields.push(`child_name${i}`, `child_number${i}`, `child_age${i}`, `child_status${i}`);
        }
    }
    if (ms > 0) {
        fields = [
            'spouse_name', 'type_identity', 'origins', 'spouse_gender', 'spouse_identification_number',
            'spouse_phone_number', 'spouse_type_occupation', 'spouse_bank_account', 'spouse_account_number'
        ];
    }
    if (nof > 0) {
        kinFields = ['kin_name', 'kin_id_number', 'relationship', 'kin_phone_number'];
    }

    allFields = fields.concat(childFields).concat(kinFields);

    allFields.forEach(fieldName => {
        var element = document.querySelector(`[name="${fieldName}"]`);
        let fieldValue = element.value;

        if (fieldValue === "") {
            document.getElementById("error-" + fieldName).innerHTML = "This field is required";
            $(element).css('border-color', 'red'); // Use jQuery to set border color
        }
    });
}