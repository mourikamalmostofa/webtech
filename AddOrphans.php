<?php


require_once '../../Model/Supervisor.php';
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location: Login/Login.php');
}



$nameError = "";
$emailError = "";
$passwordError = "";
$dateOfBirthError = "";
$heightError = "";
$bodyColorError = "";

$JSON_Message = "";
$JSON_Error = "";

$age = "";
$gender = "";

$everythingOK = FALSE;
$everythingOKCounter = 0;


if (isset($_SESSION['S_nameError'])) {
    $nameError = $_SESSION['S_nameError'];
    unset($_SESSION['S_nameError']);
}
if (isset($_SESSION['S_emailError'])) {
    $emailError = $_SESSION['S_emailError'];
    unset($_SESSION['S_emailError']);
}
if (isset($_SESSION['S_passwordError'])) {
    $passwordError = $_SESSION['S_passwordError'];
    unset($_SESSION['S_passwordError']);
}
if (isset($_SESSION['S_dateOfBirthError'])) {
    $dateOfBirthError = $_SESSION['S_dateOfBirthError'];
    unset($_SESSION['S_dateOfBirthError']);
}
if (isset($_SESSION['S_heightError'])) {
    $heightError = $_SESSION['S_heightError'];
    unset($_SESSION['S_heightError']);
}
if (isset($_SESSION['S_bodyColorError'])) {
    $bodyColorError = $_SESSION['S_bodyColorError'];
    unset($_SESSION['S_bodyColorError']);
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Orphan Accounts</title>
    



</head>

<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Create Orphan Accounts</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="AddOrphans.php" class="selected">Create Orphan Accounts</a></li>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li>
                <li><a href="AdoptionRequests.php">View Adoption Requests</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/Supervisor/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="../../Controller/Supervisor/AddOrphans_Handler.php" method="POST">

                <!-- Name -->
                <div class="box icon-holder">
                    <p class="label-margin">Name </p>
                    <input type="text" name="name" id="name" placeholder="Enter Orphan name"
                        onblur="validateInput(this)">
                    <span id="nameError" class="required">&nbsp; * &nbsp;<?php echo $nameError; ?></span>
                </div>

                <!-- Email -->
                <div class="box icon-holder">
                    <p class="label-margin">E-mail </p>
                    <input type="text" name="email" id="email" placeholder="Enter Orphan Email"
                        onblur="validateInput(this)">
                    <span id="emailError" class="required">&nbsp; * &nbsp;<?php echo $emailError; ?></span>
                </div>

                <!-- Password -->
                <div class="box icon-holder">
                    <p class="label-margin">Password </p>
                    <input type="text" name="password" id="password" placeholder="Enter Orphan Password"
                        onblur="validateInput(this)">
                    <span id="passwordError" class="required">&nbsp; * &nbsp;<?php echo $passwordError; ?></span>
                </div>

                <!-- Date of Birth -->
                <div class="box icon-holder">
                    <p class="label-margin">Date of Birth </p>
                    <input type="date" name="dateOfBirth" id="dateOfBirth" placeholder="Enter Orphan Date of Birth"
                        onblur="validateInput(this)">
                    <span id="dateOfBirthError" class="required">&nbsp; * &nbsp;<?php echo $dateOfBirthError; ?></span>
                </div>

                <!-- Gender -->
                <div class="box icon-holder">
                    <p class="label-margin">Gender </p>
                    <select id="gender" name="gender">
                        <option value="male" selected class="">Male</option>
                        <option value="female" class="">Female</option>
                        <option value="other" class="">Other</option>
                    </select>
                </div>

                <!-- Height -->
                <div class="box icon-holder">
                    <p class="label-margin">Height (ft.)</p>
                    <input type="number" name="height" id="height" placeholder="Enter Orphan Height"
                        onblur="validateInput(this)" step="0.01" class="num-input">
                    <span id="heightError" class="required">&nbsp; * &nbsp;<?php echo $heightError; ?></span>
                </div>

                <!-- Body Color -->
                <div class="box icon-holder">
                    <p class="label-margin">Body Color </p>
                    <select id="bodyColor" name="bodyColor">
                        <option value="White" selected class="">White</option>
                        <option value="Light-Brown" class="">Light Brown</option>
                        <option value="Moderate-Brown" class="">Moderate Brown</option>
                        <option value="Dark-Brown" class="">Dark Brown</option>
                    </select>
                </div>

                <!-- Button -->
                <div class="button-container">
                    <button type="submit" id="submitButton" class="signin-button">Create Account</button>
                    </span></p>
                </div>

            </form>


        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>