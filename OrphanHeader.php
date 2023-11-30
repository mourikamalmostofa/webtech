<?php 
    session_start();
    if(!isset($_SESSION["loginUser_Name"])){
        header("Location: ../../Views/Orphan/Login/Login.php");
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

                <li><span></span><a href="../../Views/Orphan/Profile.php"><?php echo $_SESSION["loginUser_Name"];?></a>
                </li>
                <li><a href="../../Controller/Orphan/Logout_Handler.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <hr>
</body>

</html>