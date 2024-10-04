<?php
    ini_set("session.cookie_lifetime","7200");
    ini_set("session.gc_maxlifetime","7200");
    session_start();
    if (isset($_POST['submit'])) {
        if ($_SESSION['marriage_status'] == 'MARRIED') {
            if (isset($_POST['spouse_name'])) {
                $_SESSION['spouse_name'] = $_POST['spouse_name'];
            } 
    
            if (isset($_POST['type_identity'])) {
                $_SESSION['type_identity'] = $_POST['type_identity'];
            } 
    
            if (isset($_POST['origins'])) {
                $_SESSION['origins'] = $_POST['origins'];
            } 
    
            if (isset($_POST['spouse_gender'])) {
                $_SESSION['spouse_gender'] = $_POST['spouse_gender'];
            } 
    
            if (isset($_POST['spouse_identification_number'])) {
                $_SESSION['spouse_identification_number'] = $_POST['spouse_identification_number'];
            } 
    
            if (isset($_POST['spouse_phone_number'])) {
                $_SESSION['spouse_phone_number'] = $_POST['spouse_phone_number'];
            } 
    
            if (isset($_POST['spouse_type_occupation'])) {
                $_SESSION['spouse_type_occupation'] = $_POST['spouse_type_occupation'];
            }
    
            if (isset($_POST['spouse_bank_account'])) {
                $_SESSION['spouse_bank_account'] = $_POST['spouse_bank_account'];
            }
    
            if (isset($_POST['spouse_account_number'])) {
                $_SESSION['spouse_account_number'] = $_POST['spouse_account_number'];
            }
        }

        if($_SESSION['next_of_kin']=="AVAILABLE")
        {
            if (isset($_POST['kin_name'])) {
                $_SESSION['kin_name'] = $_POST['kin_name'];
            }

            if (isset($_POST['kin_id_number'])) {
                $_SESSION['kin_id_number'] = $_POST['kin_id_number'];
            }

            if (isset($_POST['relationship'])) {
                $_SESSION['relationship'] = $_POST['relationship'];
            }

            if (isset($_POST['kin_phone_number'])) {
                $_SESSION['kin_phone_num'] = $_POST['kin_phone_number'];
            }
        }

        $num=0;
        if($_SESSION['number_children']>0)
        {
            while($num<$_SESSION['number_children'])
                {
                    $num++;
                    
                        if(isset($_POST["child_name" . $num]))
                        {$_SESSION["child_name" . $num] = $_POST["child_name" . $num];
                        }

                        if(isset($_POST["child_number" . $num]))
                        {
                            $_SESSION["child_number" . $num] = $_POST["child_number" . $num];
                        }

                        if(isset($_POST["child_age" . $num]))
                        {
                            $_SESSION["child_age" . $num] = $_POST["child_age" . $num];
                        }

                        if(isset($_POST["child_status" . $num]))
                        {
                            $_SESSION["child_status" . $num] = $_POST["child_status" . $num];
                        }
        }
    }
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Page</title>
    <link rel="stylesheet" href="styles/style2.css" />
    <link rel="stylesheet" href="styles/style_footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="javascript/validate.js" defer></script>
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
                <li><a href="about.html" class="nav_link">About</a></li>
                
            </ul>
            <img src="images/bars.svg" alt="bars icon" id="menu_toggle" />
        </nav>

        <style>
        
    </style>
        </style>
    </header>
    <br><br><br><br>
    <!-- Header End -->

    <section>
    <p>&nbsp; <u style="color:orange"><a class="nav_link" href="index.html" style="color:orange">Home</a></u> <span style="color:gray">/ Application/ Verification</span> </p><br></p><br>
        
        <div class="parent">
            <div class="container_s">
                <div class="steps">
                    <span class="circle active">1</span>
                    <span class="circle active">2</span>
                    <span class="circle active">3</span>
                    <div class="progress-bar">
                        <span class="indicator"></span>
                    </div>
                </div>
            </div>
        </div><br><h1 style="text-align:center;">&nbsp;Please verify the information that you have just entered.<br /></h1>
        
        <div id='printForm'>
        <br><br>
        <div class="form-container">
        <div class="header">
            <img src="images/jata_negara.png" alt="Malaysia Coat of Arms">
            <div class="title">
                <p><b>GOVERNMENT OF MALAYSIA</b></p>
                <p><b>RAHMAH CASH CONTRIBUTION APPLICATION FORM (2024)</b></p>
            </div>
            <div class="location-number">
                <p>BK-01 [1/2024]</p>
            </div>
        </div>
        </div>
        <br><br>
    <!-- Section 1 -->
    
    <link rel="stylesheet" href="styles/style2.css" />
        <div class="form-container">
            <form class="form">
                <div class="container_s">
                    <div class="steps_s">
                        <h3>SECTION A : PERSONAL DETAILS</h3>&nbsp;<i></i>
                    </div>
                </div>
            </form>
        </div>

        <div class="form-container">
    
    <form class="form" style="border: 2px solid #000; padding: 20px; border-radius: 5px;">
        <div class="input-box">
            <label><b>Application Purposes :</b></label>
            <?php echo $_SESSION['purpose']; ?>
        </div>
        <div class="input-box">
            <label><b>Full Name :</b></label>
            <?php echo $_SESSION['name']; ?>
        </div>
        <div class="column_s">
        <div class="input-box">
                <label><b>MyKad Number : </b></label>
                <?php echo $_SESSION['mykad_number']; ?>
            </div>
            <div class="input-box">
                <label><b>Age : </b></label>
                <?php echo $_SESSION['age']; ?>
            </div>
        
        </div>
        
        <div class="column_s">
        <div class="input-box">
            <label><b>Email Address : </b></label>
            <?php echo $_SESSION['email']; ?>
        </div>
            <div class="input-box">
                <label><b>Gender : </b></label>
                <?php echo $_SESSION['gender']; ?>
            </div>
            
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Phone Number : </b> </label>
                <?php echo $_SESSION['phone_number']; ?>
            </div>
            <div class="input-box">
                <label><b>Home Phone Number : </b></label>
                <?php echo $_SESSION['home_number']; ?>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Bank Account : </b></label>
                <?php echo $_SESSION['bank_account']; ?>
            </div>
            <div class="input-box">
                <label><b>Account Number : </b></label>
                <?php echo $_SESSION['account_number']; ?>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Type of Occupation :</b></label>
                <?php echo $_SESSION['type_occupation']; ?>
            </div>
            <div class="input-box">
                <label><b>Total Income:</b></label>
                <?php echo "RM " . $_SESSION['total_income']; ?>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Marriage Status : </b></label>
                <?php echo $_SESSION['marriage_status']; ?>
            </div>
            <?php

            if($_SESSION['marriage_status']!="BACHELOR/SINGLE")
            {
            ?>
            <div class="input-box">
                <label><b>Date 
                <?php
                    echo $_SESSION['marriage_status'] == "MARRIED" ? "of marriage:" : 
                        ($_SESSION['marriage_status'] == "DIVORCED" ? "of divorced:" : "of spouse's death:");
                ?>
                </b></label>
                <?php echo date("d-m-Y", strtotime($_SESSION['status_date'])); ?>
            </div>

            <?php
            }
            ?>
            
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Number of Children :</b></label>
                <?php echo $_SESSION['number_children']; ?>
            </div>
            <div class="input-box">
                <label><b>Status of Next of Kin:</b></label>
                <?php echo $_SESSION['next_of_kin']; ?>
            </div>
        </div>

        <div class="input-box address">
            <label><b>Home address : </b></label>
            <?php echo $_SESSION['address']; ?>
            <div class="column_s">
                <div class="input-box">
                    <label><b>Postcode: </b></label>
                    <?php echo $_SESSION['postcode']; ?>
                </div>
                <div class="input-box">
                    <label><b>City: </b></label>
                    <?php echo $_SESSION['city']; ?>
                </div>
                <div class="input-box">
                    <label><b>State: </b></label>
                    <?php echo $_SESSION['state']; ?>
                </div>
            </div>
        </div>
    </form>
</div><br><br>
<!-- End of Section 1 -->

<!--  Section 2 -->

<?php if($_SESSION['marriage_status']=="MARRIED")
{
?>
<div class="form-container">
        <form class="form">
            <div class="container_s">
                <div class="steps_s">
                    <h3>SECTION B : SPOUSE DETAILS</h3>&nbsp;<i></i>
                </div>
            </div>
        </form>
    </div>

<div class="form-container">
    
    <form class="form" style="border: 2px solid #000; padding: 20px; border-radius: 5px;">
        <div class="input-box">
            <label><b>Full Name :</b></label>
            <?php echo $_SESSION['spouse_name']; ?>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Type Identity : </b></label>
                <?php echo $_SESSION['type_identity']; ?>
            </div>
            <div class="input-box">
                <label><b>Origin Country : </b></label>
                <?php echo $_SESSION['origins']; ?>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Gender : </b> </label>
                <?php echo $_SESSION['spouse_gender']; ?>
            </div>
            <div class="input-box">
                <label><b>Identification Number : </b></label>
                <?php echo $_SESSION['spouse_identification_number']; ?>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Phone Number :</b></label>
                <?php echo $_SESSION['spouse_phone_number']; ?>
            </div>
            <div class="input-box">
                <label><b>Type of Occupation :</b></label>
                <?php echo $_SESSION['spouse_type_occupation']; ?>
            </div>
        </div>
        <div class="column_s">
            <div class="input-box">
                <label><b>Bank Account : </b></label>
                <?php echo $_SESSION['spouse_bank_account']; ?>
            </div>
            <div class="input-box">
                <label><b>Account Number : </b></label>
                <?php echo $_SESSION['spouse_account_number']; ?>
            </div>
        </div>
    </form>
</div> <br><br>
<?php
}

else
{

?>
    <div class="form-container">
        <form class="form">
            <div class="container_s">
                <div class="steps_s">
                    <h3>SECTION B : SPOUSE DETAILS</h3>&nbsp;<i></i>
                </div>
            </div>
        </form>
    </div>

<div class="form-container">
    
    <form class="form" style="border: 2px solid #000; padding: 20px; border-radius: 5px;">
        Not Available
    </form>
    </div>
    <br><br>
<?php
}
?>

<!--  End of Section 2 -->

<!-- Section 3 -->
<?php 
$num=0;
if($_SESSION['number_children']>0)
{
?>

    <div class="form-container">
        <form class="form">
            <div class="container_s">
                <div class="steps_s">
                    <h3>SECTION C : CHILD/CHILDREN DETAILS</h3>&nbsp;<i></i>
                </div>
            </div>
        </form>
    </div>

    <div class="form-container">
    
    <form class="form_s">
    <table border=1 width="80%" class="center">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>MyKad</th>
                    <th>Current Age</th>
                    <th>Status</th>
                </tr>

<?php

    while($num<$_SESSION['number_children'])
    {
        $num++;
?>

                    <tr>
                        
                        <td><?php echo  "C".$num; ?></td>
                        <td><?php echo $_SESSION["child_name" . $num]; ?></td>
                        <td><?php echo $_SESSION["child_number" . $num]; ?></td>
                        <td><?php echo $_SESSION["child_age" . $num]; ?></td>
                        <td><?php echo $_SESSION["child_status" . $num]; ?></td>
                    </tr>


<?php
    }

?>
                    </table>
            </form>
        </div>
    <br><br>
<?php
}

else
{
?>
<div class="form-container">
        <form class="form">
            <div class="container_s">
                <div class="steps_s">
                    <h3>SECTION C : CHILD/CHILDREN DETAILS</h3>&nbsp;<i></i>
                </div>
            </div>
        </form>
    </div>
    <div class="form-container">
    
        <form class="form_s">
            Not Available
        </form>
    </div>
    <br><br>
<?php
}
?>
<!-- End of Section 3 -->

<!-- Section 4 -->
<?php
    if($_SESSION['next_of_kin']!="NOT AVAILABLE")
    {
        if($_SESSION['next_of_kin']=="AVAILABLE")
        {
        
?>
            <div class="form-container">
                <form class="form">
                    <div class="container_s">
                        <div class="steps_s">
                            <h3>SECTION D : NEXT OF KIN</h3>&nbsp;<i></i>
                        </div>
                    </div>
                </form>
            </div>

            <div class="form-container">
    
                <form class="form" style="border: 2px solid #000; padding: 20px; border-radius: 5px;">
                <div class="input-box">
                    <label><b>Full Name : </b></label>
                    <?php echo $_SESSION['kin_name']; ?>
                 </div>
                 <div class="input-box">
                    <label><b>Identification Number: </b></label>
                    <?php echo $_SESSION['kin_id_number']; ?>
                </div>

                 <div class="column_s">
                    <div class="input-box">
                        <label><b>Relationship :</b></label>
                        <?php echo $_SESSION['relationship']; ?>
                    </div>
                    <div class="input-box">
                        <label><b>Phone Number :</b></label>
                        <?php echo $_SESSION['kin_phone_num']; ?>
                    </div>
                </div>
                </form>
            </div>
<?php
        }
        else
        {
?>
                <div class="form-container">
                <form class="form">
                    <div class="container_s">
                        <div class="steps_s">
                            <h3>SECTION D : NEXT OF KIN</h3>&nbsp;<i></i>
                        </div>
                    </div>
                </form>
            </div>

            <div class="form-container">
    
                <form class="form" style="border: 2px solid #000; padding: 20px; border-radius: 5px;">
                    Spouse is choosen as next of kin
                </form>
            </div>


<?php
        }
    }

    else
    {
?>
    <div class="form-container">
                <form class="form">
                    <div class="container_s">
                        <div class="steps_s">
                            <h3>SECTION D : NEXT OF KIN</h3>&nbsp;<i></i>
                        </div>
                    </div>
                </form>
            </div>

            <div class="form-container">
    
                <form class="form" style="border: 2px solid #000; padding: 20px; border-radius: 5px;">
                    Not available
                </form>
            </div>


<?php      
    }
?>

<!-- End of Section 4 -->
<br><br>
<div class="form-container">
                <form class="form">
                    <div class="container_s">
                        <div class="steps_s">
                            <h3>SECTION E: AGREEMENT</h3>&nbsp;<i></i>
                        </div>
                    </div>
                </form>
            </div>
<div class="form-container">
    
    <form class="form_s">
    
        <input type="checkbox" checked disabled style="width: 20px; height: 20px;" required>&nbsp;&nbsp;I, <b><?php echo $_SESSION['name']; ?></b> with identification number <b><?php echo $_SESSION['mykad_number']; ?></b> hereby confirm that all information provided is true, complete, and correct. If I am found to have provided false or fake information, I will be subject to punishment under Section 193 of the Penal Code (Act 574), which may include being summoned or imprisoned for up to three years, and the government reserves the right to retract any approved contributions. I also hereby grant permission for my details, including my earned income, to be checked by any agencies appointed by the Ministry of Finance to determine my eligibility for Rahmah Cash Contribution. All provided information will become government property and may be used for any official programs administered by the government.    
        <br><br>
        <p><b>Date of agreement: </b><span id="date"></span></p>
    </div>
    </form>
</div>
<br><br>
<div class="form-container">
            <button class="button_print" onClick="printElement()" width="100%">Print</button><br>
</div>
<div class="form-container">
            <button class="center" onclick="window.location.href='index.html'">Back to Homepage</button>
</div>
    </section>
    

</main>
<br><br>
<!-- Footer Start -->
<?php include "footer.php" ?>
<!-- Footer End -->
<script src="javascript/print.js" defer></script>
<script src="javascript/menu.js" defer></script>
<script src="javascript/date.js" defer></script>
</body>
</html>
