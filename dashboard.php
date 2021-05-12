<?php 
    session_start();
    require_once('./config/db.php');
  
    if(!$_SESSION['id']){
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Экспедиция на луну</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>

<body>
    <svg id="svg" xmlns="http://www.w3.org/2000/svg"></svg>
    <div class="wrapper">
        <div class="container header">
            <h1>Рады Вас видеть, <span><?= ucfirst($_SESSION['first_name']); ?></span>.</h1>
            <a href="logout.php?logout=true" class="link_logout"><ion-icon name="exit-outline"></ion-icon></a>
        </div>
        <?php
            require_once 'navigation.php';
            include_once './pages/profile.php';
            include_once './pages/team.php';
            include_once './pages/electricity.php';
            include_once './pages/water_supply.php';
            include_once './pages/oxygen generation.php';
            include_once './pages/protein_generation.php';
            include_once './pages/reports.php';
            include_once './pages/modal.php';
        ?>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script src="./js/main.js"></script>
</body>