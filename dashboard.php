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
    <link rel="stylesheet" href="./css/style.css">
    <link   rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
            crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 up">
        <div class="row align-items-center">
            <div class="col-10"><h1>Рады Вас видеть, <?= ucfirst($_SESSION['first_name']); ?></h1></div>
            <div class="col-2"><a href="logout.php?logout=true" class="btn btn-light">Выйти</a></div>
        </div>
        <?php
            include_once 'navigation.php';
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>