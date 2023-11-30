<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"]) || $_SESSION["status"] === FALSE) {
    header('Location: Login/Login.php');
}

if (isset($_SESSION["currPasswordError"]) && $_SESSION["currPasswordError"] != "") {
    $currPasswordError = $_SESSION["currPasswordError"];
}

if (isset($_SESSION["newPasswordError"])  && $_SESSION["newPasswordError"] != "") {
    $newPasswordError = $_SESSION["newPasswordError"];
}

if (isset($_SESSION["reTypePasswordError"])  && $_SESSION["reTypePasswordError"] != "") {
    $reTypePasswordError = $_SESSION["reTypePasswordError"];
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    

</head>

<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Change Password</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li><br>
                <li><a href="Profile.php">My Profile</a></li><br>
                <li><a href="AddOrphans.php">Create Orphan Accounts</a></li><br>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li><br>
                <li><a href="AdoptionRequests.php">View Adoption Requests</a></li><br>
                <li><a href="ChangePassword.php" class="selected">Change Password</a></li> <br>
                <li><a href="../../Controller/Supervisor/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="../../Controller/Supervisor/ChangePassword_Handler.php" method="POST">

                <label for="currentPass">Current Password</label> <br>
                <input type="password" name="currentPass" id="currentPass" style="margin: 5px" onblur="validateInput(this)">
                <span id="currentPassError" class="required"> <br> &nbsp; &nbsp;
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                        echo $currPasswordError;
                    } ?></span>
                <br>

                <label for="newPass" style="color: green">New Password</label> <br>
                <input type="password" name="newPass" id="newPass" style="margin: 5px" onblur="validateInput(this)">
                <span id="newPassError" class="required"> <br> &nbsp; &nbsp;
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                        echo $newPasswordError;
                    } ?> </span> <br>

                <label for="reTypeNewPass" style="color: red">Retype New Password</label> <br>
                <input type="password" name="reTypeNewPass" id="reTypeNewPass" style="margin: 5px" onblur="validateInput(this)">
                <span id="reTypeNewPassError" class="required"> <br> &nbsp;
                    &nbsp;<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                                echo $reTypePasswordError;
                            } ?> </span>
                <br>
                <input id="submitButton" type="submit" name="submit" value="Update" class="request-button" /> <br>

            </form>
            <!-- </form> -->

        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>