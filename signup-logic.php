<?php
session_start();
require 'config/database.php';

//get form signup data if signup  button was clicked

if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    
    //validate input values
    if(!$firstname) {
        $_SESSION['signup'] = "Please enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your Username";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter a valid Email";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8 ){
        $_SESSION['signup'] = "Password should be 8+ characters";
    } elseif  (!$avatar['name']) {
        $_SESSION['signup'] = "Please add avatar";
    } else {
        //check if passwords don't match
        if($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match";
        } else {
            //if they match we hash one of the passwords
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            //echo $createpassword . '<br/>';
            //echo $hashed_password;

            //check if username or email already exists in the database
            $user_check_query = "SELECT * FROM users WHERE username ='$username' OR email ='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Username or email already exists";
            } else {
                //if username and email not taken, then proceed and work on avatar
                //rename avatar
                $time = time();//make each image unique using current timestamp
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];//get temporary name from the array
                $avatar_destination_path = 'images/' .  $avatar_name;

                //make sure file is an image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)) { //checkes if the extention  called is inside  the allowed extention
                    //  make sure the image not too  large(1mb)
                    if($avatar['size']  < 1000000 )  {
                        //then  upload  avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

                    } else {
                        $_SESSION['signup'] = 'File size too big. Should be less tha 1mb';
                    }
                } else {
                    $_SESSION['signup'] = 'File should be png, jpg or jpeg';
                }
            }
        }
    }

    //echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;
    //var_dump($avatar);

    //redirect back to sign up page if any problem
    if(isset($_SESSION['signup'])) {
        //then pass form data to sign up page
        $_SESSION['signup-data'] = $_POST;
        header('location:' . ROOT_URL . 'sign-up.php');
        die();
    } else {
        //if no problem then insert new user into database
        $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES('$firstname', 
        '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";
        
        //insert data into database
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)) {
            // redirect to sign in page with a success msg
            $_SESSION['signup-success'] = "Registration successfull please login";
            header('location:' . ROOT_URL . 'sign-in.php');
            die();
        }

    }

} else {
    //if btn wasn't clicked, bounce back to signup page
    header('location: ' . ROOT_URL . 'sign-up.php');
    die();
}