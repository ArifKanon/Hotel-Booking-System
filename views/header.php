<?php 

if(isset($_POST['logout'])){
    header('location:index.php');
    session_destroy();
}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Babysitter</title>
    <link rel="icon" href="../assets/imgs/favicon.png">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <div class="navbar">
        <div>
            <h2>HOTEL BANGLA</h2>
        </div>
        <div>
            <form action="" method="post">
                <input type="submit" name="logout" value="Logout" class="btn-logout">
            </form>
            
        </div>
    </div>
</body>
</html>