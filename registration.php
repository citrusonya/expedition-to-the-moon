<?php
    session_start();
    require_once('./config/db.php');
    require('./components/registration.php');
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Регистрация</title>
    <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
	<svg id="svg" xmlns="http://www.w3.org/2000/svg"></svg>
    <div class="wrapper auth">
		<div class="container_auth">
			<h1>Регистрация</h1>
			<?php 
				if(isset($errors) && count($errors) > 0){
					
                    foreach($errors as $error_msg){
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success)){
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<label for="first_name">Имя:</label>
				<input type="text" name="first_name" placeholder="Александр" required value="<?php $valFirstName ?>">
				<label for="last_name">Фамилия:</label>
				<input type="text" name="last_name" placeholder="Орлов" required value="<?php $valLastName ?>">
				<label for="email">Email:</label>
				<input type="text" name="email" placeholder="example@gmail.com" required value="<?php $valEmail ?>">
				<label for="password">Пароль:</label>
				<input type="password" name="password" placeholder="**********" required value="<?php $valPassword ?>">
				<div>
					<button type="submit" name="submit" class="btn btn_yellow">Стать новым членом экипажа</button>
					<a href="login.php" class="btn btn_aqua">Вернуться на страницу входа</a>
				</div>
			</form>
	    </div>
    </div>
	<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>