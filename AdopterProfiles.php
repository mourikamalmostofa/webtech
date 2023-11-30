<?php


require_once '../../Model/Orphan.php';
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"]) || $_SESSION["status"] === FALSE) {
    header('Location:Login.php');
}

$isSelectable = "enabled";
if ($_SESSION["SelectedOrphan"] === $row['id']) {
    $isSelectable = "";
} else {
    $isSelectable = "enabled";
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Profiles</title>
    

<body>
    <?php include '../../Layout/Adopter/AdopterHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Orphan Profiles</h3>
            <hr>
            <ul>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="../Orphan/ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="../../Controller/Adopter/AdoptionRequest_Handler.php" method="POST">

                <?php


                $data = show_all_orphans_data();



                echo '<table border="1">';
                echo '<tr>
                <th>Image</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Body Color</th>
                <th>Adoption Status</th>
                <th>Request</th>
                </tr>';

                foreach ($data as $row) {


                    $file_exists_data = "../../images/Orphan_Images/" . $row['orphan_image'] . "";

                    if (!file_exists($file_exists_data)) {
                        $row['orphan_image'] = "temp.png";
                    }


                    echo '<tr>';
                    echo '<td><img src="../../images/Orphan_Images/' . $row['orphan_image'] . '" height="70px" width="70px"></td>';
                    echo '<td>' . $row['orphan_name'] . '</td>';
                    echo '<td>' . $row['orphan_gender'] . '</td>';
                    echo '<td>' . $row['height'] . '</td>';
                    echo '<td>' . $row['date_of_birth'] . '</td>';
                    echo '<td>' . $row['age'] . '</td>';
                    echo '<td>' . $row['body_color'] . '</td>';
                    echo '<td>' . $row['adoption_status'] . '</td>';
                    echo '<td>  <input type="radio" name="adoption_request" value="' . $row['orphan_id'] . '" ' . $isSelectable . ' class="custom-radio" onclick="selected_radio_button()"> </td>';
                    echo '</tr>';
                }

                echo '</table>';
                ?>

                <button type="submit" class="request-button">Request</button>

            </form>

        </div>
    </div>



    <?php include '../../Layout/Adopter/AdopterFooter.php'; ?>
</body>

</html>