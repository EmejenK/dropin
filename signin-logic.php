<?php
require 'config/database.php';

if(isset($_POST['submit'])) {
    //get the form data
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$username_email) {
        $_SESSION['signin'] = "Username or Email required";
    } elseif (!$password) {
        $_SESSION['signin'] = "Password Required";
    } else {
        // If all passed then fetch user from database
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1) {
            //If a record is found then convert the record into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            

        } else {
            $_SERVER['signin'] = "User not found"
        }
    }

  

} else {
    header('location:' . ROOT_URL . 'sign-in.php');
    die();
}


?>