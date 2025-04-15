<?php
    session_start();
    include '../../../config/config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    function redirectWithMessage($message): void {
        $_SESSION['notification'] = $message;
        header('location: ../../../auth-signin');
        exit();
    }

    //validate 
    if(empty($email) || empty($password)) {
        redirectWithMessage('All fields are required!');
    }

    $check_user = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email = '$email' AND password = '$password'"
    );

    if(mysqli_num_rows($check_user) == 0) {
        redirectWithMessage("Incorrect username or password");
    }

    $user_id = "";
    $phone = "";

    foreach($check_user as $user) {
        $user_id = $user['user_id'];
        $phone = $user['phone'];
    };

    //user info
    $_SESSION['notification'] = "Welcome back";
    $_SESSION['user'] = [
        "user_id" => $user_id,
        "email" => $email,
        "phone" => $phone,
    ];

    header('location: ../../../index');