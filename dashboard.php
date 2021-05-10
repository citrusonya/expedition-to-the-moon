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
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-10"><h1>Рады Вас видеть, <?php echo ucfirst($_SESSION['first_name']); ?></h1></div>
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
    <script>
        $(document).ready(function() {
            $('.nav-link').on('click', function (e) {
                e.preventDefault();
                $('.content').removeClass('active');
                $('.nav-link').removeClass('active_link');
                $(this).addClass('active_link');
                let itemId = $(this).attr('data-link-id');
                $('.content[data-content-id="' + itemId + '"]').addClass('active');
            });

            $("#country").on('change', function(){
                if($(this).val() == 0){
                    $("#input_country").show();
                } else {
                    $("#input_country").hide();
                }
            })

            $('#add_button').click(function(){
                $('#person_form')[0].reset();
                $('#operation').val("Add");
            });

            $(document).on('submit', '#person_form', function(e){
   
                e.preventDefault();
                const   first_name = $('#first_name').val(),
                        last_name = $('#last_name').val();
                let     sp_id = $("#sp_id").val(),
                        rank_id = $("#rank_id").val(),
                        country_id = $("#country_id").val();

                if(first_name != '' && last_name != '') {
                    
                    $.ajax({
                        url:"crud/person_change.php",
                        method:'POST',
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                            
                        success: function(data){
                            Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Экипаж укомплектован успешно!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                            
                            $('#person_form')[0].reset();
                            $('#userModal').modal('hide');
                        },

                        error:function(data){
                            Swal.fire({
                            icon: 'error',
                            title: 'Произошла ошибка, попробуйте снова.',
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }
                    });
                }
            });

            $('.button_delete').on('click', function(){

                const   id = $(this).attr('id'),
                        personFName = $(this).attr('data-f-name'),
                        personLName = $(this).attr('data-l-name');

                Swal.fire({
                    title: `Вы уверены, что ${personFName} ${personLName} не соответствует специализации?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Да, вернуть на Землю',
                    cancelButtonText: 'Нет'

                }).then((result) => {

                    if (result.isConfirmed) {

                        $.ajax({
                            url:"crud/person_delete.php",
                            method:"POST",
                            data: { id:id },

                            success:function(data){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Бывший сотрудник успешно доставлен домой!',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            },

                            error:function(data){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Что-то пошло не так. Пожалуйста, попробуйте позже.',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        });
                    }
                })
            });
        })
    </script>
</body>