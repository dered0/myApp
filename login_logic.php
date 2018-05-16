<?php
// this file include db config
require_once 'db.php';

// form variables
$first_name = $last_name = $password = $password2 = $email = '';
$email_error = $first_name_error = $last_name_error =  $password_error = $password2_error ='';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $first_name = trim($_POST['first_name']);
  $last_name = trim($_POST['last_name']);
  $password = trim($_POST['password']);
  $password2 = trim($_POST['password2']);
  $email = trim($_POST['email']);

//validate email

if(empty($email)){
  $email_error = 'Wprowadź email!';
}else{
  $sql = 'SELECT id FROM users WHERE email = :email';

  if($stmt = $pdo->prepare($sql)){

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    //trying to execute

    if($stmt->execute()){
      // if email already exist:
        if($stmt->rowCount() === 1){
          $email_error = 'Podany e-mail jest już zajęty !';
        }
    }else{
      die('Coś się popsuło :(');
    }
  }
  unset($stmt);
}

//valide name
if(empty($first_name)){
  $first_name_error = 'Proszę wprowadzić imię !';
}

// validate second name
if(empty($last_name)){
  $last_name_error = 'Nie podano nazwiska !';
}

//validate password

if(empty($password)){
  $password_error = 'Proszę wprowadzić hasło !';
}//else if(strlen($password < 6)){
 // $password_error = 'Hasło musi miec co najmniej 6 znakow!';
//}

//validate confirm password
if(empty($password2)){
  $password2_error = 'Proszę potwiedzić hasło !';
}else{
  if($password !== $password2){
    $password2_error = 'Hasła różnią się od siebie !';
  }
}

if(empty($first_name_error) && empty($last_name_error) && empty($email_error) && empty($password_error) && empty($password2_error)){

  $password = password_hash($password, PASSWORD_DEFAULT);

  $sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES(:first_name, :last_name, :email, :password)';
  //bind params
  if($stmt = $pdo->prepare($sql)){
  $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);
 
  //attempt to execute that
    if($stmt->execute()){
      header('location: login.php');
    }else{
      die('Coś nie działa przy zapisaniu do bazy :/');
    }
}
unset($pdo);

}
// dodac obsluge bledow !
//else{
//    header('location: error.php');
//}

}

echo $email_error . $first_name_error . $last_name_error .  $password_error . $password2_error;
?>