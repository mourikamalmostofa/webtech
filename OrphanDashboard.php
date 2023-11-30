<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:Login.php');
}


header('Location:Profile.php');


?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: blueviolet;
}
</style>
</head>
<body>



</body>
</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    

</head>

<body>
     {
  background-color: blueviolet;
}
    <?php include '../../Views/Layout/Orphan/OrphanHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Dashboard</h3>
            <hr>
            <ul>
                <li><a href="../Orphan/Profile.php" class="selected">My Profile</a></li>
                <li><a href="../Orphan/AdopterProfiles.php">View Orphan Profiles</a></li>
                <li><a href="../Orphan/ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/Orphan/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">
            <p>This is the right division.</p>
        </div>
    </div>



    <?php include '../../Views/Layout/Orphan/OrphanFooter.php'; ?>
</body>

</html>