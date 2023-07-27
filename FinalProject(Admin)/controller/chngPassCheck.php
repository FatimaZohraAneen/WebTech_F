<?php
    require_once '../model/adminModels.php';
    $uname = $_POST["name"];
    $email = $_POST["email"];

    if(empty($username) || empty($email)){
        if(empty($uname)){
            $_SESSION["emtname"] ="*Must provide username";
        }
        if(empty($email)){
            $_SESSION["emtemail"] ="*Must provide the email address";
        }
        header("location: ../view/chngPass.php");
    }

    else{
        $user=['name'=>$uname, 'email'=>$email];
        $status=forgetpassword($user);
        if(isset($_SESSION['user'])){
            $password=$_SESSION['user']['password'];
            $_SESSION['password']="Your password is : {$pass}";
            header('location: ../views/login.php');
        }
        else{
            $_SESSION['password']="Invalid Username or Email Address";
            header('location: ../view/chngPass.php');
        }
    }
?>