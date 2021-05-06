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
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
	<div class="wrapper justify-content-center align-items-center">
		<div class="col-md-5 p-4 align-self-center border bg-light">
			<h1 class="p-2 text-center">Авторизация</h1>
			<?php 
				if(isset($errors) && count($errors) > 0){
					
					foreach($errors as $error_msg){
							echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="example@gmail.com" required class="form-control">
				</div>
				<div class="form-group">
				<label for="email">Пароль:</label>
					<input type="password" name="password" placeholder="**********" required class="form-control">
				</div>

				<button type="submit" name="submit" class="btn btn-success">Войти</button>
					
				<a href="registration.php" class="btn btn-primary">Зарегистрироваться</a>
			</form>
		</div>
	</div>
</body>

</html>