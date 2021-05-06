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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper justify-content-center align-items-center">
		<div class="col-md-5 p-4 align-self-center border bg-light">
			<h1 class="p-2 text-center" >Регистрация</h1>
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
                <div class="form-group">
					<label for="first_name">Имя:</label>
					<input type="text" name="first_name" placeholder="Александр" class="form-control" required value="<?php $valFirstName ?>">
				</div>
                <div class="form-group">
					<label for="last_name">Фамилия:</label>
					<input type="text" name="last_name" placeholder="Орлов" class="form-control" required value="<?php $valLastName ?>">
				</div>
                <div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="example@gmail.com" class="form-control" required value="<?php $valEmail ?>">
				</div>
				<div class="form-group">
				<label for="email">Пароль:</label>
					<input type="password" name="password" placeholder="**********" class="form-control" required value="<?php $valPassword ?>">
				</div>
				<button type="submit" name="submit" class="btn btn-success">Сохранить данные</button>
				<p class="pt-2">Вернуться на страницу <a href="login.php">входа</a></p>
			</form>
	    </div>
    </div>
</body>
</html>