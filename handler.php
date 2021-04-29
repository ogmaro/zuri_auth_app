<?php
include_once("index.php");
include_once("./helpers/validator.php");

$name = validate(isset($_POST['name']) ? $_POST['name'] : '');
$email = validate(isset($_POST['email']) ? $_POST['email'] : '');
$password = validate(isset($_POST['password']) ? $_POST['password'] : '');
$action = validate(isset($_POST['action']) ? $_POST['action'] : '');


if ($action == 'signin') {
    $signin = new Login;

    $signin = new Login;

    $data = [
        "email" => $email,
        "password" => $password
    ];

    $signin->handler($data);
    header('location: home.php');
}

if ($action === 'signup') {
    $signup = new Register;
    $data = [
        "name" => $name,
        "email" => $email,
        "password" => $password
    ];

    $signup->handler($data);

    header("location: login.php");
}
