<?php
require 'config/constants.php';

//Connect to the  database
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//checking connection error(if any connection the  error is kept out)
if(mysqli_errno($connection)) {
    die(mysqli_errno($connection));
}