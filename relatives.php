<?php
ini_set("session.cookie_lifetime", "7200");
ini_set("session.gc_maxlifetime", "7200");
session_start();
if (isset($_POST['submit'])) {
    // Set session variables based on form input
    if (isset($_POST['full_name'])) {
        $_SESSION['name'] = $_POST['full_name'];
    }

    if (isset($_POST['purpose'])) {
        $_SESSION['purpose'] = $_POST['purpose'];
    }

    if (isset($_POST['gender'])) {
        $_SESSION['gender'] = $_POST['gender'];
    }

    if (isset($_POST['mykad_number'])) {
        $_SESSION['mykad_number'] = $_POST['mykad_number'];
    }

    if (isset($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }

    if (isset($_POST['phone_number'])) {
        $_SESSION['phone_number'] = $_POST['phone_number'];
    }

    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    }

    if (isset($_POST['home_number'])) {
        $_SESSION['home_number'] = $_POST['home_number'];
    }

    if (isset($_POST['address'])) {
        $_SESSION['address'] = $_POST['address'];
    }

    if (isset($_POST['postcode'])) {
        $_SESSION['postcode'] = $_POST['postcode'];
    }

    if (isset($_POST['city'])) {
        $_SESSION['city'] = $_POST['city'];
    }

    if (isset($_POST['state'])) {
        $_SESSION['state'] = $_POST['state'];
    }

    if (isset($_POST['bank_account'])) {
        $_SESSION['bank_account'] = $_POST['bank_account'];
    }

    if (isset($_POST['account_number'])) {
        $_SESSION['account_number'] = $_POST['account_number'];
    }

    if (isset($_POST['type_occupation'])) {
        $_SESSION['type_occupation'] = $_POST['type_occupation'];
    }

    if (isset($_POST['total_income'])) {
        $_SESSION['total_income'] = $_POST['total_income'];
    }

    if (isset($_POST['number_children'])) {
        $_SESSION['number_children'] = $_POST['number_children'];
    }

    if (isset($_POST['marriage_status'])) {
        $_SESSION['marriage_status'] = $_POST['marriage_status'];

        if($_SESSION['marriage_status']=="MARRIED")
        {
            $_SESSION['ms']=1;
        }
        else
        {
            $_SESSION['ms']=0;
        }
    }

    if($_SESSION['marriage_status']!="BACHELOR/SINGLE")
    {
        if(isset($_POST['status_date']))
        {
            $_SESSION['status_date']=$_POST['status_date'];
        }
    }

    if (isset($_POST['next_of_kin'])) {
        $_SESSION['next_of_kin'] = $_POST['next_of_kin'];

        if($_SESSION['next_of_kin']=="AVAILABLE")
        {
            $_SESSION['nof'] = 1;
        }
        else
            $_SESSION['nof'] = 0;
    }
}



