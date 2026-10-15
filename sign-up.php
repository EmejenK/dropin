<?php
require 'config/constants.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multiple Blog Website</title>
    <link rel="stylesheet" href="css/style.css">
    <!-----Iconscout CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!----Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@300;400;500;600;700;800;900&
    display=swap" rel="stylesheet">
</head>
<body>


<section class="form_section">
    <div class="container form_section-container">
        <h2>Sign Up</h2>
        <div class="alert_message error">
            <p>This is an error message.</p>
        </div>

        <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="username" placeholder="Username Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="createpassword" placeholder="Create Password">
            <input type="password" name="confirmpassword" placeholder="Confirm Passowrd">
            <div class="form_control">
                <label for="avatar">Use Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>

            <button type="submit" name="submit" class="btn"> Sign Up</button>
            <small>Already have an account?<a href="sign-in.php"> Sign In</a></small>
        </form>
    </div>
</section>

</body>
</html>