document.addEventListener('DOMContentLoaded', function () {
    const fields = [
        'full_name', 'gender', 'mykad_number', 'email', 'phone_number',
        'home_number', 'address', 'postcode', 'city', 'state',
        'bank_account', 'account_number', 'type_occupation',
        'total_income', 'marriage_status', 'number_children', 'next_of_kin','status_date','age'
    ];

    const successfullyAttachedFields = [];

    fields.forEach(field => {
        const element = document.getElementById(field);
        if (element) {
            element.addEventListener('input', validateField);
            successfullyAttachedFields.push(field);
        }
    });

    console.log("Successfully attached event listeners to the following fields:", successfullyAttachedFields);
    function validateField(event) {
        const field = event.target;
        const errorField = document.getElementById('error-' + field.name);
        let errorMessage = '';
    
        if (!field.checkValidity()) {
            if (field.validity.valueMissing) {
                errorMessage = 'This field is required';
            } else if (field.validity.typeMismatch) {
                errorMessage = 'Please enter a valid value';
            } else if (field.validity.tooShort || field.validity.tooLong) {
                errorMessage = 'Please enter a valid value';
            } else if (field.validity.patternMismatch) {
                errorMessage = 'Please follow the required format';
            }
        }
    
        if (field.name === 'mykad_number') {
            if (field.value.length > 0) {
                if (field.value>0&&field.value.length != 12 || isNaN(field.value)) {
                    errorMessage = 'ID should be 12 digits';
                }
                else if(field.value<=0)
                    errorMessage = 'Please enter a valid ID';
            } else {
                errorMessage = 'This field is required';
            }
        }

        if(field.name === 'full_name' || field.name === 'city') {
            if(/[a-z]/.test(field.value)) {
                errorMessage = 'Details should be in capital letters';
            }
        }

        if (field.name === 'address') {
            if (field.value.length > 0) {
                if (/[a-z]/.test(field.value)) {
                    errorMessage = 'Details should be in capital letters';
                }
            } else {
                errorMessage = 'This field is required';
            }
        }
    
        if (field.name === 'phone_number') {
            if (field.value.length > 0) {
                if (field.value>0&&field.value.length != 10 || isNaN(field.value)) {
                    errorMessage = 'Phone number should be 10 digits';
                }
                else if(field.value<=0)
                    errorMessage = 'Please enter a valid phone number';
            } else {
                errorMessage = 'This field is required';
            }
        }
    
        if (field.name === 'home_number') {
            if (field.value.length > 0) {
                if (field.value>0&&field.value.length != 10 || isNaN(field.value)) {
                    errorMessage = 'Phone number should be 10 digits';
                }
                else if(field.value<=0)
                    errorMessage = 'Please enter a valid phone number';
            } else {
                errorMessage = 'This field is required';
            }
        }
    
        if (field.name === 'postcode') {
            if (field.value.length > 0) {

                if(field.value>0)
                {
                    if (field.value.length != 5 || isNaN(field.value)) 
                        errorMessage = 'Postcode should be 5 digits';
                    
                }
                else if(field.value<=0)
                    errorMessage = 'Please enter a valid postcode';
                
            } else {
                errorMessage = 'This field is required';
            }
        }
    
        if (field.name === 'account_number') {
            if (field.value.length > 0) {
                if (isNaN(field.value) || parseFloat(field.value) <= 0) {
                    errorMessage = 'Please enter a valid account number';
                }
            } else {
                errorMessage = 'This field is required';
            }
        }

        if (field.name === 'age') {
            if (field.value.length > 0) {
                if (isNaN(field.value) || parseFloat(field.value) <= 0) {
                    errorMessage = 'Please enter a valid age';
                }
            } else {
                errorMessage = 'This field is required';
            }
        }
    
        if (field.name === 'total_income') {
            if (field.value.length > 0) {
                if (isNaN(field.value) || parseFloat(field.value) <0) {
                    errorMessage = 'Please enter a valid total income';
                }
            } else {
                errorMessage = 'This field is required';
            }
        }

        let marriage = document.getElementById('marriage_status')?.value;
        if (field.name === 'next_of_kin') {
            if (marriage !== "MARRIED" && field.value === "SAME AS SPOUSE") {
                errorMessage = "Same as spouse option only for married applicants";
            }
        }

        if (field.name === 'marriage_status') {
            const dateBox = document.getElementById('date-box');
            const statusDateInput = document.getElementById('status_date');
        
            if (field.value === 'BACHELOR/SINGLE' || field.value === '') {
                dateBox.classList.add('hidden');
                statusDateInput.removeAttribute('required');
            } else {
                dateBox.classList.remove('hidden');
                statusDateInput.setAttribute('required', 'required');
            }
        }
    
        if (errorField) {
            errorField.textContent = errorMessage;
        }
    
        if (errorMessage) {
            field.style.borderColor = 'red'; // Set border color to red when there's an error
        } else {
            field.style.borderColor = 'black'; // Reset border color when there's no error
        }
    
        field.setCustomValidity(errorMessage);
    }
});
