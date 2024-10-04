document.addEventListener('DOMContentLoaded', function () {
    const childCount = parseInt(document.getElementById('childCount').value, 10);
    const nof = parseInt(document.getElementById('nof').value, 10);
    const ms = parseInt(document.getElementById('ms').value, 10);
    var allFields = [];
    var childFields = [];
    var fields=[];
    var kinFields=[];

    if(childCount>0)
        {
            for (let i = 1; i <= childCount; i++) 
            {

            childFields.push(`child_name${i}`, `child_number${i}`, `child_age${i}`, `child_status${i}`);
            }
        }
     if (ms>0)
        {
            fields = [
                'spouse_name', 'type_identity', 'origins', 'spouse_gender', 'spouse_identification_number',
                'spouse_phone_number', 'spouse_type_occupation', 'spouse_bank_account', 'spouse_account_number'
            ];
                
        }
     if (nof>0)
        {
            kinFields = ['kin_name', 'kin_id_number', 'relationship', 'kin_phone_number'];
        
        }
    
    allFields = fields.concat(childFields).concat(kinFields);
    

    

    const successfullyAttachedFields = [];

    allFields.forEach(field => {
        const element = document.querySelector(`[name="${field}"]`);
        if (element) {
            element.addEventListener('input', validateField);
            successfullyAttachedFields.push(field);
        }
    });

    console.log("Successfully attached event listeners to the following fields:", successfullyAttachedFields);

    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (event) {
            let hasError = false;

            allFields.forEach(field => {
                const element = document.querySelector(`[name="${field}"]`);
                if (element && (!element.checkValidity() || element.value.trim() === '')) {
                    hasError = true;
                    validateField({ target: element }); // Trigger validation for error messages
                }
            });

            if (hasError) {
                event.preventDefault(); // Prevent form submission
                console.log('Form submission prevented due to validation errors');
            }
        });

        console.log('Event listener attached to the form');
    } else {
        console.log('Form element not found');
    }

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

        if (field.name.includes('number')) {
            if (field.value.length > 0 && isNaN(field.value)) {
                errorMessage = 'This field should be a number';
            }
        }

        if (field.name === 'type_identity') {
            identity = field.value;
        }
        
        if (field.name === 'origins'&& field.value!="") {
            if (identity === 'PASSPORT') {
                if(field.value==='MALAYSIA')
                {
                    errorMessage = 'This option is for non passport holders';
                }
            }
            else if(identity !='PASSPORT')
            {
                if(field.value!=='MALAYSIA')
                    {
                        errorMessage = 'This option is only for passport holders';
                    }
            }
        }
        

        if (field.name.includes('spouse_identification_number') && field.value.length>0) 
        {
            if(field.value>0)
            {
                if(field.value.length!= 12)
                    {
                        errorMessage = 'Identification should be 12 digits';
                    }
            }
            else
            {
                errorMessage = 'Please enter a valid ID';
            }
            
            
        }

        if (field.name.includes('child') && field.value.length<0) {
            errorMessage = 'This field is required';
        }

        if (field.name.includes('phone_number') && field.value.length>0) 
            {
                if(field.value>0)
                {
                    if(field.value.length!= 10)
                        {
                            errorMessage = 'Phone number should be 10';
                        }
                }
                else
                {
                    errorMessage = 'Please enter a valid phone number';
                }

            }

        if (field.name.includes('account_number') && (isNaN(field.value) || field.value <= 0)) {
            errorMessage = 'Please enter a valid account number';
        }

        if (field.name === 'spouse_name' || field.name === 'kin_name'||field.name.includes('child_name')) {
            if (/[a-z]/.test(field.value)) {
                errorMessage = 'Details should be in capital letter';
            }
        }
        
        if (field.name === 'kin_id_number'||field.name.includes('child_number')) {
            if (field.value.length > 0) {

                if(field.value>0)
                {
                    if (field.value.length != 12) {
                        errorMessage = 'ID should be 12 digits';
                    }  
                }   
                else {
                    errorMessage = 'Please enter a valid ID';
                }

                
            }
            else
                errorMessage = 'This field is required';
        }

        if(field.name.includes('child_age'))
        {
            if (field.value.length > 0) {

                if(field.value<0)
                {
                    errorMessage = 'Please enter a valid age.';
                }   
                
            }
            else
                errorMessage = 'This field is required';
        }

        if (errorField) {
            errorField.textContent = errorMessage;
        }

        if (errorMessage) {
            field.style.borderColor = 'red'; // Set border color to red when there's an error
        } else {
            field.style.borderColor = ''; // Reset border color when there's no error
        }

        field.setCustomValidity(errorMessage);
    }
});
