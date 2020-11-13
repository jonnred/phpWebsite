<?php
if (!isset($_POST['submit'])) {
    
    include_once 'databasehandler.inc.php';
    
    $firstName = mysqli_real_escape_string($conn ,$_POST['first']);
    $lastName = mysqli_real_escape_string($conn ,$_POST['last']);
    $userName = mysqli_real_escape_string($conn ,$_POST['username']);
    $password = mysqli_real_escape_string($conn ,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn ,$_POST['confirm-password']);
    $email = mysqli_real_escape_string($conn ,$_POST['email']);
    //
    if (empty($firstName)){
        header("location: ../signup.php?add_first_name");
        exit();
    }
    elseif(empty($lastName)){
        header("location: ../signup.php?add_last_name");
        exit();
    }
    elseif(empty($userName)){
        header("location: ../signup.php?add_username");
        exit();
    }
    elseif(empty($email)){
        header("location: ../signup.php?add_email");
        exit();
    }
    elseif(empty($password)){
        header("location: ../signup.php?add_password");
        exit();
    }
    elseif(empty($confirmPassword)){
        header("location: ../signup.php?add_confirm_password");
        exit();
    }
    elseif ($password != $confirmPassword) {
        header("location: ../signup.php?password_does_not_matched");
        exit();
    }
    else{
        if (!preg_match("/^[a-zA-Z ]*$/", $firstName) || !preg_match("/^[a-zA-Z ]*$/", $lastName)) {
            header("location: ../signup.php?invalid_characters");
            exit();   
        }
        else{
            if (!filter_var($email ,FILTER_VALIDATE_EMAIL)) {
                header("location: ../signup.php?invalid_email");
                exit();
            }
            else {
                $sql = "INSERT INTO users (first,last,username,password,email) VALUES ('$firstName','$lastName','$userName','$password','$email');";
                $result = mysqli_query($conn , $sql);
                header("location: ../signup.php?sign_in_success");
            }
        }
       
    }
}
