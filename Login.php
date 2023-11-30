<?php
session_start();
// error_reporting(0);  // This line will hide all the given errors in php


$mailError = "";
$passwordError = "";
$showErrorMail = "none";
$showErrorPass = "none";

$cookie_mail = "";
$cookie_pass = "";

if (isset($_SESSION['emailError'])) {
    $mailError = $_SESSION['emailError'];
    $showErrorMail = "inline";
    unset($_SESSION['emailError']);
} else {
    $showErrorMail = "none";
}
if (isset($_SESSION['passwordError'])) {
    $passwordError = $_SESSION['passwordError'];
    $showErrorPass = "inline";
    unset($_SESSION['passwordError']);
} else {
    $showErrorPass = "none";
}

// if(isset($_SESSION['cookie_mail'])   &&    isset($_SESSION['cookie_pass'])){
//     $cookie_mail = $_SESSION['cookie_mail'];
//     $cookie_pass = $_SESSION['cookie_pass'];
// }


if (isset($_COOKIE['email'])) {
    if (isset($_COOKIE['email'])) {
        // Use the cookie value
        $cookie_mail  = $_COOKIE['email'];
        $cookie_pass  = $_COOKIE['password'];
    }
}


?>
<!-- Html Part Starts Here -->






<!DOCTYPE html>
<html lang="en">




</head>

<body class="text-break text-center"
    
    data-bs-spy="scroll">
    <div>
        <div class="row">
            <div class="col" style="background-color: tra;">
                <section class="py-4 py-xl-5">
                    <div class="container" style="margin-top: 12%;">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 col-xxl-5 text-center mx-auto"></div>
                        </div>
                        <div class="row d-flex justify-content-center"
                            style="height: 133%;text-shadow: 0px 0px;box-shadow: 0px 0px;">
                            <div class="col" style="color: white;">
                                <h1>Welcome back, friend!</h1>
                                <p class="fs-5">We are excited to have you continue spreading love and making a
                                    difference in our orphanage community <br>
                                    <a href="../../Homepage/LandingPage.php">
                                        <button class="button">Go to Homepage</button>
                                    </a>

                                    <!-- ../../Homepage/LandingPage.php -->
                                </p>
                                    <!-- Login Button -->

                            </div>
                            <div class="col-md-6 col-xl-4 text-center" style="margin-left: 275px;margin-right: 250px;">
                                <div class="card mb-5" style="background-color: blueviolet;">
                                    <div class="card-body d-flex flex-column align-items-center"
                                        style="text-align: center;box-shadow: 0px 0px, 0px 0px 20px 11px;">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">

                                            <!-- iMAGE -->
                                        </div>


                                        <!-- Login Form -->

                                        <form action="../../../Controller/Supervisor/Login_Handler.php"
                                            class="text-center" method="post">

                                            <!-- Mail -->
                                            <div class="mb-3"><input onblur="validateInput(this)" class="form-control" type="text" name="mail"
                                                    id="mail" placeholder="Email"
                                                    value="<?php if ($cookie_mail != "") {echo $cookie_mail;} ?>">
                                                <p id="mailError" style="color: red;"><?php if ($mailError != "") {echo $mailError;} else {echo "";} ?></p>
                                            </div>

                                            <!-- Password -->
                                            <div class="mb-3"><input onblur="validateInput(this)" class="form-control" type="password"
                                                    name="password" id="password" placeholder="Password"
                                                    value="<?php if ($cookie_pass != "") {echo $cookie_pass;} ?>">
                                                <p id="passwordError" style="color: red;"><?php if ($passwordError != "") { echo $passwordError;} else {echo "";} ?></p>

                                            </div>

                                            <!-- Login Button -->
                                            <div class="mb-3"><button class="btn btn-primary d-block w-100"
                                                    type="submit">Login</button></div>

                                            <!-- Remember Me -->
                                            <div class="form-check"><input class="form-check-input" name="rememberMe"
                                                    type="checkbox" id="rememberMe"
                                                    <?php if ($cookie_pass != "") {echo "checked";} ?>><label
                                                    class="form-check-label" for="formCheck-1"
                                                    style="color: white;">Remember Me?</label>
                                            </div>

                                            <!-- Forget Password -->
                                            <p class="text-muted"><a
                                                    href="../Forget_Password/ForgetPassword/ForgetPassword.php">Forgot
                                                    your password?</a>
                                            </p>
                                            <label class="form-check-label" style="color: white;">Didn't have
                                                account?</label> <span class="text-muted">
                                                <a href="../SignUp/SignUp.php">Signup</a>

                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>