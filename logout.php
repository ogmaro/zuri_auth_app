<?php
include_once 'idex.php';

unset($_SESSION['name']);
header("location: login.php");
die;
