<html>
    <head>
        <title>Account Check</title>
    </head>
    <body style="background-color:MediumTurquoise">
        <div style="text-align:center">
            <h1 style="color:red">Sorry you have no Account !!!</h1>
            <h2 style="color:green"><b>Please sign-up and complete your reservatoin</b></h2>
        </div>
    </body>
</html>

<?php
    $_SESSION['check'] = true;
    require_once "signup_user.php";
?>

