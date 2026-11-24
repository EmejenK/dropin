<?php
require 'config/constants.php';
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
        <h2>Sign In</h2>

       <!-------Error Msg------>
       <?php if(isset($_SESSION['signup-success'])) : ?>
        <div class="alert_message success">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
            </p>
        </div>
        <?php endif ?>

        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" placeholder="Username Name or Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit" class="btn"> Sign In</button>
            <small>Don't have an account?<a href="sign-up.php"> Sign Up</a></small>
        </form>
    </div>
</section>

</body>
</html>