header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Page</title>
    <link rel="stylesheet" href="styles/relatives.css" />
    <link rel="stylesheet" href="styles/style_footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="javascript/relatives.js" defer></script>
    <script src="javascript/relativesValidate2.js" defer></script>
    <script src="javascript/relativesValidate.js" defer></script>
    <script src="javascript/relativesSubmitValid.js" defer></script>

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
    <p>&nbsp; <u style="color:orange"><a class="nav_link" href="index.html" style="color:orange">Home</a></u> <span style="color:gray">/ Application/ Relatives Details</span> </p><br></p><br>
        <div class="parent">
            <div class="container_s">
                <div class="steps">
                    <span class="circle active">1</span>
                    <span class="circle active">2</span>
                    <span class="circle">3</span>
                    <div class="progress-bar">
                        <span class="indicator"></span>
                    </div>
                </div>
            </div>
        </div><br>
        <h1 style="text-align:center;">&nbsp;Please fill in the information below<br /></h1><br>
        <input type="hidden" id="childCount" value="<?php echo $_SESSION['number_children']; ?>">
        <input type="hidden" id="nof" value="<?php echo $_SESSION['nof']; ?>">
        <input type="hidden" id="ms" value="<?php echo $_SESSION['ms']; ?>">
        
        <div class="form-container">
        <form action="validate.php" class="form" method="post">
    <?php if($_SESSION['marriage_status'] == "MARRIED") { ?>
        <div class="container_s">
            <div class="steps_s">
                <span class="circle_s">2</span>&nbsp;&nbsp;
                <h3>SECTION B : SPOUSE DETAILS</h3>&nbsp;<i>(All details must be in <b>CAPITAL LETTER</b>)</i>
            </div>
        </div><br>
        <div class="input-box">
            <label><b>Full Name</b> <span style="color: red">*</span></label>
            <input type="text" placeholder="Enter full name" name="spouse_name"  pattern="^[A-Z\s]+$" required />
            <div class="error-message" id="error-spouse_name"></div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Type of Identification</b> <span style="color: red">*</span></label>
                <select name="type_identity" id="type_identity" required>
                    <option value="">Select identification</option>
                    <option value="MyKad">MyKad</option>
                    <option value="MyPR">MyPR</option>
                    <option value="MyKAS">MyKAS</option>
                    <option value="PASSPORT">Passport</option>
                    <option value="BIRTH CERTIFICATE NUMBER">Birth Certificate Number</option>
                </select>
                <div class="error-message" id="error-type_identity"></div>
            </div>
            <div class="input-box">
                <label><b>Origins</b> <span style="color: red">*</span></label>
                <select name="origins" id="origins" required>
                    <option value="">Select Origin</option>
                    <option value="MALAYSIA">MALAYSIA</option>
                    <option value="INDONESIA">INDONESIA</option>
                    <option value="THAILAND">THAILAND</option>
                    <option value="SINGAPORE">SINGAPORE</option>
                    <option value="OTHERS">OTHERS</option>
                </select>
                <div class="error-message" id="error-origins"></div>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Gender</b> <span style="color: red">*</span></label>
                <select name="spouse_gender" id="spouse_gender" required>
                    <option value="">Select Gender</option>
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                </select>
                <div class="error-message" id="error-spouse_gender"></div>
            </div>
            <div class="input-box">
                <label><b>Identification Number</b> <span style="color: red">*</span></label>
                <input type="number" placeholder="Enter identification number" name="spouse_identification_number" required />
                <div class="error-message" id="error-spouse_identification_number"></div>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Phone Number</b> <span style="color: red">*</span></label>
                <input type="number" placeholder="Enter phone number" name="spouse_phone_number" required />
                <div class="error-message" id="error-spouse_phone_number"></div>
            </div>
            <div class="input-box">
                <label><b>Type of Occupation</b> <span style="color: red">*</span></label>
                <select name="spouse_type_occupation" required>
                    <option value="">Select Occupation</option>
                    <option value="GOVERNMENT SECTOR">GOVERNMENT SECTOR</option>
                    <option value="PRIVATE SECTOR">PRIVATE SECTOR</option>
                    <option value="SELF-EMPLOYED">SELF-EMPLOYED</option>
                    <option value="UNEMPLOYED">UNEMPLOYED</option>
                    <option value="RETIREE">RETIREE</option>
                </select>
                <div class="error-message" id="error-spouse_type_occupation"></div>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Bank Account</b> <span style="color: red">*</span></label>
                <select name="spouse_bank_account" required>
                    <option value="">Select Bank Account</option>
                    <option value="AMBANK">AMBANK</option>
                    <option value="BANKISLAM">BANK ISLAM</option>
                    <option value="CIMB">CIMB BANK</option>
                    <option value="MAYBANK">MAYBANK</option>
                    <option value="RHB">RHB BANK</option>
                </select>
                <div class="error-message" id="error-spouse_bank_account"></div>
            </div>
            <div class="input-box">
                <label><b>Account Number</b> <span style="color: red">*</span></label>
                <input type="number" placeholder="Enter account number" name="spouse_account_number" required />
                <div class="error-message" id="error-spouse_account_number"></div>
            </div>
        </div>
        <br><br>
    <?php } 
    else
    {
        echo '<div class="container_s">';
        echo '    <div class="steps_s">';
        echo '        <span class="circle_s">2</span>&nbsp;&nbsp;';
        echo '        <h3>SECTION B : SPOUSE DETAILS</h3>&nbsp;<i>(Skipped)</i>';
        echo '    </div>';
        echo '</div>';
        echo '<br>';
    }
    
    ?>
    
    <?php if($_SESSION['number_children'] > 0) { 
        $number = 0;
    ?>
        <div class="container_s">
            <div class="steps_s">
                <span class="circle_s">3</span>&nbsp;&nbsp;
                <h3>SECTION C : CHILDREN DETAILS</h3>&nbsp;<i>(All details must be in <b>CAPITAL LETTER</b>)</i>
            </div>
        </div> <br>
        <b>Number of children : <?php echo $_SESSION['number_children'] ;?></b><br><br>
        <?php while($number < $_SESSION['number_children']) { 
            $number++;
        ?>
        <table class="table" border=1 width="100%">
        <tr>
            <th>No</th>
            <th>Full name</th>
            <th>Identification number</th>
            <th>Current age</th>
            <th>Status</th>
        </tr>
            <tr>
                <td style="text-align:center;">
                    <div class="input-box">
                    <?php echo "C".$number; ?>
                    </div>
                </td>
                <td>
                    <div class="input-box">
                        <input type="text" placeholder="Enter full name" name="child_name<?php echo $number;?>" pattern="^[A-Z\s]+$" required />
                    </div> 
                </td>
                <td>
                    <div class="input-box">
                        <input type="number" placeholder="Enter mykad" name="child_number<?php echo $number;?>" required />
                    </div>
                </td>
                <td>
                    <div class="input-box">
                        <input type="number" placeholder="Enter age" name="child_age<?php echo $number;?>" required />
                    </div>
                </td>
                <td>
                    <div class="input-box">
                        <select name="child_status<?php echo $number;?>" required>
                            <option value="">Select status</option>
                            <option value="BIOLOGICAL CHILD">BIOLOGICAL CHILD</option>
                            <option value="FOSTER CHILD">FOSTER CHILD</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
            <td></td>
            <td><div class="error-message" id="error-child_name<?php echo $number;?>"></div></td>
            <td><div class="error-message" id="error-child_number<?php echo $number;?>"></div></td>
            <td><div class="error-message" id="error-child_age<?php echo $number;?>"></div></td>
            <td><div class="error-message" id="error-child_status<?php echo $number;?>"></div></td>
            </tr>
            </table>
            <br>
        <?php } ?>
        <br><br>
    <?php 
    }
    else
    {
        
        echo '<div class="container_s">';
        echo '    <div class="steps_s">';
        echo '        <span class="circle_s">3</span>&nbsp;&nbsp;';
        echo '        <h3>SECTION C : CHILDREN DETAILS</h3>&nbsp;<i>(Skipped)</i>';
        echo '    </div>';
        echo '</div>';
        echo '<br>';


    }
    
    ?>

    <?php if($_SESSION['next_of_kin'] == "AVAILABLE") { ?>
        <div class="container_s">
            <div class="steps_s">
                <span class="circle_s">4</span>&nbsp;&nbsp;
                <h3>SECTION D : NEXT OF KIN </h3>&nbsp;<i>(All details must be in <b>CAPITAL LETTER</b>)</i>
            </div>
        </div>
        <div class="input-box">
            <label><b>Full Name</b> <span style="color: red">*</span></label>
            <input type="text" placeholder="Enter full name" name="kin_name" pattern="^[A-Z\s]+$" required />
            <div class="error-message" id="error-kin_name"></div>
        </div>
        <div class="input-box">
            <label><b>Identification number</b> <span style="color: red">*</span></label><br>
            eg: <i>(Mykad/MyPR/MyKAS/Passport/Birth Certificate Number/MyKID)</i>
            <input type="number" placeholder="Enter identification number" name="kin_id_number" required />
            <div class="error-message" id="error-kin_id_number"></div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Relationship</b> <span style="color: red">*</span></label>
                <select name="relationship" required>
                    <option value="">Select status</option>
                    <option value="MOTHER">MOTHER</option>
                    <option value="FATHER">FATHER</option>
                    <option value="SON">SON</option>
                    <option value="DAUGHTER">DAUGHTER</option>
                    <option value="SIBLINGS">SIBLINGS</option>
                    <option value="GRANDCHILD">GRANDCHILD</option>
                </select>
                <div class="error-message" id="error-relationship"></div>
            </div>
            <div class="input-box">
                <label><b>Phone Number</b> <span style="color: red">*</span></label>
                <input type="number" placeholder="Enter phone number" name="kin_phone_number" required />
                <div class="error-message" id="error-kin_phone_number"></div>
            </div>
        </div>
    <?php }
    else
    {
        echo '<div class="container_s">';
        echo '    <div class="steps_s">';
        echo '        <span class="circle_s">4</span>&nbsp;&nbsp;';
        echo '        <h3>SECTION D : NEXT OF KIN DETAILS</h3>&nbsp;<i>(Skipped)</i>';
        echo '    </div>';
        echo '</div>';
        echo '<br>';
    }
    ?>
    <br><br>
    <div class="container_s">
          <div class="steps_s">
                <span class="circle_s">5</span>&nbsp;&nbsp;
                <h3>SECTION E : AGREEMENT</h3>&nbsp;
            </div><br>
    </div>
        <input type="checkbox" style="width: 20px; height: 20px;" required>&nbsp;&nbsp;I, <b><?php echo $_SESSION['name']; ?></b> with identification number <b><?php echo $_SESSION['mykad_number']; ?></b>hereby confirm that all information provided is true, complete, and correct. If I am found to have provided false or fake information, I will be subject to punishment under Section 193 of the Penal Code (Act 574), which may include being summoned or imprisoned for up to three years, and the government reserves the right to retract any approved contributions. I also hereby grant permission for my details, including my earned income, to be checked by any agencies appointed by the Ministry of Finance to determine my eligibility for Rahmah Cash Contribution. All provided information will become government property and may be used for any official programs administered by the government.    
        <br><br>
        <p><b>Date of agreement: </b><span id="date"></span></p>
        <br><br>
        <div class="container_btn">
        <div class="steps_btn">
        <div class="column_s">
            <button  class="btn-back" onClick="history.back()">&larr;Back </button>
            <button type="submit" name="submit" class="btn btn-primary" onClick="validate2()">Next &rarr;</button>
        </div>
        </div>
        </div>
    
</form>

        </div>   
        
        
        <br><br>
    </section>
    <br><br>
</main>

<!-- Footer Start -->
<?php include "footer.php" ?>
<!-- Footer End -->
<script src="javascript/menu.js" defer></script>
<script src="javascript/date.js" defer></script>
</body>
</html>
