<?php
// init session
session_start();

// unset all session values

$_SESSION = array();

session_destroy();

header("Location: login.php");

exit;


