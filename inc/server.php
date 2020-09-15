<?php
session_start();
$errors = array();
if(isset($_POST['register'])){

    if($_POST['email'] != $_POST['email_confirm']){
        array_push($errors,'Confirm email is not equal to email');
    }
    if($_POST['password'] != $_POST['password_confirm']){
        array_push($errors,'Confirm password is not equal to password');
    } 

    if(count($errors) == 0){
        $userData['firstname']= $_POST['firstname'];
        $userData['lastname'] = $_POST['lastname'];
        $userData['address'] = $_POST['address'];
        $userData['email'] = $_POST['email'];
        $userData['password'] = $_POST['password'];
    
        $_SESSION['userData'] = $userData;
        
        header('location: login.php');
    }

}

if(isset($_POST['login'])){
    if($_POST['password'] != $_SESSION['userData']['password']){
        array_push($errors, 'Password is incorrect');
    }
    if(count($errors) == 0){
       header('location: dashboard.php'); 
    }
    
}

if(isset($_GET['logout'])){
    unset($_SESSION['userData']);
    header('location: register.php');
}



?>

