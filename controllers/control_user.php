<?php
    session_start();
    require_once "../models/database.php";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName) or die('Database Connection Error');

    $update = false;
    $id = "";
    $fname = "";
    $lname = "";
    $gender = "";
    $address = "";
    $email = "";
    $phone = "";
    $pass = "";

    if(isset($_POST['save']))
    {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];

        $insert_Query = "INSERT INTO user (userId,firstName,lastName,gender,address,email,phone)
                         VALUES ('$id','$fname','$lname','$gender','$address','$email','$phone')";
        mysqli_query($conn,$insert_Query);
        
        $insert_Query2 = "insert into login(status,id,password) Values('2','$id','$pass')";
        mysqli_query($conn,$insert_Query2);

        $_SESSION['message'] = "Record has been saved!";
        //$_SESSION['msg_type'] = "success";
        header("Location:../views/showUser.php");
    }

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];

        $update_Query = "UPDATE user SET firstName = '$fname', lastName = '$lname', gender = '$gender', address = '$address',
                        email='$email', phone = '$phone' WHERE userId = $id";
        mysqli_query($conn,$update_Query);
        $update_Query2 = "UPDATE login SET status = '2', password = '$pass' WHERE id = $id";
        mysqli_query($conn,$update_Query2);

        $_SESSION['message'] = "Record has been Updated!";
        //$_SESSION['msg_type'] = "update";
        header("Location:../views/showUser.php");
    }

    if(isset($_POST['refresh']))
    {
        $update = false;
        header("Location:../views/showUser.php");
    }

    if(isset($_GET['delete']))
        {
            $del_id = $_GET['delete'];
            $delete_Query = "DELETE FROM user WHERE userId = $del_id";
            mysqli_query($conn,$delete_Query);
            $delete_Query2 = "DELETE FROM login WHERE id = $del_id";
            mysqli_query($conn,$delete_Query2);

            $_SESSION['message'] = "Record has been deleted!";
            //$_SESSION['msg_type'] = "danger";
            header("Location:../views/showUser.php");
        }
    
        if(isset($_GET['edit']))
        {
            $ed_id = $_GET['edit'];
            $edit_Query = "SELECT * FROM user WHERE userId = $ed_id";
            $res = mysqli_query($conn,$edit_Query);
            $edit_Query2 = "SELECT * FROM login WHERE id = $ed_id";
            $res2 = mysqli_query($conn,$edit_Query2);
            if($res && $res2)
            {
                $row = mysqli_fetch_array($res);
                $row2 = mysqli_fetch_array($res2);

                $update = true;
                $id = $row['userId'];
                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $gender = $row['gender'];
                $address = $row['address'];
                $email = $row['email'];
                $phone = $row['phone'];
                $pass = $row2['password'];
            }
            else
                echo "Error";
        }

?>