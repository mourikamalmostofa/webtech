<?php
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header("Location: ../../Views/Supervisor/Login/Login.php");
}


?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    
</head>

<body>
    <header>

        <nav>
            <ul>

                <li><span></span><a 
                        href="../../Views/Supervisor/Profile.php"><?php echo $_SESSION["loginUser_Name"]; ?></a>
                </li>
                <li><a href="../../Controller/Supervisor/Logout_Handler.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <hr>
</body>

</html>