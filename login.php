<?php
	session_start();
	require_once('./config/db.php');
	require('./components/login.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Авторизация</title>
	<link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
	<svg id="svg" xmlns="http://www.w3.org/2000/svg"></svg>
	<div class="wrapper auth">
		<div class="container_auth">
			<h1>Авторизация</h1>
			<?php 
				if(isset($errors) && count($errors) > 0){
					
					foreach($errors as $error_msg){
							echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<label for="email">Email:</label>
				<input type="text" name="email" placeholder="example@gmail.com" required class="form-control">
				<label for="email">Пароль:</label>
				<input type="password" name="password" placeholder="**********" required class="form-control">
				<div>
					<button type="submit" name="submit" class="btn btn_yellow">Войти</button>	
					<a href="registration.php" class="btn btn_aqua">Регистрация</a>
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