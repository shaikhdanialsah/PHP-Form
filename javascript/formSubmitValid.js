
    function validate() {
    let fullname = document.getElementById("full_name").value;
    let gender = document.getElementById("gender").value;
    let mykadNumber = document.getElementById("mykad_number").value;
    let email = document.getElementById("email").value;
    let phoneNumber = document.getElementById("phone_number").value;
    let homeNumber = document.getElementById("home_number").value;
    let address = document.getElementById("address").value;
    let postcode = document.getElementById("postcode").value;
    let city = document.getElementById("city").value;
    let state = document.getElementById("state").value;
    let bankAccount = document.getElementById("bank_account").value;
    let accountNumber = document.getElementById("account_number").value;
    let typeOccupation = document.getElementById("type_occupation").value;
    let totalIncome = document.getElementById("total_income").value;
    let marriageStatus = document.getElementById("marriage_status").value;
    let numberChildren = document.getElementById("number_children").value;
    let nextOfKin = document.getElementById("next_of_kin").value;
    let age = document.getElementById("age").value;

    if (fullname === "") {
        document.getElementById('error-full_name').innerHTML = "This field is required";
        $('#full_name').css('border-color', 'red');
    }

    if (gender === "") {
        document.getElementById('error-gender').innerHTML = "This field is required";
        $('#gender').css('border-color', 'red');
    }

    if (mykadNumber === "") {
        document.getElementById('error-mykad_number').innerHTML = "This field is required";
        $('#mykad_number').css('border-color', 'red');
    }

    if (email === "") {
        document.getElementById('error-email').innerHTML = "This field is required";
        $('#email').css('border-color', 'red');
    }

    if (phoneNumber === "") {
        document.getElementById('error-phone_number').innerHTML = "This field is required";
        $('#phone_number').css('border-color', 'red');
    }

    if (homeNumber === "") {
        document.getElementById('error-home_number').innerHTML = "This field is required";
        $('#home_number').css('border-color', 'red');
    }

    if (address === "") {
        document.getElementById('error-address').innerHTML = "This field is required";
        $('#address').css('border-color', 'red');
    }

    if (postcode === "") {
        document.getElementById('error-postcode').innerHTML = "This field is required";
        $('#postcode').css('border-color', 'red');
    }

    if (city === "") {
        document.getElementById('error-city').innerHTML = "This field is required";
        $('#city').css('border-color', 'red');
    }

    if (state === "") {
        document.getElementById('error-state').innerHTML = "This field is required";
        $('#state').css('border-color', 'red');
    }

    if (bankAccount === "") {
        document.getElementById('error-bank_account').innerHTML = "This field is required";
        $('#bank_account').css('border-color', 'red');
    }

    if (accountNumber === "") {
        document.getElementById('error-account_number').innerHTML = "This field is required";
        $('#account_number').css('border-color', 'red');
    }

    if (typeOccupation === "") {
        document.getElementById('error-type_occupation').innerHTML = "This field is required";
        $('#type_occupation').css('border-color', 'red');
    }

    if (totalIncome === "") {
        document.getElementById('error-total_income').innerHTML = "This field is required";
        $('#total_income').css('border-color', 'red');
    }

    if (marriageStatus === "") {
        document.getElementById('error-marriage_status').innerHTML = "This field is required";
        $('#marriage_status').css('border-color', 'red');
    }

    if (numberChildren === "") {
        document.getElementById('error-number_children').innerHTML = "This field is required";
        $('#number_children').css('border-color', 'red');
    }

    if (nextOfKin === "") {
        document.getElementById('error-next_of_kin').innerHTML = "This field is required";
        $('#next_of_kin').css('border-color', 'red');
    }

    if (age === "") {
        document.getElementById('error-age').innerHTML = "This field is required";
        $('#age').css('border-color', 'red');
    }

    if(marriage_status!="")
    {
        if(marriage_status!="BACHELOR/SINGLE")
        {
            let status_date = document.getElementById("status_date").value;
            {
                if(status_date==="")
                {
                    document.getElementById('error-status_date').innerHTML = "This field is required";
                    $('#status_date').css('border-color', 'red');
                }
            }
        }
    }
}

    