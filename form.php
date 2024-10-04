<?php
ini_set("session.cookie_lifetime", "7200");
ini_set("session.gc_maxlifetime", "7200");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Page</title>
    <link rel="stylesheet" href="styles/style3.css" />
    <link rel="stylesheet" href="styles/style_footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="javascript/formValidate.js" defer></script>
    <script src="javascript/formValidate2.js" defer></script>
    <script src="javascript/formSubmitValid.js" defer></script>
    <link rel="icon" href="images/jata_negara.png" />
</head>
<body>
<main>
    <!-- Header Start -->
    <header>
        <nav class="nav container">
            <img class="nav_logo" style="height: 80px" src="images/logo.png" alt="logo"/>
            <ul class="menu_items">
                <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
                <li><a href="index.html" class="nav_link">Home</a></li>
                <li><a href="form.php" class="nav_link"><u><b>Application</b></u></a></li>
                <li><a href="requirements.html" class="nav_link">Information</a></li>
                <li><a href="about.html" class="nav_link">About </a></li>
            </ul>
            <img src="images/bars.svg" alt="bars icon" id="menu_toggle" />
        </nav>
    </header>
    <br><br><br><br>
    <!-- Header End -->

    <section>
        <p>&nbsp; <u style="color:orange"><a class="nav_link" href="index.html" style="color:orange">Home</a></u> <span style="color:gray">/ Application</span> </p><br></p><br>
        <div class="parent">
            <div class="container_s">
                <div class="steps">
                    <span class="circle active">1</span>
                    <span class="circle">2</span>
                    <span class="circle">3</span>
                    <div class="progress-bar">
                        <span class="indicator"></span>
                    </div>
                </div>
            </div>
        </div><br>
        <h1 style="text-align:center;">&nbsp;Please fill in the information below<br /></h1><br>
        
        <div class="form-container">
        <form action="relatives.php" class="form" method="post" id="formId">
    <div class="container_s">
        <div class="steps_s">
            <span class="circle_s">1</span>&nbsp;&nbsp;
            <h3>SECTION A : PERSONAL DETAILS</h3>&nbsp;<i>(All details must be in <b>CAPITAL LETTER</b>)</i>
        </div>
    </div>
    <div class="gender-box">
        <h3><b>Application purposes</b> <span style="color: red">*</span></h3>
        <div class="gender-option">
            <div class="gender">
                <input type="radio" name="purpose" value="NEW APPLICATION" checked />
                <label for="check-new-application">NEW APPLICATION</label>
            </div>
            <div class="gender">
                <input type="radio" name="purpose" value="UPDATE DETAILS" />
                <label for="check-update">UPDATE DETAILS</label>
            </div>
        </div>
    </div>
    <div class="input-box">
        <label><b>Full Name</b> <span style="color: red">*</span></label>
        <input type="text" placeholder="Enter full name" name="full_name" id="full_name"  pattern="^[A-Z\s]+$" required />
        <div class="error-message" id="error-full_name"></div>
    </div>
    <div class="column_s">
        <div class="input-box">
            <label><b>Gender</b> <span style="color: red">*</label>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
            <div class="error-message" id="error-gender"></div>
        </div>
        <div class="input-box">
            <label><b>MyKad Number</b> <span style="color: red">*</span></label>
            <input type="number" placeholder="Enter mykad number" name="mykad_number" id="mykad_number"  required />
            <div class="error-message" id="error-mykad_number"></div>
        </div>
        <div class="input-box">
            <label><b>Age</b> <span style="color: red">*</span></label>
            <input type="number" name="age" id="age" placeholder="Enter age" required/>
            <div class="error-message" id="error-age"></div>
        </div>
    </div>
    <div class="column_s">
        <div class="input-box">
            <label><b>Email Address</b> <span style="color: red">*</span></label>
            <input type="email" placeholder="Enter email address" name="email" id="email" required />
            <div class="error-message" id="error-email"></div>
        </div>
        <div class="input-box">
            <label><b>Phone Number</b> <span style="color: red">*</span></label>
            <input type="number" placeholder="Enter phone number" name="phone_number" id="phone_number" required />
            <div class="error-message" id="error-phone_number" required></div>
        </div>
        <div class="input-box">
            <label><b>Home Phone Number</b> <span style="color: red">*</label>
            <input type="number" placeholder="Enter home phone number" name="home_number" id="home_number" required />
            <div class="error-message" id="error-home_number"></div>
        </div>
    </div>
    <div class="input-box address">
        <label><b>Home address</b> <span style="color: red">*</label>
        <input type="text" placeholder="Enter home address" name="address" id="address" required />
        <div class="error-message" id="error-address"></div>
        <div class="column_s">
        <div class="input-box">
            <input type="number" placeholder="Enter your postcode" name="postcode" id="postcode" required />
            <div class="error-message" id="error-postcode"></div>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your city" name="city" id="city" pattern="^[A-Z\s]+$" required />
            <div class="error-message" id="error-city"></div>
        </div>
        <div class="input-box">
            <select name="state" id="state" required>
            <option value="">Select state</option>
                <option value="JOHOR">JOHOR</option>
                <option value="KEDAH">KEDAH</option>
                <option value="KELANTAN">KELANTAN</option>
                <option value="MELAKA">MELAKA</option>
                <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                <option value="PAHANG">PAHANG</option>
                <option value="PULAU PINANG">PULAU PINANG</option>
                <option value="PERAK">PERAK</option>
                <option value="PERLIS">PERLIS</option>
                <option value="SABAH">SABAH</option>
                <option value="SARAWAK">SARAWAK</option>
                <option value="SELANGOR">SELANGOR</option>
                <option value="TERENGGANU">TERENGGANU</option>
                <option value="KUALA LUMPUR">KUALA LUMPUR</option>
                <option value="LABUAN">LABUAN</option>
                <option value="PUTRAJAYA">PUTRAJAYA</option>
            </select>
            <div class="error-message" id="error-state"></div>
        </div>
    </div>
    <div class="column_s">
        <div class="input-box">
            <label><b>Bank Account</b> <span style="color: red">*</label>
            <select name="bank_account" id="bank_account" required>
                <option value="">Select Bank Account</option>
                <option value="AMBANK">AMBANK</option>
                <option value="BANK ISLAM">BANK ISLAM</option>
                <option value="CIMB">CIMB BANK</option>
                <option value="MAYBANK">MAYBANK</option>
                <option value="RHB">RHB BANK</option>
            </select>
            <div class="error-message" id="error-bank_account"></div>
        </div>
        <div class="input-box">
            <label><b>Account Number</b> <span style="color: red">*</span></label>
            <input type="number" placeholder="Enter account number" name="account_number" id="account_number" required />
            <div class="error-message" id="error-account_number"></div>
        </div>
    </div>
    <div class="column_s">
        <div class="input-box">
            <label><b>Type of Occupation</b> <span style="color: red">*</label>
            <select name="type_occupation" id="type_occupation" required>
                <option value="">Select Occupation</option>
                <option value="GOVERNMENT SECTOR">GOVERNMENT SECTOR</option>
                <option value="PRIVATE SECTOR">PRIVATE SECTOR</option>
                <option value="SELF-EMPLOYED">SELF-EMPLOYED</option>
                <option value="UNEMPLOYED">UNEMPLOYED</option>
                <option value="RETIREE">RETIREE</option>
            </select>
            <div class="error-message" id="error-type_occupation"></div>
        </div>
        <div class="input-box">
            <label><b>Total Income (RM)</b> <span style="color: red">*</span></label>
            <input type="number" placeholder="Enter total income" name="total_income" id="total_income" required />
            <div class="error-message" id="error-total_income"></div>
        </div>
    </div>
    <div class="column_s">
        <div class="input-box">
            <label><b>Marriage Status</b> <span style="color: red">*</label>
            <select name="marriage_status" id="marriage_status" required>
                <option value="">Select marriage status</option>
                <option value="MARRIED">MARRIED</option>
                <option value="DIVORCED">DIVORCED</option>
                <option value="WIDOW">WIDOW</option>
                <option value="WIDOWER">WIDOWER</option>
                <option value="BACHELOR/SINGLE">BACHELOR/SINGLE</option>
            </select>
            <div class="error-message" id="error-marriage_status"></div>
        </div>

        <div class="input-box hidden" id="date-box">
        <label><b>Date for</b>(marriage/divorce/spouse's death) <span style="color: red">*</span></label>
        <input type="date" id="status_date" name="status_date">
        <div class="error-message" id="error-status_date"></div>
        </div>

    </div>
    <div class="column_s">
    <div class="input-box">
    <label><b>Number of Children</b> <span style="color: red">*</span></label>
    <select name="number_children" id="number_children" required>
        <option value="">Select number of children</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <div class="error-message" id="error-number_children"></div>
</div>

        <div class="input-box">
            <label><b>Status for Next of Kin</b> <span style="color: red">*</label>
            <select name="next_of_kin" id="next_of_kin" required>
                <option value="">Select status</option>
                <option value="AVAILABLE">AVAILABLE</option>
                <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                <option value="SAME AS SPOUSE">SAME AS SPOUSE</option>
            </select>
            <div class="error-message" id="error-next_of_kin"></div>
        </div>
    </div>
        <div class="input-box" width=100%>
            <button type="submit" name="submit" onClick="validate()" >Next &rarr;</button>
        </div>
    <br><br>
</form>

        </div><br><br>        
    </section>
</main>

<!-- Footer Start -->
<?php include "footer.php" ?>
<!-- Footer End -->
    
</body>
</html>
