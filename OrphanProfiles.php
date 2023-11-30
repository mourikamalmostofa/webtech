<?php


require_once '../../Model/Orphan.php';
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"]) || $_SESSION["status"] === FALSE) {
    header("Location: Login/Login.php");
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



       
    </style>

</head>

<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Orphan Profiles</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="AddOrphans.php">Create Orphan Accounts</a></li>
                <li><a href="orphanProfiles.php" class="selected">View Orphan Profiles</a></li>
                <li><a href="AdoptionRequests.php">View Adoption Requests</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/Supervisor/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="#" method="POST">

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
                    echo '</tr>';
                }

                echo '</table>';
                ?>


            </form>

        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>