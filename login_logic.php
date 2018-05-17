<?php

// include db config

require_once 'db.php';

//init vars
$email = $password = '';
$email_error = $password_error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($email)){
        $email_error = 'Wprowadź adres email !';
    }

    if(empty($password)){
        $password_error = 'Wprowadź hasło !';
    }

    if(empty($email_error) && empty($password_error)){

        $sql = 'SELECT first_name, email, password FROM users WHERE email = :email';

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);

            if($stmt->execute()){
                if($stmt->rowCount() === 1){
                    if($row = $stmt->fetch()){
                        $hashed_password = $row['password'];
                        if(password_verify($password, $hashed_password)){
                            // LOGIN OK !
                            session_start();
                            $_SESSION['email'] = $email;
                            $_SESSION['first_name'] = $row['first_name'];
                            header('Location: index.php');
                        }else{
                            $password_error = 'Hasło nieprawidłowe !';
                        }

                    }
                }else{
                    $email_error = "Brak konta dla podanego adresu e-mail!";
                }

            }else{
                die('Cos poszlo nie tak :/');
            }

        }
        unset($stmt);

    }

    unset($pdo);

}else{
    echo $email_error . "<br>" . $password_error;
    echo " Zmienne sesyjne - email" . $_SESSION['email'] . ', firstname : ' . $SESSION['first_name'];
}

echo $email_error . "<br>" . $password_error;
    echo " Zmienne sesyjne - email" . $_SESSION['email'] . 
    ', firstname : ' . $SESSION['first_name'];
echo "<br><br>" . $hashed_password;
echo "<br>" . $password . "<br>";
if(password_verify($password, $hashed_password)){
    echo " dziala";
}else{
    echo "klurwa nie dziala";
}

?>