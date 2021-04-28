<?php
include_once("autoload.php");

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$action = isset($_POST['action']) ? $_POST['action'] : '';


if ($action == 'signin') {
    $signin = new Login;

   // var_dump($signin);
}
