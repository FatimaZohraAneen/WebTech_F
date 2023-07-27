<?php 
    include_once('../model/adminModels.php');

    session_start();
    
    if(isset($_POST['submit']))
    {
        $uname = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        


        $src = $_FILES['image']['tmp_name'];
        $des = "../uploads/".$_FILES['image']['name'];


        if(move_uploaded_file($src, $des)){
            echo "success";
        }else{
            echo "error";
        }

        $status = addUser($uname, $password, $email);

        if($status){
            header('location: ../view/login.php');
        }else{
            header('location: ../view/signup.php');
        }
    }else{
        header('location: ../view/login.php');
    }
?>