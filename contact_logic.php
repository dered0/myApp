<?php
session_start();

//if not logged in


if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header('location: login.php');
  exit;
}



$name = $last_name = $subject = $email = $message = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
   
    $name = trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $subject = trim($_POST['subject']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($subject) || empty($last_name) || empty($email) || empty($message)){
        echo "Proszę wypełnić formularz !";
       
    }else {
        $message = wordwrap($message, 200, "\n");
        $to = 'kamil.makosa13@gmail.com';
        $headers = array(
            'FROM' => $email,
            'Reply-To' => $email
        );
        mail($to, $subject, $message, $headers);
    }

  
}