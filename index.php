<?php
session_start();
include_once './core/functions/authentications.php';

if (IsAuthenticated()) {
    header('Location: ./core/characterSelector.php');
}
?>
<html>

<head>
    <title>Dungeons & Cthulhu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <link rel="stylesheet" href="../resources/css/login.css">
</head>

<body>
    <div class="user-pic col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <img class="fluid mx-auto d-block" id="img-logo" src="../resources/img/logo.png" alt="User picture">
    </div>

    <?php include_once './view/message.php'; ?>

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form action="../core/loginController.php" method="post">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" name="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <!-- <input type="submit" class="button" value="Sign In"> -->
                            <input type="hidden" name="action" value="login">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </div>
                </form>
                <form action="../core/loginController-php?action=register" method="post">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Repeat Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <!-- <input type="submit" class="button" value="Sign Up"> -->
                            <button type="button" class="btn btn-primary">Sign In</button>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>