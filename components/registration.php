<?php
    session_start();
    require_once('./config/db.php');

    if(isset($_POST['submit'])){

        if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']) 
            && !empty($_POST['first_name']) 
            && !empty($_POST['last_name']) 
            && !empty($_POST['email']) 
            && !empty($_POST['password'])){

            $firstName = trim($_POST['first_name']);
            $lastName = trim($_POST['last_name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $sql = 'SELECT * from users where email = :email';
                $stmt = $pdo -> prepare($sql);
                $p = ['email' => $email];
                $stmt -> execute($p);
                
                if($stmt -> rowCount() == 0){
                    $sql = "INSERT into users (first_name, last_name, email, `password`) values(:fname,:lname,:email,:pass)";
                
                    try{
                        $handle = $pdo->prepare($sql);
                        $params = [
                            ':fname' => $firstName,
                            ':lname' => $lastName,
                            ':email' => $email,
                            ':pass' => $hashPassword
                        ];
                        
                        $handle -> execute($params);
                        
                        $success = 'Регистрация завершена успешно. Добро пожаловать!';
                        header( 'Refresh:3; URL=login.php' );
                        
                    } catch(PDOException $e){
                        $errors[] = $e->getMessage();
                    }
                } else {
                    $valFirstName = $firstName;
                    $valLastName = $lastName;
                    $valEmail = '';
                    $valPassword = $password;

                    $errors[] = 'Такой email уже есть. Попробуйте снова.';
                }

            } else {
                $errors[] = 'Email адрес введен некорректно.';
            }
        }
    }
?>