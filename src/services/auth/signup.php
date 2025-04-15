<?php
    session_start();
    include '../../../config/config.php';


    $first_name =  $_POST['fname'];
    $last_name  = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    function redirectWithMessage($message): void {
        $_SESSION['notification'] = $message;
        header('location: ../../../auth-signup');
        exit();
    }

    if(empty($first_name) || empty($last_name) || empty($email) || empty($address) || empty($phone) || empty($password) || empty($confirm_password)) {
        redirectWithMessage("All fields are required");
    }

    //validation
    if($password != $confirm_password) {
        redirectWithMessage("Passwords don't match!");
    }

    //validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirectWithMessage("Invalid email address");
    }

    //validate phone number
    if(!preg_match('/^(078|079|072|073)[0-9]{7}$/', $phone)) {
        redirectWithMessage("Invalid phone number");
    }
    

    //check email
    $check_email = mysqli_query(
        $conn,
        "SELECT email FROM users WHERE email = '$email'"
    );

    if(mysqli_num_rows($check_email) > 0) {
        redirectWithMessage("This email is already in use");
    }

    //create user
    $create_user = mysqli_query(
        $conn,
        "INSERT INTO users(first_name, last_name, email, address, phone, password)
        VALUES('$first_name', '$last_name', '$email', '$address', '$phone', '$password')"
    );

    if(!$create_user) {
        redirectWithMessage("Failed to create your account! Try again later");
    }

    $_SESSION['notification'] = "User created successfully!";
    header('location: ../../../aut-signin');



    