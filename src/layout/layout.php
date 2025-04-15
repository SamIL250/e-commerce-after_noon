<?php
    session_start();
    include './config/config.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include './src/components/cdns.php';
    ?>
    <title>Document</title>
</head>
<body>
    <!-- //navbar -->
    <?php 
        include './src/components/navbar.php';
        include './src/components/notifications.php'
    ?>

